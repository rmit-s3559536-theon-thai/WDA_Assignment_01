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



Route::get('/', 'staticPagesController@home'); 
Route::get('home', 'staticPagesController@home'); 
Route::get('faq', 'staticPagesController@faq'); 



Route::resource('user', 'UserController');
Route::resource('ticket', 'TicketController');
Route::resource('its', 'itsController');


//View for redirection after creating new ticket
Route::get('ticketview', function () {
    return view('ticket.view');
})->name('ticketview');