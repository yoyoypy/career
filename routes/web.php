<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::prefix('admin')->middleware('auth')->group(function () {

        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        //job route
        Route::resource('job', 'JobController')->except('destroy');
        Route::get('job/{id}/candidate', 'JobController@candidate')->name('candidate');

        Route::prefix('/jobs')->group(function () {
                //job category route
                Route::resource('category', 'CategoryController');

                //job location route
                Route::resource('location', 'LocationController');

                //custom question route
                Route::resource('question', 'QuestionController');
                Route::resource('question.value', 'ValueController')->shallow()->except('edit');
        });

        //web traffic route
        Route::resource('traffic', 'TrafficController');

        //applicant route
        Route::resource('applicant', 'JobApplicationController');
        Route::get('view-cv/{id}', 'JobApplicationController@viewcv')->name('view-cv');
        Route::get('download-cv/{id}', 'JobApplicationController@downloadcv')->name('download-cv');

        //applicant route status filter
        Route::get('applicant/status/new', 'JobApplicationController@new')->name('applicant.new');
        Route::get('applicant/status/interview', 'JobApplicationController@interview')->name('applicant.interview');
        Route::get('applicant/status/hired', 'JobApplicationController@hired')->name('applicant.hired');
        Route::get('applicant/status/rejected', 'JobApplicationController@rejected')->name('applicant.rejected');

        //Route::resource('user', UserController::class);

        //company route
        Route::resource('company', 'CompanyController');

        //blog route for admin
        Route::resource('blog', 'AdminBlogController');

        //contact inbox
        Route::resource('contact-us', 'ContactController')->except('create', 'store');

        //branch
        Route::resource('branch', 'BranchController')->except('show');

        //route interview
        Route::resource('interview', 'InterviewController');
        Route::post('invite/{id}', 'InterviewController@invite')->name('invite');

});

//utility
//auth
Auth::routes(['register' => false]);

//front end home route
Route::get('/', 'HomeController@index')->name('index');

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
Route::get('job-category/{id}', 'CategoryController@indexlist')->name('jobcategory');
Route::get('job-location/{id}', 'LocationController@indexlist')->name('joblocation');


//sitemap
Route::get('sitemap.xml', 'SitemapController@sitemap');
