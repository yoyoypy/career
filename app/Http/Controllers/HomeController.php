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
        $categories = JobCategory::all();
        $locations = Location::all();
        $jobs = Job::latest()->take(4)->get();
        //dd($items);
        return view('frontend.home')->with([
            'items'         => $items,
            'categories'    => $categories,
            'locations'     => $locations,
            'jobs'          => $jobs
            ]);
    }
}
