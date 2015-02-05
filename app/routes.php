<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', [
	'as' => 'home',
	'uses' => 'PagesController@home'
]);

Route::get('/admin', [
	'before' => 'auth',
	'as' => 'admin.home',
	'uses' => 'AdminPagesController@home'
]);

Route::get('/admin/login', [
	'as' => 'admin.auth.login',
	'uses' => 'AdminAuthController@login'
]);
