<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\JobCategory;

class HomeController extends Controller
{
    public function index(){

        $items = Location::all();
        $categories = JobCategory::all();
        //dd($items);
        return view('frontend.home')->with([
            'items' => $items,
            'categories' => $categories
            ]);
    }
}
