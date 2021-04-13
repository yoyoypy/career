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

//jobs setting
// Route::prefix('/jobs')->group(function () {
//     Route::get('/list', 'JobController@index')->name('joblists');
//     Route::get('/add', 'JobController@create')->name('createjob');
// });


//routing back end
Route::prefix('admin')->group(function () {

//job route
Route::resource('job', 'JobController');

Route::prefix('/jobs')->group(function () {
        //job category route
        Route::resource('category', 'CategoryController');

        //job location route
        Route::resource('location', 'LocationController');

        //skill route
        Route::resource('skill', 'SkillController');
});

//applicant route
Route::resource('applicant', 'JobApplicationController');

//company route
Route::resource('company', 'CompanyController');

});

Auth::routes(['register' => false]);
