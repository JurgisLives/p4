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

Route::get('/', 'LandingController@getIndex');



Route::get('/login', 'LoginController@getLogin');
Route::post('/login', 'LoginController@postLogin');

Route::get('/acct_info', 'AcctController@getAcct');
Route::post('/acct_info', 'AcctController@postAcct');

Route::get('/register', 'RegisterController@getRegister');
Route::post('/register','RegisterController@postRegister');

Route::get('/project', 'ProjectController@getProject');
Route::post('/project', 'ProjectController@postProject');