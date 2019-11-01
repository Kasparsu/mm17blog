<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resources(['posts' => 'ApiPostController']);
Route::post('login', 'JWTController@authenticate');
Route::get('me', 'JWTController@me');
Route::get('logout', 'JWTController@logout');
//Route::get('posts', 'ApiPostController@index');
//Route::post('posts', 'ApiPostController@store');
//Route::get('posts/{post}', 'ApiPostController@show');
//Route::patch('posts/{post}', 'ApiPostController@update');
//Route::delete('posts/{post}', 'ApiPostController@destroy');
