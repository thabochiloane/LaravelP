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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/create', 'UserDataController@create')->name('user.create');
Route::get('/index', 'UserDataController@index')->name('user.index');
Route::post('/store', 'UserDataController@store')->name('user.store');
Route::get('/update', 'UserDataController@update')->name('user.update');
Route::post('/edit', 'UserDataController@edit')->name('user.edit');




