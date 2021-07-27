<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use App\Job;
use App\Application;
use Carbon\Carbon;
use App\Http\Requests\JobApplicationRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ThanksForApplication;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Application::with('Job')->get();

        return view('backend.pages.jobsapplication.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug)
    {
        $item = Job::where('slug', $slug)->firstorfail();
        //dd($item);
        return view('frontend.apply')->with([
            'item' => $item,
            'Job' => $jobsvacancies = Job::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobApplicationRequest $request)
    {
        $data = $request->all();
        $usermail = $request->input('email');
        // dd($request->all());
        $filename = $request->file('cv')->getClientOriginalName();
        $data['cv'] = $request->file('cv')->storeAs(
            'assets/cv', $filename, 'public'
        );

        Mail::to($usermail)->send(new ThanksForApplication($data));
        Application::create($data);

        return view('frontend.jobapplied');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Application::findOrFail($id);
        return view('backend.pages.jobsapplication.show')->with([
            'item' => $item
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewcv($id)
    {
        $item = Application::findOrFail($id);
        $headers = [
            'Content-Type' => 'application/pdf'
        ];
        return view('backend.pages.jobsapplication.showcv')->with(
            ['item'=>$item]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Application::findOrFail($id);

        return view('backend.pages.jobsapplication.edit')->with([
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        //dd($request);
        $item = Application::findOrFail($id);
        $item->update($data);

        flash('Status Changed!')->success();
        return redirect()->route('applicant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function new()
    {
        $items = Application::where('status', 'new')->with('Job')->get();
       //dd($items);
        return view('backend.pages.jobsapplication.status')->with([
            'items' => $items
        ]);
    }

    public function phone()
    {
        $items = Application::where('status', 'phone interview')->with('Job')->get();
        //dd($items);
        return view('backend.pages.jobsapplication.status')->with([
            'items' => $items
        ]);
    }

    public function interview()
    {
        $items = Application::where('status', 'interview')->with('Job')->get();
        //dd($items);
        return view('backend.pages.jobsapplication.status')->with([
            'items' => $items
        ]);
    }

    public function hired()
    {
        $items = Application::where('status', 'hired')->with('Job')->get();
        //dd($items);
        return view('backend.pages.jobsapplication.status')->with([
            'items' => $items
        ]);
    }

    public function rejected()
    {
        $items = Application::where('status', 'rejected')->with('Job')->get();
        //dd($items);
        return view('backend.pages.jobsapplication.status')->with([
            'items' => $items
        ]);
    }
}
