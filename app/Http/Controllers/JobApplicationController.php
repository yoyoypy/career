<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Application;
use Carbon\Carbon;
use App\Http\Requests\JobApplicationRequest;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.jobsapplication.index');
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
        //dd($request->all());
        $filename = $request->file('cv')->getClientOriginalName();
        $data['cv'] = $request->file('cv')->storeAs(
            'assets/cv', $filename, 'public'
        );

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobApplicationRequest $request, $id)
    {
        //
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
}
