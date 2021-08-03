<?php

namespace App\Http\Controllers;

use App\Job;
use App\Questions;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        return view('backend.pages.jobs.question.index');
    }

    public function create()
    {
        $jobs = Job::all();

        return view('backend.pages.jobs.question.create')->with([
            'jobs' => $jobs
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Questions::create($data);

        flash('Question Added!')->success();
        return redirect()->route('question.index');
    }
}
