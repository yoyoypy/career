<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Env;

class SitemapController extends Controller
{
    public function job()
    {
        $jobs = Job::active()->get();
        $geturl = Env('APP_URL');

        return response()->view('frontend.sitemap', [
            'jobs' => $jobs,
            'geturl' => $geturl
        ])->header('Content-Type', 'text/xml');
    }
}
