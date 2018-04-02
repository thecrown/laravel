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
    return view('welcome');
});
Route::get('/login', 'sessionController@login');
Route::get('/logout', 'sessionController@destroy');

Route::get('/register','registerController@create');
Route::get('/logoutberhasil',function(){
	return view('behasil');
});
Route::post('/register','registerController@store');
Route::get('/admin','AmienController@index');