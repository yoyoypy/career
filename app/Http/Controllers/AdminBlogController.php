<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Str;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Blog::all();

        return view('backend.pages.blog.index')->with([
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
        return view('backend.pages.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug( $request->input('title') );
        $data['thumbnail'] = $request->file('thumbnail')->store(
            'assets/blogthumbnail', 'public'
        );

        Blog::create($data);
        flash('New Blog Added!')->success();

        return redirect()->route('blog.index');
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
        $item = Blog::findOrFail($id);

        return view('backend.pages.blog.edit')->with([
            'item'  =>  $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
        $data = $request->all();

        $data['slug'] = Str::slug( $request->input('title') );
        $data['thumbnail'] = $request->file('thumbnail')->store(
            'assets/blogthumbnail', 'public'
        );

        $item = Blog::findOrFail($id);
        $item->update($data);

        flash('Blog Edited!')->warning();

        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Blog::findOrFail($id);
        $item->delete();

        flash('Blog Deleted!')->error();
        return redirect()->route('blog.index');
    }
}
