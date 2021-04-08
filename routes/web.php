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

Route::get('/dashboard', 'DashboardController@index');
Route::prefix('/jobs')->group(function () {
    Route::get('list', 'JobController@index')->name('joblists');
    Route::get('add', 'JobController@create')->name('createjob');
    Route::get('category', 'JobController@category')->name('category');
    Route::get('location', 'JobController@location')->name('location');
    Route::get('skill', 'JobController@skill')->name('joblists');
});

Auth::routes(['register' => false]);
