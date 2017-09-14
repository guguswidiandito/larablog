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

Route::auth();

Route::get('/', 'GuestController@welcome');

Route::get('/contact', 'GuestController@contact');

Route::get('/about', 'GuestController@about');

Route::get('/home', 'HomeController@index');

Route::resource('posts', 'PostController');
