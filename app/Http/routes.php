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

Route::get('/','ForumController@index');


Route::get('question/{id}','QuestionController@show');
Route::post('question/reply/{id}',['middleware'=>'auth','uses'=>'QuestionController@reply']);

Route::get('ask',['middleware'=>'auth','uses'=>'QuestionController@index']);
Route::post('ask',['middleware'=>'auth','uses'=>'QuestionController@store']);





Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');




