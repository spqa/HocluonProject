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
Route::get('/hangouts','HangoutsController@index');

Route::get('/webrtc','WebrtcController@index');

Route::resource('/','IndexController@index');

Route::get('/search','IndexController@search');

Route::get('test','test\BladeController@index');

Route::resource('list','RestfulController');
Route::get('welcome','WelcomeController@index');
Route::get('search','SearchController@search');
Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/auth/facebook','SocialAuthController@redirectToProvider');
Route::get('/auth/facebook/callback','SocialAuthController@handleProviderCallback');
