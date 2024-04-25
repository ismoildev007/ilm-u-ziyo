<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = Teacher::all();
        return view('teacher.index')->with('teachers', $teacher);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.create')->with([
            'teachers' => Teacher::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        if ($request->hasFile('photo'))
        {
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);

        }

        Teacher::create([
            'name' => $request->name,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'short_content_uz' => $request->short_content_uz,
            'short_content_ru' => $request->short_content_ru,
            'short_content_en' => $request->short_content_en,
            'photo' => $path ?? null
        ]);

        return redirect()->route('teacher.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('teacher.show')->with([
            'teachers' => $teacher,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Teacher $teacher)
    {
        return view('teacher.edit')->with(['teachers' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, Teacher $teacher)
    {
        if ($request->hasFile('photo'))
        {
            if (isset($teacher->photo))
            {
                Storage::delete($teacher->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);
        }

        $teacher->update([
            'name' => $request->name,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'short_content_uz' => $request->short_content_uz,
            'short_content_ru' => $request->short_content_ru,
            'short_content_en' => $request->short_content_en,
            'photo' => $path ?? $teacher->photo,
        ]);

        return redirect()->route('teacher.index', ['teachers' => $teacher->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        if (isset($teacher->photo))
        {
            Storage::delete($teacher->photo);
        }
        $teacher->delete();
        return redirect()->route('student.index');
    }
}
