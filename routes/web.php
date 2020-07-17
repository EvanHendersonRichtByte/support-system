<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
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