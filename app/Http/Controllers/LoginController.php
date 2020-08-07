<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
class LoginController extends Controller
{
    public function index () {
        if(Session::get('user') !== null) {
            return redirect('/client/panel/dashboard');
        } else {
            return view ('user.login');
        }
    }

    public function check (Request $request) {
        $data = User::where('email',$request->email)->where('password', $request->password);
        if($data->count() > 0 ) {
            $request->session()->put('logged_in', true);
            $request->session()->put('user', $data->first());
            $request->session()->put('role', User::find($data->first()->id)->roles()->first());
            return redirect('/client/panel/dashboard');
        } else {
            return redirect('/login')->with('message','Auth Failed');
        }
    }
    public function logout() {
        Session::flush();
        return redirect('/login');
    }

    // ----------------------------------------------------------------------------------------------
    public function adminIndex () {
        if(Session::get('user') !== null) {
            return redirect('/client/panel/dashboard');
        } else {
            return view ('admin.login');
        }
    }

    public function adminCheck (Request $request) {
        $data = User::where('username',$request->username)->where('password', $request->password);
        if($data->count() > 0 ) {
            $request->session()->put('logged_in', true);
            $request->session()->put('user', $data->first());
            $request->session()->put('role', User::find($data->first()->id)->roles()->first());
            return redirect('/admin');
        } else {
            return redirect('/admin/login')->with('message','Auth Failed');
        }
    }
    public function adminLogout() {
        Session::flush();
        return redirect('/admin/login');
    }
}
