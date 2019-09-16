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

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'department'], function () {
        Route::get('list', 'DepartmentController@index');
        Route::get('add', 'DepartmentController@create');
        Route::post('add', 'DepartmentController@store')->name('add');
        
    });
});
