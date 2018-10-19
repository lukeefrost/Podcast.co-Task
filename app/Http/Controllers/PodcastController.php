<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Podcast;

class PodcastController extends Controller
{

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $podcasts = Podcast::all();
        return view ('podcasts.index', compact('podcasts'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view ('podcasts.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $this->validate($request, [
          'url' => 'required',
          'title' => 'required',
          'description' => 'required',
          'episode_number' => 'required'
        ]);

        Podcast::create($request->all());
        return response()->json($request, 201);
        // return back()->with('success', 'Podcast Addition Created Successfully');
    }

    /**
    * Display the specified resource.
    *
    * @param  Podcast  $podcast
    * @return \Illuminate\Http\Response
    */
    public function show(Podcast $podcast)
    {
        return view('podcasts.show', compact('podcast'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  Podcast  $podcast
    * @return \Illuminate\Http\Response
    */
    public function edit(Podcast $podcast)
    {
        return view('podcasts.edit', compact('podcast'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  Podcast  $podcast
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Podcast $podcast)
    {
        $this->validate($request, [
          'url' => 'required',
          'title' => 'required',
          'description' => 'required',
          'episode_number' => 'required'
        ]);

        $podcast->update($request->all());
        return response()->json($podcast, 200);
        // return back()->with('success', 'Podcast Details updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  Podcast  $podcast
    * @return \Illuminate\Http\Response
    */
    public function destroy(Podcast $podcast)
    {
        $podcast->delete();
        return response()->json(null, 204);
        // return back()->with('success', 'Podcast deleted successfully');
    }
}
