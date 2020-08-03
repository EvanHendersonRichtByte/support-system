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
        $this->validate($request, [
            'email' => 'required',
            'priority' => 'required',
            'ticket_subject' => 'required',
            'ticket_category' => 'required',
            'ticket_body' => 'required',
        ]);

        $data = new Ticket();
        $data->email = $request->email;
        $data->user_id = 1;
        $data->ticket_subject = $request->ticket_subject;
        $data->priority = $request->priority;
        $data->ticket_category = $request->ticket_category;
        $data->ticket_body = $request->ticket_body;
        $data->save();

        return redirect(url('admin/ticket'));
    }
    public function create()
    {
        return view('create_ticket');
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
        return view('user.active_tickets', compact('user','logged_in','tickets'));
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
        $tickets = $data->first();
        $comments = $data->comments()->get();
        $user = $data->users()->first();
        return view('user.ticket_detail', compact('tickets', 'comments', 'user'));
    }
}
