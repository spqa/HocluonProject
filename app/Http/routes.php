<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('index', function(){
    return view('index');
});

Route::get('/home',['as'=>'home','uses'=>'HomeController@index']);

Route::get('/hangouts',function(){
    return view('hangouts');
});

Route::get('/webrtc',function(){
    return view('webrtc');
});

Route::resource('lists','ListsController');

Route::get('test','test\BladeController@index');