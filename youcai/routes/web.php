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

Route::get('/', 'IndexController@index');
Route::get('/about', 'IndexController@about');
Route::get('/contact', 'IndexController@contact');
Route::get('/gallery', 'IndexController@gallery');
Route::get('/services', 'IndexController@services');
Route::get('/typo', 'IndexController@typo');

//路由前缀
Route::prefix('admin')->group(function () {
    Route::namespace('Admin')->group(function () {
        Route::get('/', 'IndexController@index')->middleware('login.admin');
        Route::get('/index/main', 'IndexController@main')->middleware('login.admin');
        Route::get('/index/menu', 'IndexController@menu');

        Route::get('/login', 'LoginController@index');
        Route::post('/login/login', 'LoginController@login');
        Route::get('/login/logout', 'LoginController@logout');

        Route::get('/setting/index', 'SettingController@index');
        Route::post('/setting/save', 'SettingController@save');

        Route::get('/team/memberList', 'TeamController@memberList');
    });
});
