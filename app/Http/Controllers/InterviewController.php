<?php

namespace App\Http\Controllers;

use App\Application;
use App\Interview;
use Illuminate\Http\Request;
use App\Http\Requests\InterviewRequest;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interviews = Interview::with('applicant')->get();
        $events = [];

        foreach ($interviews as $interview){
        $events[] = \Calendar::event(
            $interview->title,
            true,
            new \DateTime($interview->date),
            new \DateTime($interview->date),
            1,
            [
                'url' => route('interview.show', $interview->id)
            ]
        );
    };

        $calendar = \Calendar::addEvents($events);

        return view('backend.pages.interview.index')->with([
            'interviews' => $interviews,
            'calendar'    => $calendar
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $applications = Application::where('status', 'interview')->get();

        return view('backend.pages.interview.create')->with([
            'applications' => $applications
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InterviewRequest $request)
    {
        Interview::create($request->all());

        flash('Schedule Added!')->success();
        return redirect()->route('interview.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function show(Interview $interview)
    {
        $interview = Interview::with('applicant')->first();
        // dd($interview);
        return view('backend.pages.interview.show')->with([
            'interview' => $interview
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function edit(Interview $interview)
    {
        $interview = Interview::with('applicant')->first();
        dd($interview);

        flash('Schedule Edited!')->success();
        return view('backend.pages.interview.edit')->with([
            'interview' => $interview
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function update(InterviewRequest $request, Interview $interview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interview $interview)
    {
        $interview->delete();

        flash('Schedule Deleted!')->error();
        return redirect()->route('interview.index');
    }
}
