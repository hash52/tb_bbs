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

Route::get('/', 'ThreadController@index');

Auth::routes();

Route::group(['prefix'=>'threads'], function () {
    Route::group(['middleware'=>'auth'], function () {
        Route::get('new', 'ThreadController@add');
        Route::post('new', 'ThreadController@create');
    });
    Route::get('show', 'ThreadController@show');
});

Route::post('posts/new', 'PostController@create');
