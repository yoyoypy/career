<?php

namespace App\Http\Controllers;
use App\Job;
use App\Skill;
use App\Location;
use App\JobCategory;
use App\Company;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use Illuminate\Support\Str;
use Carbon\Carbon;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Job::with('Location', 'Skill', 'JobCategory', 'Company')->get();
        //dd($items);
        return view('backend.pages.jobs.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.jobs.create')->with([
            'skills' => $skills = Skill::all(),
            'locations' => $locations = Location::all(),
            'categories' => $jobcategories = JobCategory::all(),
            'companies' => $companies = Company::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        // $data = $request->all();
        // $data['slug'] = Str::slug($request->jobtitle);
        // $data['joblocation_id'] = $request->$location->id;
        // $data['jobcategory_id'] = $request->$category->id;
        // $data['skill_id'] = $request->$skill->id;
        // $data['company_id'] = $request->$company->id;

        // Job::create([
        //     'joblocation_id' => $location->id,
        //     'jobcategory_id' => $category->id,
        //     'skill_id' => $skill->id,
        //     'company_id' => $company->id,
        // ]);

        Job::create([
            'slug'               => Str::slug($request->jobtitle),
            'jobtitle'           => $request->input('jobtitle'),
            'jobdescription'     => $request->input('jobdescription'),
            'jobrequirement'     => $request->input('jobrequirement'),
            'joblocation_id'     => $request->input('joblocation_id'),
            'jobcategory_id'     => $request->input('jobcategory_id'),
            'skill_id'           => $request->input('skill_id'),
            'company_id'         => $request->input('company_id'),
            'position'           => $request->input('position'),
            'start'              => Carbon::parse($request->start),
            'end'                => Carbon::parse($request->end),
            'status'             => $request->input('status'),
        ]);

        notify()->success('New Job Added!');
        return redirect()->route('job.index');
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
    public function update(Request $request, $id)
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
