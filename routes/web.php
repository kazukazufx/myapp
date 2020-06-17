<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::get('profile', 'Admin\ProfileController@index');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::post('profile/edit', 'Admin\ProfileController@update');
    Route::get('prefix/delete', 'Admin\ProfileController@delete');
});

Route::group(['prefix' => 'member', 'middleware' => 'auth'], function() {
    Route::get('request/create', 'Member\RequestController@add');
    Route::post('request/create', 'Member\RequestController@create');
    Route::get('request/edit', 'Member\RequestController@edit');
    Route::post('request/edit', 'Member\RequestController@update');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
