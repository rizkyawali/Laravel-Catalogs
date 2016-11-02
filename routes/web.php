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

Route::get('home','MainController@index')->name('home');

//SignUp Route
Route::get('signup','UsersController@signup')->name('signup');
Route::post('signup','UsersController@signup_store')->name('signup.store');
//

//Login Route
Route::get('login','LoginController@login')->name('login');
Route::post('login','LoginController@login_store')->name('login.store');
Route::get('logout','LoginController@logout')->name('logout');
//