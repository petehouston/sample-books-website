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

Route::get('/search', [
	'as' => 'search',
	'uses' => 'PagesController@search'
]);

Route::post('/search', [
	'as' => 'search.post',
	'uses' => 'PagesController@postSearch'
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

Route::post('/admin/login', [
	'as' => 'admin.auth.login.post',
	'uses' => 'AdminAuthController@processLogin'
]);

Route::get('/admin/logout', [
	'as' => 'admin.logout',
	'uses' => 'AdminAuthController@processLogout'
]);

Route::get('/admin/book/add', [
	'as' => 'admin.books.add',
	'uses' => 'AdminBookManagementController@showAddForm'
]);

Route::post('/admin/book/add', [
	'as' => 'admin.books.add.post',
	'uses' => 'AdminBookManagementController@postAddForm'
]);

Route::get('/admin/book/edit/{id}', [
	'as' => 'admin.books.edit',
	'uses' => 'AdminBookManagementController@showEditForm'
]);

Route::put('/admin/book/edit/{id}', [
	'as' => 'admin.books.edit.put',
	'uses' => 'AdminBookManagementController@putEditForm'
]);

Route::delete('/admin/book/{id}', [
	'as' => 'admin.books.delete',
	'uses' => 'AdminBookManagementController@processDelete'
]);
