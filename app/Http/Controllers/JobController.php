<?php

namespace App\Http\Controllers;
use App\Application;
use App\Job;
use App\Location;
use App\JobCategory;
use App\Company;
use App\Answers;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Job::with('Location', 'JobCategory', 'Company')->get();
        //dd($items);
        return view('backend.pages.jobs.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexlist()
    {
        $jobsearch = request()->query('jobsearch');
        $location = request('location');

        if ($jobsearch) {
            $jobs = Job::where([
                ['jobtitle', 'LIKE', "%{$jobsearch}%"],
                ['joblocation_id','LIKE', "%{$location}%"]
                ])->where('status', 'active')->paginate();
            $categories = JobCategory::all();
            $locations = Location::all();
        }
        else{
        $jobs = Job::with('Location', 'JobCategory', 'Company')->where('status', 'active')->paginate();
        $categories = JobCategory::all();
        $locations = Location::all();
        }

        return view('frontend.joblist')->with([
            'jobs'       => $jobs,
            'categories' => $categories,
            'locations'  => $locations
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
        Job::create([
            'slug'               => Str::slug($request->jobtitle),
            'jobtitle'           => $request->input('jobtitle'),
            'jobdescription'     => $request->input('jobdescription'),
            'joblocation_id'     => $request->input('joblocation_id'),
            'jobcategory_id'     => $request->input('jobcategory_id'),
            'benefit'            => $request->input('benefit'),
            'salary'             => $request->input('salary'),
            'company_id'         => $request->input('company_id'),
            'position'           => $request->input('position'),
            'employment'         => $request->input('employment'),
            'start'              => Carbon::parse($request->start),
            'end'                => Carbon::parse($request->end),
            'status'             => $request->input('status'),
        ]);

        flash('Job Added!')->success();
        return redirect()->route('job.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $item = Job::with('Location', 'JobCategory', 'Company')->where('slug', $slug)->firstOrFail();
        //dd($item);

        return view('frontend.jobdetail')->with([
            'item' => $item,
            'locations' => $locations = Location::all(),
            'categories' => $jobcategories = JobCategory::all(),
            'companies' => $companies = Company::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Job::with('Location', 'JobCategory', 'Company')->findOrFail($id);
        //dd($item);

        return view('backend.pages.jobs.edit')->with([
            'item' => $item,
            'locations' => $locations = Location::all(),
            'categories' => $jobcategories = JobCategory::all(),
            'companies' => $companies = Company::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request, $id)
    {
        $data = $request->all();

        $item = Job::findOrFail($id);
        $item->update($data);

        flash('Job Edited!')->warning();
        return redirect()->route('job.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Job::findOrFail($id);
        $item->delete();

        flash('Job Deleted!')->warning();
        return redirect()->route('job.index');
    }

    public function candidate($id)
    {
        $items = Job::with('Application')->where('id', $id)->firstOrFail();

        return view('backend.pages.jobs.candidate')->with([
            'items' => $items
        ]);
    }
}
