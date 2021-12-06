<?php

namespace App\Http\Controllers;
use App\Application;
use App\Job;
use App\Location;
use App\JobCategory;
use App\Company;
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
        $jobs = Job::with('Location', 'JobCategory', 'Company')
                    ->where('status', 'active')->paginate();
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
            'locations' => Location::all(),
            'categories' => JobCategory::all(),
            'companies' => Company::all()
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
        $data = $request->all();

        $data['slug'] = Str::slug($request->jobtitle);
        $data['start'] = Carbon::parse($request->start);
        $data['end'] = Carbon::parse($request->end);

        Job::create($data);

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
        $item = Job::with('Location', 'JobCategory', 'Company')
                ->where('slug', $slug)
                ->firstOrFail();

        return view('frontend.jobdetail')->with([
            'item' => $item
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

        return view('backend.pages.jobs.edit')->with([
            'item' => $item,
            'locations' => Location::all(),
            'categories' => JobCategory::all(),
            'companies' => Company::all()
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
        // $item = Job::findOrFail($id);
        // $item->delete();

        // flash('Job Deleted!')->warning();
        // return redirect()->route('job.index');
    }

    public function candidate($id)
    {
        $job = Job::where('id', $id)->first();

        $maxsalary = request()->query('salary');

        if($maxsalary){
            $items = Application::with('Job')->where('jobvacancy_id', $id)
                    ->where('salary', '<=', $maxsalary)
                    ->latest()
                    ->paginate();
        }

        else{
            $items = Application::with('Job')->where('jobvacancy_id', $id)->latest()->paginate();
        }

        return view('backend.pages.jobsapplication.index')->with([
            'items' => $items,
            'job'   => $job
        ]);
    }
}
