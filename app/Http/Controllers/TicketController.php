<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ticket;
class TicketController extends Controller
{
    public function index(){
        // $data['datas']=ticket::all();
        // return view("admin.ticket.all_active_tickets",$data);
        $data = Ticket::all();
        return view('admin.ticket.all_active_tickets', compact ('data'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            // 'email' => 'required',
            'priority' => 'required',
            'ticket_subject' => 'required',
            'ticket_category' => 'required',
            'ticket_body' => 'required',
        ]);

        $data = new ticket();
        // $data->email = $request->email;
        $data->user_id = 1;
        $data->ticket_subject = $request->ticket_subject;
        $data->priority = $request->priority;
        $data->ticket_category = $request->ticket_category;
        $data->ticket_body = $request->ticket_body;
        $data->save();

        return redirect()->action('TicketController@index')->with('alert_message', 'Berhasil menambah data!');
    }
    public function create()
    {
        return view('create_ticket');
    }
    public function hapus($id)
    {
        ticket::where('id_ticket', $id)->delete();
        return redirect()->action('TicketController@index')->with('alert_message', 'Berhasil');
    }
    public function show($id)
    {
        $data = ticket::where('id_ticket', $id)->first();
        return view('admin.ticket.ticket_detail', compact('data'));
    }
}
