<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
class login extends Controller
{
    public function cek(Request $req)
    {
        $this->validate($req,[
            'email'=>'required',
            'password'=>'required'
        ]);
        $proses=User::where('email', $req->email)->where('password', $req->password)->first();
        if($proses){
            Session::put('email', $proses->id);
            Session::put('email', $proses->email);
            Session::put('password', $proses->password);
            Session::put('login_status', true);
            return redirect('/client/panel/dashboard');
        }
        else{
            Session::flash('alert_pesan', 'Username dan Password tidak cocok');
            return redirect('user');
        }
    }
}
