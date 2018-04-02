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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/new','UserController@index');
// Route::get('/input','UserController@submit');
// Route::post('/input','UserController@submited');
// Route::get('/','UserController@show')->middleware('User');
// Route::get('/form','UserController@form');
// //route view untuk menampilkan langsung view yang ada Route::view('/about') -> view nya 'about'
// // Route::view('/about','about');
// Route::post('/about','UserController@about');
// Route::get('/form2','UserController@form2');
// Route::post('/about2','UserController@about2');
// //mengganti bahasa yang digunakan untuk menampilkan view secara default menggunakan bahasa english
// Route::get('/msg/{language?}','UserController@msg');
// Route::get('/insert','UserController@insert');
// Route::get('/login','LoginController@index');
// Route::post('/store','LoginController@store');
// Route::get('/pagination','UserController@pagination');
// Route::get('/join','UserController@join');
// Route::get('/path','UserController@path');

Route::group([
	'prefix'=>'dashboard'
], function(){
	Route::resource('/','API');
});
Route::get('/upload','UserController@upload');
Route::post('/upload','UserController@store');