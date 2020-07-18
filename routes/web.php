<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/login', function () {
    return view('user.login');
});
Route::get('/client/panel/dashboard', function () {
    return view('user.dashboard');
});
Route::get('/ticket/active-tickets', function () {
    return view('user.active_tickets');
});
Route::get('/ticket/closed-tickets', function () {
    return view('user.closed_tickets');
});
Route::get('/client/panel/profile', function () {
    return view('user.profile');
});
Route::get('/user/{$id}/change-password', function ($id) {
    return view('alluser.change_password', compact('id'));
});
Route::get('/ticket/open', function () {
    return view('user.open_tickets');
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