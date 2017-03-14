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

Route::get('/', 'HomeController@index');

Route::group(['namespace' => 'User\Auth', 'prefix' => 'user'], function () {
    Route::get('auth', 'AuthController@showAuthForm');
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
});

Route::group(['namespace' => 'User', 'prefix' => 'user'], function () {
    Route::post('order/new', 'OrderController@create');
});
