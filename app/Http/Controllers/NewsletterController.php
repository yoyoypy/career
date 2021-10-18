<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsletterRequest;
use App\Mail\ThankYouForSubcribing;
use App\Newsletter;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function store(NewsletterRequest $request)
    {
        $data = $request->all();

        Newsletter::create($data);

        Mail::to($data['email'])->queue(new ThankYouForSubcribing($data));

        flash('Thanks for Subcribing Our Newsletter!')->success();
        return redirect()->route('blog');
    }
}
