<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\BlogView;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request()->query('search');
        if ($search) {
            $items = Blog::where('title', 'LIKE', "%{$search}%")->paginate(10);
            $blogs = Blog::latest()->get();
        }

        else {
            $items = Blog::paginate(10);
            $blogs = Blog::latest()->get();
        }

        return view('frontend.blog')->with([
            'items' => $items,
            'blogs' => $blogs
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $slug)
    {
        $item = Blog::where('slug', $slug)->firstOrFail();
        $blogs = Blog::orderByDesc('created_at')->get();

        BlogView::createViewLog($item, $request);

        return view('frontend.blogdetail')->with([
            'item' => $item,
            'blogs' => $blogs
        ]);
    }
}
