<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('request', function () {
    return view('task');
});

Route::resource('task', 'TaskController@store');

Auth::routes();

Route::get('/home', 'HomeController@index');
