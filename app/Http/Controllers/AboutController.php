<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        return view('about.index')->with('abouts', $about);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('about.create')->with([
            'abouts' => About::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        About::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'branches_uz' => $request->branches_uz,
            'branches_ru' => $request->branches_ru,
            'branches_en' => $request->branches_en,
            'short_content_uz' => $request->short_content_uz,
            'short_content_ru' => $request->short_content_ru,
            'short_content_en' => $request->short_content_en,
        ]);

        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('about.show')->with([
            'abouts' => $about,
        ]);
    }

    public function edit(About $about)
    {
        return view('about.edit')->with(['abouts' => $about]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, About $about)
    {

        $about->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'branches_uz' => $request->branches_uz,
            'branches_ru' => $request->branches_ru,
            'branches_en' => $request->branches_en,
            'short_content_uz' => $request->short_content_uz,
            'short_content_ru' => $request->short_content_ru,
            'short_content_en' => $request->short_content_en,
        ]);

        return redirect()->route('about.index', ['abouts' => $about->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('about.index');
    }
}
