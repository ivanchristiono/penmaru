<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();
//Route::get('/dashboard', 'MyController@showAbout');
Route::get('/', 'HomeController@index');
Route::get('/dashboard', function(){
    return view('layouts.app');
});

Route::group(['prefix'=>'member', 'middleware'=>['auth', 'role:member']], function () {
    Route::resource('events','EventController');
    Route::resource('schools','SchoolController');
    Route::resource('cities','CityController');
 });

 Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'role:admin']], function () {
    
 });