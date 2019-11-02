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
    return view('fe.layouts.index');
});
Route::get('/1', function () {
    return view('fe.layouts.index');
});


Route::get('test', 'TestController@gettest');
Route::post('test', 'TestController@posttest')->name('test');

Route::any('/search', 'PagesController@search');
Route::any('/search_results', 'PagesController@search_results');


// stafflogin
Route::get('/staff', 'PagesController@getloginstaff');
Route::get('/staff/login', 'PagesController@getloginstaff');
Route::post('/staff/login', 'PagesController@postloginstaff')->name('staff_login');
Route::get('/staff/logout', 'PagesController@logoutstaff');

Route::group(['prefix' => '', 'middleware'=>'is_all'], function () {
    
// frontend
Route::get('/', 'PagesController@index');
Route::get('/index', 'PagesController@all');
Route::get('/index.html', 'PagesController@index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/department/{id}', 'PagesController@department')->name('department');
Route::get('/sidebar_right', 'PagesController@sidebar_right')->name('sidebar_right');
Route::get('news/category/{id}', 'PagesController@category')->name('category');
Route::get('/news', 'PagesController@news')->name('news');
Route::get('/news/{id}', 'PagesController@newsingle')->name('newsingle');
Route::get('staff/account/{id}', 'PagesController@getaccount');
Route::post('staff/account/{id}', 'PagesController@postaccount');
Route::post('comment/{id}', 'CommentController@store');
Route::post('video/comment/{id}', 'CommentController@store_video')->name('comment_video');
Route::get('/images', 'PagesController@images')->name('images');
Route::get('/gallery_videos', 'PagesController@gallery_videos')->name('gallery_videos');
Route::get('/gallery_videos/video/{id}', 'PagesController@video')->name('video');

Route::get('/procedure/{id}', 'PagesController@procedure')->name('procedure');
Route::get('/form', 'PagesController@form')->name('form');

});




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

    Route::group(['prefix' => 'videos'], function () {
        Route::get('list', 'GalleryVideosController@index')->name('list_video');
        Route::get('add', 'GalleryVideosController@create');
        Route::post('add', 'GalleryVideosController@store')->name('add_video');
        Route::get('edit/{id}', 'GalleryVideosController@edit')->name('edit');
        Route::post('edit/{id}', 'GalleryVideosController@update')->name('update');
        // Route::get('delete/{id}', 'GalleryVideosController@destroy')->name('destroy');  
        Route::post('destroy', 'GalleryVideosController@destroy')->name('destroy_video'); 
    });

    Route::group(['prefix' => 'forms'], function () {
        Route::get('list', 'FormController@index')->name('list_form');
        Route::get('add', 'FormController@create');
        Route::post('add', 'FormController@store')->name('add_form');
        Route::get('edit/{id}', 'FormController@edit')->name('edit');
        Route::post('edit/{id}', 'FormController@update')->name('update');
        // Route::get('delete/{id}', 'FormController@destroy')->name('destroy');  
        Route::post('destroy', 'FormController@destroy')->name('destroy_form'); 
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
    Route::group(['prefix' => 'comment'], function () {
        
        Route::get('delete/{id}', 'CommentController@destroy')->name('destroy');   
    });
});
