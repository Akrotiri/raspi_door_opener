<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
//    return view('pages.pins');
    shell_exec("python ~/Desktop/tests_relay/open_door.py");
});

Route::get('pin-test', 'PinTestController@getIndex');

//Test
Route::get('GetUrlContent', 'GetUrlContentController@index');


