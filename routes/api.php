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

Route::namespace('Api')->group(function(){
    route::prefix('user')->group(function(){
    route::get('/','UserController@index');
    route::post('/','UserController@store');
    route::get('{id}','UserController@show');
    route::put('{id}','UserController@update');
    route::delete('{id}','UserController@destroy');
    });
});
