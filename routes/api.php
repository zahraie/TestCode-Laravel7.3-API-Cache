<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/users', [
    'as' => 'users',
    'uses' => 'UserController@index'
]);

Route::get('/users/{user}', [
    'as' => 'users.show',
    'uses' => 'UserController@show'
]);

Route::post('/users', [
    'as' => 'users.create',
    'uses' => 'UserController@create'
]);

Route::post('/users/{user}', [
    'as' => 'users.update',
    'uses' => 'UserController@update'
]);
