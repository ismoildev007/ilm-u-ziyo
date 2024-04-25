<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $video = Video::all();
        return view('video.index')->with('videos', $video);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('video.create')->with([
            'videos' => Video::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        Video::create([
            'link' => $request->link,
        ]);

        return redirect()->route('video.index');
    }

    /**
     * Display the specified resource.
     */

    public function edit(Video $video)
    {
        return view('video.edit')->with(['videos' => $video]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, Video $video)
    {

        $video->update([
            'link' => $request->link,
        ]);

        return redirect()->route('video.index', ['videos' => $video->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('video.index');
    }
}
