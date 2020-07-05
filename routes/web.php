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

Route::get('/home', 'HomeController@index');
Route::post('/home', 'HomeController@login');
Route::get('/profile/create', 'Admin\ProfileController@add');
Route::post('profile/create', 'Admin\ProfileController@create');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('mypage', 'Admin\ProfileController@index');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::post('profile/edit', 'Admin\ProfileController@update');
    Route::get('profile/delete', 'Admin\ProfileController@delete');
    Route::get('member/create', 'Admin\MemberController@add');
    Route::post('member/create', 'Admin\MemberController@create');
    Route::get('member/edit', 'Admin\MemberController@edit');
    Route::post('member/edit', 'Admin\MemberController@update');
    Route::get('member/delete', 'Admin\MemberController@delete');
    Route::get('shift/create', 'Admin\ShiftController@add');
    Route::post('shift/create', 'Admin\ShiftController@create');
    Route::get('shift/edit', 'Admin\ShiftController@edit');
    Route::post('shift/edit', 'Admin\ShiftController@update');
    Route::get('shift/delete', 'Admin\ShiftController@delete');
    
});


Auth::routes();