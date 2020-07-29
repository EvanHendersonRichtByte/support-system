<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detail;
class ControllerDetail extends Controller
{
    public function index(){
        $data['datas']=detail::all();
        return view("ticket_detail",$data);
    }
}
