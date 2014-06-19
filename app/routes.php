<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('page', 'PageController');
Route::resource('rooms', 'RoomsController');
Route::get('roomlist', 'RoomsController@roomlist');

Route::get('/',function()
	{
		return Redirect::route('page.index');
	});
Route::get('housekeeping', 'PageController@houseKeeping');
Route::get('new-reservation', 'PageController@newReservation');
