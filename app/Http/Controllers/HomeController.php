<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use App\Location;
use App\JobCategory;

class HomeController extends Controller
{
    public function index(){

        $categories = JobCategory::inRandomOrder()->take(8)->get();
        $locations = Location::all();
        $jobs = Job::latest()->take(4)->get();

        return view('frontend.home')->with([
            'categories'    => $categories,
            'locations'     => $locations,
            'jobs'          => $jobs
            ]);
    }
}
