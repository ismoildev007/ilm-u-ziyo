<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Educational;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EducationalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educational = Educational::all();
        return view('educational.index')->with('educations', $educational);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('educational.create')->with([
            'educations' => Educational::all(),
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Educational $educational)
    {
        if ($request->hasFile('photo'))
        {
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);

        }

        $educational::create([
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'short_content_uz' => $request->short_content_uz,
            'short_content_ru' => $request->short_content_ru,
            'short_content_en' => $request->short_content_en,
            'photo' => $path ?? null
        ]);


        return redirect()->route('educational.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show(Educational $educational)
    {
        return view('educational.show')->with([
            'educations' => $educational,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Educational $educational)
    {
        return view('educational.edit')->with(['educations' => $educational]);
    }


    public function update(StoreRequest $request, Educational $educational)
    {
        if ($request->hasFile('photo'))
        {
            if (isset($educational->photo))
            {
                Storage::delete($educational->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);
        }

        $educational->update([
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'short_content_uz' => $request->short_content_uz,
            'short_content_ru' => $request->short_content_ru,
            'short_content_en' => $request->short_content_en,
            'photo' => $path ?? $educational->photo,
        ]);

        return redirect()->route('educational.index', ['educations' => $educational->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Educational $educational)
    {
        if (isset($educational->photo))
        {
            Storage::delete($educational->photo);
        }
        $educational->delete();
        return redirect()->route('educational.index');
    }
}
