<?php

Route::get('/', 'DashboardController@index');
Route::get('/save', 'DashboardController@save');
Route::get('/get', 'DashboardController@get');
// Route::get('/', function() {
//     return view('Welcome');
// });
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/', function() {
// 	return "hello world!";
// });
// Route::get('/amien', function() {
//     return "hello amien";
// });