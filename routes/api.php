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
    Route::prefix('PpProjection')->group(function(){
        Route::get('/','PpProjectionController@Index');
        Route::post('/','PpProjectionController@store');
        Route::get('{id}','PpProjectionController@show');
        Route::put('{id}','PpProjectionController@update');
        Route::delete('{id}','PpProjectionController@destroy');
    });
    Route::prefix('PpReport')->group(function(){
        Route::get('/','PpReportController@Index');
        Route::post('/','PpReportController@store');
        Route::get('{id}','PpReportController@show');
        Route::put('{id}','PpReportController@update');
        Route::delete('{id}','PpReportController@destroy');
    });
    Route::prefix('PpReviser')->group(function(){
        Route::get('/','PpReviserController@Index');
        Route::post('/','PpReviserController@store');
        Route::get('{id}','PpReviserController@show');
        Route::put('{id}','PpReviserController@update');
        Route::delete('{id}','PpReviserController@destroy');
    });
    
    Route::prefix('PpMember')->group(function(){
        Route::get('/','PpMemberController@Index');
        Route::post('/','PpMemberController@store');
        Route::get('{id}','PpMemberController@show');
        Route::put('{id}','PpMemberController@update');
        Route::delete('{id}','PpMemberController@destroy');
    });
    
    Route::prefix('PpMentor')->group(function(){
        Route::get('/','PpMentorController@Index');
        Route::post('/','PpMentorController@store');
        Route::get('{id}','PpMentorController@show');
        Route::put('{id}','PpMentorController@update');
        Route::delete('{id}','PpMentorController@destroy');
    });
});





