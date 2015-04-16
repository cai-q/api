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

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
//	'optimize' => 'Web\OptimizeController'
]);

Route::get('optimize', [
    'middleware' => 'auth.basic',
    'uses' => 'Web\OptimizeController@getOptimize'
]);
Route::post('optimize', [
    'middleware' => 'auth',
    'uses' => 'Web\OptimizeController@postOptimize'
]);

//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');
//Route::post('password/email', 'Auth\PasswordController@postEmail');
//Route::get('password/email', 'Auth\PasswordController@getEmail');
//Route::get('password/reset', 'Auth\PasswordController@getReset');
//Route::post('password/reset', 'Auth\PasswordController@postReset');
