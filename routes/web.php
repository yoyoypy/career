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

//routing back end
use App\Application;

Route::prefix('admin')->middleware('auth')->group(function () {

        Route::resource('dashboard', 'DashboardController');

        //job route
        Route::resource('job', 'JobController');
        Route::get('job/{id}/candidate', 'JobController@candidate');

        Route::prefix('/jobs')->group(function () {
                //job category route
                Route::resource('category', 'CategoryController');

                //job location route
                Route::resource('location', 'LocationController');
        });

        //applicant route
        Route::resource('applicant', 'JobApplicationController');
        //applicant route status filter
        Route::get('applicant/status/new', 'JobApplicationController@new');
        Route::get('applicant/status/phone', 'JobApplicationController@phone');
        Route::get('applicant/status/interview', 'JobApplicationController@interview');
        Route::get('applicant/status/hired', 'JobApplicationController@hired');
        Route::get('applicant/status/rejected', 'JobApplicationController@rejected');

        //failed to create pdf view
        //Route::get('applicant/{id}/cv', 'JobApplicationController@viewcv');

        //company route
        Route::resource('company', 'CompanyController');

        //blog route for admin
        Route::resource('blog', 'AdminBlogController');

});

Auth::routes(['register' => false]);

//front end home route
Route::get('/', 'HomeController@index');

//front end job routing
Route::get('job-list', 'JobController@indexlist')->name('jobs');
Route::get('job/{slug}', 'JobController@show'); //job details
Route::get('job/{slug}/apply', 'JobApplicationController@create'); //dynamic job apply
Route::post('job/{slug}/submit', 'JobApplicationController@store'); //store route for apply

//contact us route
Route::get('contact-us', 'ContactController@create')->name('contact');
Route::post('contact-us', 'ContactController@store')->name('contact-us.store');

//blog front end routing
Route::get('blog', 'BlogController@index')->name('blog');
Route::get('blog/{slug}', 'BlogController@show')->name('blogdetails'); //dynamic blog details
Route::post('newsletter/subcribe', 'NewsletterController@store');

//job list by category and location
Route::get('job-category/{id}', 'CategoryController@indexlist');
Route::get('job-location/{id}', 'LocationController@indexlist');
