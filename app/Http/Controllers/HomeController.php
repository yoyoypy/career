<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class HomeController extends Controller
{
    public function index(){

        $items = Location::all();
        //dd($items);
        return view('frontend.home')->with([
            'items' => $items
            ]);
    }
}
