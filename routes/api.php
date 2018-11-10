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
        Route::get('/','UserController@index');
        Route::post('/','UserController@store');
        Route::get('{id}','UserController@show');
        Route::put('{id}','UserController@update');
        Route::delete('{id}','UserController@destroy');
    });
    
    Route::prefix('revisers')->group(function(){
        Route::get('/','Pp_RevisersController@index');
        Route::post('/','Pp_RevisersController@store');
        Route::get('{id}','Pp_RevisersController@show');
        Route::put('{id}','Pp_RevisersController@update');
        Route::delete('{id}','Pp_RevisersController@destroy');
    });

    Route::prefix('reports')->group(function(){
        Route::get('/','Pp_ReportsController@index');
        Route::post('/','Pp_ReportsController@store');
        Route::get('{id}','Pp_ReportsController@show');
        Route::put('{id}','Pp_ReportsController@update');
        Route::delete('{id}','Pp_ReportsController@destroy');
    });

    Route::prefix('projections')->group(function(){
        Route::get('/','Pp_projectionsController@index');
        Route::post('/','Pp_projectionsController@store');
        Route::get('{id}','Pp_projectionsController@show');
        Route::put('{id}','Pp_projectionsController@update');
        Route::delete('{id}','Pp_projectionsController@destroy');
    });

    Route::prefix('mentors')->group(function(){
        Route::get('/','Pp_MentorsController@index');
        Route::post('/','Pp_MentorsController@store');
        Route::get('{id}','Pp_MentorsController@show');
        Route::put('{id}','Pp_MentorsController@update');
        Route::delete('{id}','Pp_MentorsController@destroy');
    });

    Route::prefix('members')->group(function(){
        Route::get('/','Pp_MembersController@index');
        Route::post('/','Pp_MembersController@store');
        Route::get('{id}','Pp_MembersController@show');
        Route::put('{id}','Pp_MembersController@update');
        Route::delete('{id}','Pp_MembersController@destroy');
    });
});


