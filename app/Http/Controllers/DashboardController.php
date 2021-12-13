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
    public function index()
    {
        return view('backend.pages.dashboard')->with([
            'applications'          => Application::with('Job')->latest()->take(5)->get(),
            'job_count'             => Job::active()->count(),
            'applications_count'    => Application::count(),
            'new'                   => Application::where('status', 'new')->count(),
            'interview'             => Application::where('status', 'interview')->count(),
            'reject'                => Application::where('status', 'rejected')->count()
        ]);
    }
}
