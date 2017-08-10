<?php

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
    return view('home');
});


//View for redirection after creating new ticket
Route::get('ticketview', function () {
    return view('ticket.view');
})->name('ticketview');


Route::resource('user', 'UserController');
Route::resource('ticket', 'TicketController');


