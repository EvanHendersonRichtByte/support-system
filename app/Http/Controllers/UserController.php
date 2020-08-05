<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Session;
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
            User::create(['email' => $email, 'username' => $username, 'password' => $password]);
            $request->session()->put('logged_in', true);
            $data = User::where('email',$request->email)->where('password', $request->password);
            $request->session()->put('user', $data->first());
            return redirect('/client/panel/dashboard');
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
    public function destroy(User $user)
    {
        //
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
}
