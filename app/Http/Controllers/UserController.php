<?php

namespace App\Http\Controllers;

use App\User;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Session;
use PDF;
class UserController extends Controller
{
    public function __construct() {
        $this->middleware('check_login');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $val = Session::get('logged_in');
        $user = Session::get('user');
        if($val === true && $user){
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $email = $request->email;
        $username = $request->firstname . " " . $request->lastname;
        $password = $request->password;
        $confirmPassword = $request->confirmPassword;
        if ($password !== $confirmPassword) {
            return redirect('/login');
        } else {
            $user = new User();
            $user->email = $email;
            $user->username = $username;
            $user->password = $password;
            $user->img_url = 'https://lorempixel.com/400/800/cats/?57549';
            $user->save();

            $user->roles()->attach(2);
            
            $request->session()->put('logged_in', true);
            $data = User::where('email',$request->email)->where('password', $request->password);
            $request->session()->put('user', $data->first());
            
            return redirect('/client/panel/dashboard');
            // User::create(['email' => $email, 'username' => $username, 'password' => $password]);
            // return redirect('/client/panel/dashboard');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::where('id', $id)->get();
            return view('admin.client_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update(['email' => $request->email, 'username' => $request->username, 'password' => $request->password]);
         
        return redirect()->action('UserController@client')->with('alert_message', 'Berhasil mengubah data!');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, User $user)
    {
        $tickets = User::find($user->id)->tickets()->get();
        if (count($tickets) > 0) {
            foreach ($tickets as $ticket) {
                Ticket::find($ticket->id)->delete();
            }
            DB::table('role_user')->where('user_id', $user->id)->delete();
            User::find($user->id)->delete();
            return redirect('/logout');
        } else {
            DB::table('role_user')->where('user_id', $user->id)->delete();
            User::find($user->id)->delete();
            return redirect('/logout');
        }
        
    }

    public function dashboard(User $user) {
        $user = Session::get('user');
        $logged_in = Session::get('logged_in');
        $tickets = User::find($user->id)->tickets()->get();
        return view('user.dashboard', compact('user','logged_in','tickets'));
    }

    public function profile(User $user) {
        $user = Session::get('user');
        $logged_in = Session::get('logged_in');
        return view('user.profile', compact('user','logged_in'));
    }

    public function client(){
        $data = User::all();
        return view('admin.client', compact ('data'));
    }
    public function getDownload()
    {
        $user = Session::get('user');
        $data = User::find($user->id);
        $role = $data->roles()->first()->name;
        $tickets = $data->tickets()->get();
        $pdf = PDF::loadView('user.myPDF', ['data' => $data, 'role' => $role, 'tickets' => $tickets]);
        return $pdf->download($user->username . '\'s ' . 'data' );
    }
}
