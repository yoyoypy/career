<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobCategory;
use App\Job;
use App\Location;
use App\Http\Requests\LocationRequest;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Location::all();

        return view('backend.pages.jobs.location.index')->with([
            'items' => $items
        ]);
    }

    public function indexlist($id)
    {
        $jobs = Job::where('joblocation_id', $id)->paginate();
        $categories = JobCategory::all();
        $locations = Location::all();

        return view('frontend.joblist')->with([
            'jobs' => $jobs,
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
        return view('backend.pages.jobs.location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocationRequest $request)
    {
        $data = $request->all();

        $data['image'] = $request->file('image')->store(
            'assets/location', 'public'
        );

        Location::create($data);
        flash('Location Added!')->success();
        return redirect()->route('location.index');
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
        $item = Location::findOrFail($id);

        return view('backend.pages.jobs.location.edit')->with([
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
    public function update(LocationRequest $request, $id)
    {
        $data = $request->all();

        $item = Location::findOrFail($id);

        $data['image'] = $request->file('image')->store(
            'assets/location', 'public'
        );

        $item->update($data);

        flash('Location Edited!')->warning();
        return redirect()->route('location.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Location::findOrFail($id);
        $item->delete();

        flash('Location Deleted!')->warning();
        return redirect()->route('location.index');
    }
}
