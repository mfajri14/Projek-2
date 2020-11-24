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
    return view('index');
});

Route::get('/login', 'AuthController@getlogin');
Route::post('/login', 'AuthController@postlogin');
Route::get('/register', 'AuthController@getregister');
Route::post('/register', 'AuthController@postregister');

Route::group(["middleware" => "protek"], function(){
	Route::get('/logout', 'DasboardController@logout');
	Route::get('/home', 'DasboardController@home');
	Route::get('/jadwal', 'DasboardController@jadwal');
	Route::get('keluhan', 'DasboardController@keluhan');
	Route::post('keluhan', 'DasboardController@postkeluhan');
});
