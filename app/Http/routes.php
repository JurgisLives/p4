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
    return view('welcome');
});


Route::get('/login', 'LoginController@getIndex');
Route::post('/login', 'LoginController@postIndex');

Route::get('/acct_info', 'AcctController@getIndex');
Route::post('/acct_info', 'AcctController@postIndex');

Route::get('/project', 'AcctController@getIndex');
Route::post('/project', 'AcctController@postIndex');