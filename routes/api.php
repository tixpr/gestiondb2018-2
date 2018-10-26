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
    route::prefix('ppreport')->group(function(){
    route::get('/','PpReportcontroller@index');
    route::post('/','PpReportcontroller@store');
    route::get('{id}','PpReportcontroller@show');
    route::put('{id}','PpReportcontroller@update');
    route::delete('{id}','PpReportcontroller@destroy');
    });
    route::prefix('ppreviser')->group(function(){
        route::get('/','PpRevisercontroller@index');
        route::post('/','PpRevisercontroller@store');
        route::get('{id}','PpRevisercontroller@show');
        route::put('{id}','PpRevisercontroller@update');
        route::delete('{id}','PpRevisercontroller@destroy');
        });
        route::prefix('ppprojection')->group(function(){
            route::get('/','PpProjectioncontroller@index');
            route::post('/','PpProjectioncontroller@store');
            route::get('{id}','PpProjectioncontroller@show');
            route::put('{id}','PpProjectioncontroller@update');
            route::delete('{id}','PpProjectioncontroller@destroy');
            });
            route::prefix('ppmentor')->group(function(){
                route::get('/','PpMentorcontroller@index');
                route::post('/','PpMentorcontroller@store');
                route::get('{id}','PpMentorcontroller@show');
                route::put('{id}','PpMentorcontroller@update');
                route::delete('{id}','PpMentorcontroller@destroy');
                });
                route::prefix('ppmember')->group(function(){
                    route::get('/','PpMembercontroller@index');
                    route::post('/','PpMembercontroller@store');
                    route::get('{id}','PpMembercontroller@show');
                    route::put('{id}','PpMembercontroller@update');
                    route::delete('{id}','PpMembercontroller@destroy');
                    });
    
});
