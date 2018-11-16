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
Route::prefix('Member')->group(function(){
Route::get('/','MemberController@index');
Route::post('/','MemberController@store');
Route::get('{id}','MemberController@show');
Route::put('{id}','MemberController@update');
Route::delete('{id}','MemberController@destroy');
});
Route::prefix('Mentor')->group(function(){
Route::get('/','MentorController@index');
Route::post('/','MentorController@store');
Route::get('{id}','MentorController@show');
Route::put('{id}','MentorController@update');
Route::delete('{id}','MentorController@destroy');
});
Route::prefix('PpReport')->group(function(){
Route::get('/','PpReportController@index');
Route::post('/','PpReportController@store');
Route::get('{id}','PpReportController@show');
Route::put('{id}','PpReportController@update');
Route::delete('{id}','PpReportController@destroy');
});
Route::prefix('Reviser')->group(function(){
Route::get('/','ReviserController@index');
Route::post('/','ReviserController@store');
Route::get('{id}','ReviserController@show');
Route::put('{id}','ReviserController@update');
Route::delete('{id}','ReviserController@destroy');
});
});
