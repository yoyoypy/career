<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Job;
use App\Questions;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $items = Questions::all();

        return view('backend.pages.jobs.question.index')->with([
            'items' => $items
        ]);
    }

    public function create()
    {
        $jobs = Job::all();

        return view('backend.pages.jobs.question.create')->with([
            'jobs' => $jobs
        ]);
    }

    public function store(QuestionRequest $request)
    {
        $data = $request->all();

        Questions::create($data);

        flash('Question Added!')->success();
        return redirect()->route('question.index');
    }

    public function edit($id)
    {
        $item = Questions::findOrFail($id);
        $jobs = Job::all();

        return view('backend.pages.jobs.question.edit')->with([
            'item' => $item,
            'jobs' => $jobs
        ]);
    }

    public function update(QuestionRequest $request, $id)
    {
        $data = $request->all();

        $item = Questions::findOrFail($id);

        $item->update($data);

        flash('Question Update Success')->success();
        return redirect()->route('question.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Questions::findOrFail($id);
        $item->delete();

        flash('Question Deleted!')->warning();
        return redirect()->route('question.index');
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
       //
    }
}
