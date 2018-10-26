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
    Route::prefix('PpProjection')->group(function(){
        Route::get('/','PpProjectionController@index');
        Route::post('/','PpProjectionController@store');
        Route::get('{id}','PpProjectionController@show');
        Route::put('{id}','PpProjectionController@update');
        Route::delete('{id}','PpProjectionController@destroy');
            });
            Route::prefix('Members')->group(function(){
                Route::get('/','MembersController@index');
                Route::post('/','MembersController@store');
                Route::get('{id}','MembersController@show');
                Route::put('{id}','MembersController@update');
                Route::delete('{id}','MembersController@destroy');
                    });
                    Route::prefix('Mentors')->group(function(){
                        Route::get('/','MentorsController@index');
                        Route::post('/','MentorsController@store');
                        Route::get('{id}','MentorsController@show');
                        Route::put('{id}','MentorsController@update');
                        Route::delete('{id}','MentorsController@destroy');
                            });
    
                            Route::prefix('Revisers')->group(function(){
                                Route::get('/','RevisersController@index');
                                Route::post('/','RevisersController@store');
                                Route::get('{id}','RevisersController@show');
                                Route::put('{id}','RevisersController@update');
                                Route::delete('{id}','RevisersController@destroy');
                                    });
});
