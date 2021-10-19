<?php

namespace App\Http\Controllers;

use App\Application;
use App\Interview;
use Illuminate\Http\Request;
use App\Http\Requests\InterviewRequest;
use App\Mail\InterviewInvitation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

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

        $data = $request->all();
        $data['time'] = Carbon::parse($request->time)->format('H:i');

        Interview::create($data);

        flash('Schedule Added!')->success();
        return redirect()->route('interview.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Interview::with('applicant')->findOrFail($id);
        $item['time'] = date('h:i a', strtotime($item->time));

        return view('backend.pages.interview.show')->with([
            'item' => $item
        ]);
    }

    public function invite($id)
    {
        $interview = Interview::with('applicant')->where('id', $id)->first();

        $interview->send_mail = '1';
        $interview->save();

        $usermail = $interview->applicant->email;

        $applicant = Application::where('id', $interview->applications_id)->first();

        Mail::to($usermail)->send(new InterviewInvitation($interview, $applicant));

        flash('Invitation Send Successfully!')->success();
        return redirect()->route('interview.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function edit(Interview $interview)
    {
        $applications = Application::where('status', 'interview')->get();

        return view('backend.pages.interview.edit')->with([
            'interview' => $interview,
            'applications' => $applications
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
        $data = $request->all();
        $data['time'] = Carbon::parse($request->time)->format('H:i');

        Interview::find($interview);
        $interview->update($data);

        flash('Schedule Edited!')->success();
        return redirect()->route('interview.index');
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
