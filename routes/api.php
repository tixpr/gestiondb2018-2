<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------f------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::namespace('Api')->group(function(){
    Route::prefix('user')->group(function(){
        Route::get('/','UserController@index');
        Route::post('/','UserController@store');
        Route::get('{id}','UserController@show');
        Route::put('{id}','UserController@update');
        Route::delete('{id}','UserController@destroy');
    });
    Route::prefix('pp_projection')->group(function(){
        Route::get('/','PpProjectionController@index');
        Route::post('/','PpProjectionController@store');
        Route::get('{id}','PpProjectionController@show');
        Route::put('{id}','PpProjectionController@update');
        Route::delete('{id}','PpProjectionController@destroy');
    });
    Route::prefix('pp_report')->group(function(){
        Route::get('/','PpReportController@index');
        Route::post('/','PpReportController@store');
        Route::get('{id}','PpReportController@show');
        Route::put('{id}','PpReportController@update');
        Route::delete('{id}','PpReportController@destroy');
    });
    Route::prefix('pp_reviser')->group(function(){
        Route::get('/','PpReviserController@index');
        Route::post('/','PpReviserController@store');
        Route::get('{id}','PpReviserController@show');
        Route::put('{id}','PpReviserController@update');
        Route::delete('{id}','PpReviserController@destroy');
    });
    Route::prefix('pp_mentor')->group(function(){
        Route::get('/','PpMentorController@index');
        Route::post('/','PpMentorController@store');
        Route::get('{id}','PpMentorController@show');
        Route::put('{id}','PpMentorController@update');
        Route::delete('{id}','PpMentorController@destroy');
    });
    Route::prefix('pp_member')->group(function(){
        Route::get('/','PpMemberController@index');
        Route::post('/','PpMemberController@store');
        Route::get('{id}','PpMemberController@show');
        Route::put('{id}','PpMemberController@update');
        Route::delete('{id}','PpMemberController@destroy');
    });
});
