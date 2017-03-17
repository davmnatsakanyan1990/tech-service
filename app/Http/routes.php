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
    Route::get('logout', 'AuthController@logout');

    Route::get('password/reset/{token?}', 'PasswordController@showResetForm');
    Route::post('password/email', 'PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'PasswordController@reset');
});

Route::group(['namespace' => 'User', 'prefix' => 'user'], function () {
    Route::post('order/new', 'OrderController@create');
    Route::get('orders', 'OrderController@index');
});

Route::post('order/new', 'HomeController@makeOrder');