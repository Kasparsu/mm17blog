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

Route::get('/', 'PublicController@index');
Route::get('/posts', 'PublicController@posts');
Route::get('/posts/{post}', 'PublicController@viewPost');

Route::get('admin/posts', 'PostController@index');
Route::get('admin/posts/new', 'PostController@create');
Route::post('admin/posts/new', 'PostController@store');
Route::get('admin/posts/{post}', 'PostController@show');
Route::get('admin/posts/edit/{post}', 'PostController@edit');
Route::post('admin/posts/edit/{post}', 'PostController@update');
Route::get('admin/posts/delete/{post}', 'PostController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
