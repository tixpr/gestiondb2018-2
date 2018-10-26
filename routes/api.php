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
    Route::prefix('user')->group(function(){
        Route::get('/','UserController@Index');
        Route::post('/','UserController@store');
        Route::get('{id}','UserController@show');
        Route::put('{id}','UserController@update');
        Route::delete('{id}','UserController@destroy');
    });
});
