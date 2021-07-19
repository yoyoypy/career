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

        return view('backend.pages.dashboard')->with([
            'applications'   => $applications
        ]);
    }
}
