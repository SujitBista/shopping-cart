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

Route::get('/', 'ProductController@getIndex')->name('product.index');
Route::get('/signup','UserController@getIndex');
Route::post('/signup','UserController@postSignUp')->name('user.signup');

Route::get('/signin','UserController@getSignIn');
Route::post('/signin','UserController@postSignIn')->name('user.signin');

Route::get('/profile','UserController@getProfile')->name('user.profile');

//Route::get('user/login', 'UserController@getLogIn')->name('user.login');
Route::get('user/logout', 'UserController@getLogout');

Route::post('user/logout', 'UserController@getLogout')->name('user.signout');
