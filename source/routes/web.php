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

Route::get('/test', 'TestController@test')->name('test');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'backend', 'middleware' => ['auth','role:admin-access|owner-access'], 'as'=>'backend'], function() {

    //Dashboard
    Route::get('/', 'Backend\DashboardController@index')->name('.dashboard');

    //Category
    Route::group(['prefix' => 'category', 'as'=>'.category'], function() {
        Route::get('/', 'Backend\CategoryController@index')->name('.manage');
        Route::get('/create', 'Backend\CategoryController@create')->name('.create');
        Route::post('/create', 'Backend\CategoryController@store')->name('.store');
        Route::get('/edit/{id}', 'Backend\CategoryController@edit')->name('.edit');
        Route::post('/edit/{id}', 'Backend\CategoryController@update')->name('.update');
        Route::get('/detail/{id}', 'Backend\CategoryController@show')->name('.show');
    });
});