<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\User;
use Session;

class TicketController extends Controller
{
    public function __construct() {
        $this->middleware('check_login');
    }
    
    public function index()
    {
        $data = Ticket::all();
        return view('admin.ticket.all_active_tickets', compact('data'));
    }
    public function store(Request $request)
    {
        $user_id = Session::get('user')->id;
        // $role = User::find($user_id)->roles()->first()->name;
        $this->validate($request, [
            'priority' => 'required',
            'ticket_subject' => 'required',
            'ticket_category' => 'required',
            'ticket_body' => 'required',
        ]);

        $data = new Ticket();
        // $data->email = $request->email;
        $data->user_id = $user_id;
        $data->ticket_subject = $request->ticket_subject;
        $data->priority = $request->priority;
        $data->ticket_category = $request->ticket_category;
        $data->ticket_body = $request->ticket_body;
        $data->status = 'New';
        $data->assigned_on = 'Admin';
        $data->save();
            return redirect(url('ticket/active-tickets'));
        // if($role === "Admin"){
        //     return redirect(url('admin/ticket'));
        // } else {
        //     return redirect(url('ticket/active-tickets'));
        // }
        // return $request;
    }
    public function create()
    {
        return view('user.open_tickets');
    }
    public function delete($id)
    {
        Ticket::find($id)->delete();
        return redirect('/admin/ticket');
    }
    public function show($id)
    {
        $data = Ticket::find($id);
        $tickets = $data->first();
        $comments = $data->comments()->get();
        return view('admin.ticket.ticket_detail', compact('tickets', 'comments'));
    }

    public function activeTickets(User $user) {
        $user = Session::get('user');
        $logged_in = Session::get('logged_in');
        $tickets = User::find($user->id)->tickets()->get();
        if($tickets) {
            return view('user.active_tickets', compact('user','logged_in','tickets'));
        } else {
            return view('user.active_tickets', compact('user','logged_in'));
        }
    }

    public function closedTickets(Ticket $ticket,User $user) {
        $user = Session::get('user');
        $logged_in = Session::get('logged_in');
        $tickets = User::find($user->id)->tickets()->get();
        return view('user.closed_tickets', compact('user','logged_in','tickets'));
    }

    public function userTicketDetail($id)
    {
        $data = Ticket::find($id);
        $comments = $data->comments()->get();
        $user = $data->users()->first();
        return view('user.ticket_detail', compact('data', 'comments', 'user'));
    }
}
