<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Job;

class DashboardController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){

        $applications = Application::with('Job')->orderByDesc('created_at')->get();

        $job_count = Job::count();
        $applications_count = Application::count();

        return view('backend.pages.dashboard')->with([
            'applications'          => $applications,
            'job_count'             => $job_count,
            'applications_count'    => $applications_count
        ]);
    }
}
