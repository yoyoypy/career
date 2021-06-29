<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Blog::all();

        return view('frontend.blog')->with([
            'items' => $items
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $item = Blog::where('slug', $slug)->firstOrFail();

        return view('frontend.blogdetail')->with([
            'item' => $item
        ]);
    }
}
