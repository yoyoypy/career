<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobCategory;
use App\Http\Requests\JobCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = JobCategory::all();

        return view('backend.pages.jobs.category.index')->with([
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
        return view('backend.pages.jobs.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobCategoryRequest $request)
    {
        $data = $request->all();

        $data['image'] = $request->file('image')->store(
            'assets/category', 'public'
        );

        JobCategory::create($data);
        notify()->success('Category Added!');
        return redirect()->route('category.index');
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
        $item = JobCategory::findOrFail($id);

        return view('backend.pages.jobs.category.edit')->with([
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
    public function update(JobCategoryRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/category', 'public'
        );

        $item = JobCategory::findOrFail($id);
        $item->update($data);

        notify()->success('Category Edited!');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = JobCategory::findOrFail($id);
        $item->delete();

        notify()->success('Category Deleted!');
        return redirect()->route('category.index');
    }
}
