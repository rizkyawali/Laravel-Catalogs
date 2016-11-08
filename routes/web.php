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

Route::get('/', 'MainController@index')->name('home');
Route::resource('front-route', 'MainController');

//SignUp Route
Route::get('signup','UsersController@signup')->name('signup');
Route::post('signup','UsersController@signup_store')->name('signup.store');
//

//Login Route
Route::get('login','LoginController@login')->name('login');
Route::post('login','LoginController@login_store')->name('login.store');
Route::get('logout','LoginController@logout')->name('logout');
//

//Products Route
Route::get('list_products','ProductsController@index')->name('list_products');
Route::resource('products','ProductsController');
Route::get('new_product','ProductsController@create')->name('new_product');
Route::post('/admin/product/save','ProductsController@store')->name('add_product.store');
//

//Comments Route
Route::resource('comments', 'CommentsController');
//