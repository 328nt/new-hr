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

// test
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('index', function () {
    return view('be.layouts.index');
});
Route::get('/1', function () {
    return view('fe.layouts.index');
});

// frontend
Route::get('/', 'PagesController@index');
Route::get('/index.html', 'PagesController@index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/news', 'PagesController@news')->name('news');
Route::get('/news/{id}', 'PagesController@newsingle')->name('newsingle');


// adminlogin
Route::get('/admin', 'UserController@getloginadmin');
Route::get('/admin/login', 'UserController@getloginadmin');
Route::post('/admin/login', 'UserController@postloginadmin')->name('admin_login');
Route::get('admin/logout', 'UserController@logoutadmin');

Route::get('export', 'ExcelController@export')->name('export');
Route::get('importExportView', 'ExcelController@importExportView');
Route::post('import', 'ExcelController@import')->name('import');
// endadminlogin

// admin
Route::group(['prefix' => 'admin' , 'middleware' => 'is_admin'], function () {

    Route::group(['prefix' => 'department'], function () {
        Route::get('list', 'DepartmentController@index');
        Route::get('add', 'DepartmentController@create');
        Route::post('add', 'DepartmentController@store')->name('add');
        Route::get('edit/{id}', 'DepartmentController@edit')->name('edit');
        Route::post('edit/{id}', 'DepartmentController@update')->name('update');
        Route::get('delete/{id}', 'DepartmentController@destroy')->name('destroy');   
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('list', 'UserController@index');
        Route::get('add', 'UserController@create');
        Route::post('add', 'UserController@store')->name('add_user');
        Route::get('edit/{id}', 'UserController@edit')->name('edit_user');
        Route::post('edit/{id}', 'UserController@update')->name('update_user');
        Route::get('delete/{id}', 'UserController@destroy')->name('destroy');   
    });

    Route::group(['prefix' => 'news'], function () {
        Route::get('list', 'NewsController@index');
        Route::get('add', 'NewsController@create');
        Route::post('add', 'NewsController@store')->name('add_news');
        Route::get('edit/{id}', 'NewsController@edit')->name('edit_news');
        Route::post('edit/{id}', 'NewsController@update')->name('update_news');
        Route::get('delete/{id}', 'NewsController@destroy')->name('destroy');   
    });
});
