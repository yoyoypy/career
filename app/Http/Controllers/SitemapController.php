<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Env;

class SitemapController extends Controller
{
    public function sitemap()
    {
        $jobs = Job::active()->get();
        $blogs = Blog::all();

        return response()->view('frontend.sitemap', [
            'jobs' => $jobs,
            'blogs' => $blogs
        ])->header('Content-Type', 'text/xml');
    }
}
