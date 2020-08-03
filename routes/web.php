<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['check_login']], function () {
    Route::get('/', function () {
        return view('welcome'); 
    });

    Route::get('/client/panel/dashboard', 'UserController@dashboard');
    
    Route::get('/client/panel/profile', 'UserController@profile');

    Route::get('/ticket/active-tickets', 'TicketController@activeTickets');

    Route::get('/ticket/detail/{id}', 'TicketController@userTicketDetail');

    Route::get('/ticket/closed-tickets', 'TicketController@closedTickets');

    Route::resource('/user', 'UserController')->withoutMiddleware([check_login::class]);
      
    

    

    Route::get('/user/{$id}/change-password', function ($id) {
        return view('alluser.change_password', compact('id'));
    });

    Route::get('/ticket/open', function () {
        return view('user.open_tickets');
    });
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/admin/admin-report', function () {
    return view('admin.admin_report.admin_report');
});
Route::get('/admin/app-permission/user-list', function () {
    return view('admin.user_settings.user_list');
});
Route::get('/admin/app-permission/role-list', function () {
    return view('admin.user_settings.role_list');
});
Route::get('/admin/app-permission/role-access', function () {
    return view('admin.user_settings.role_access');
});
Route::get('/admin/ticket-payment', function () {
    return view('admin.ticket_payment');
});
// -------------------------------------------------------------------------
Route::get('/admin/ticket/open', function () {
    return view('admin.ticket.create_ticket');
});

Route::get('/admin/ticket/my-ticket', function () {
    return view('admin.ticket.my_active_tickets');
});
Route::get('/admin/ticket/my-paid-ticket', function () {
    return view('admin.ticket.my_paid_tickets');
});
Route::get('/admin/ticket/my-closed-ticket', function () {
    return view('admin.ticket.my_closed_tickets');
});
Route::get('/admin/ticket/my-assigned-ticket', function () {
    return view('admin.ticket.my_assigned_tickets');
});
Route::get('/admin/ticket/unassigned-ticket', function () {
    return view('admin.ticket.my_unassigned_tickets');
});
Route::get('/admin/ticket/all-paid-ticket', function () {
    return view('admin.ticket.all_paid_tickets');
});
Route::get('/admin/ticket/closed-ticket', function () {
    return view('admin.ticket.all_closed_tickets');
});
// -------------------------------------------------------------------------
Route::get('/admin/admin-chat', function () {
    return view('admin.web_chat.chat_panel');
});
Route::get('/admin/chat-canned-msg', function () {
    return view('admin.web_chat.chat_canned_message');
});
// -------------------------------------------------------------------------
Route::get('/admin/ticket-feedback', function () {
    return view('admin.ticket_feedback');
});
Route::get('/admin/notice', function () {
    return view('admin.announcements');
});
Route::get('/admin/knowledge', function () {
    return view('admin.knowledge');
});
Route::get('/admin/category', function () {
    return view('admin.category');
});
Route::get('/admin/canned-msg', function () {
    return view('admin.canned_msg');
});
Route::get('/admin/client', function () {
    return view('admin.client');
});
// -------------------------------------------------------------------------
Route::get('/admin/admin-message', function () {
    return view('admin.message.my_message');
});
Route::get('/admin/admin-message/sent', function () {
    return view('admin.message.sent_message');
});

// Addon
Route::get('/admin/ticket', "TicketController@index");

Route::get('/create_ticket', 'TicketController@create'); 

Route::post('/all_active_tickets/store', 'TicketController@store');

Route::delete('/ticket/delete/{id}', 'TicketController@delete');

Route::get('/ticket/show/{id}', "TicketController@show");

// test
Route::get('/login', 'LoginController@index');
Route::post('/check_login', 'LoginController@check');
Route::get('logout', 'LoginController@logout');
Route::get('/test', function () {
    return Session::all();
});