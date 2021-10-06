<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use App\Location;
use App\JobCategory;

class HomeController extends Controller
{
    public function index(){

        $items = Location::all();
        $categories = JobCategory::inRandomOrder(8)->get();
        $locations = Location::all();
        $jobs = Job::latest()->take(4)->get();

        return view('frontend.home')->with([
            'items'         => $items,
            'categories'    => $categories,
            'locations'     => $locations,
            'jobs'          => $jobs
            ]);
    }
}
