<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::group(['middleware' => 'auth.basic'], function () {
    Route::get('/tickets', 'TicketAPIController@index');
    Route::get('/tickets/{id}', 'TicketAPIController@show');
    Route::post('/tickets', 'TicketAPIController@store');
    Route::put('/tickets/{id}', 'TicketAPIController@update');
    Route::delete('/tickets/{id}', 'TicketAPIController@destroy');
});