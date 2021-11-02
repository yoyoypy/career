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

        $applications = Application::with('Job')->latest()->take(5)->get();
        $new = Application::where('status', 'new')->count();
        $interview = Application::where('status', 'interview')->count();
        $reject = Application::where('status', 'rejected')->count();

        $job_count = Job::count();
        $applications_count = Application::count();

        return view('backend.pages.dashboard')->with([
            'applications'          => $applications,
            'job_count'             => $job_count,
            'applications_count'    => $applications_count,
            'new'                   => $new,
            'interview'             => $interview,
            'reject'                => $reject
        ]);
    }
}
