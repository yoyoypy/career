<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsletterRequest;
use App\Newsletter;

class NewsletterController extends Controller
{
    public function store(NewsletterRequest $request)
    {
        $data = $request->all();

        Newsletter::create($data);

        flash('Thanks for Subcribing Our Newsletter!')->success();
        return redirect()->route('blog');
    }
}
