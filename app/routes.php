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
Route::get('/',function()
	{
		return Redirect::route('page.index');
	});
Route::get('rooms', 'PageController@rooms');
Route::get('housekeeping', 'PageController@houseKeeping');
