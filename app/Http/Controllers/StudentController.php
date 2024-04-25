<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::all();
        return view('student.index')->with('students', $student);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create')->with([
            'students' => Student::all(),
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

        Student::create([
            'name' => $request->name,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'short_content_uz' => $request->short_content_uz,
            'short_content_ru' => $request->short_content_ru,
            'short_content_en' => $request->short_content_en,
            'photo' => $path ?? null
        ]);

        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('student.show')->with([
            'students' => $student,
        ]);
    }

    public function edit(Student $student)
    {
        return view('student.edit')->with(['students' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, Student $student)
    {
        if ($request->hasFile('photo'))
        {
            if (isset($student->photo))
            {
                Storage::delete($student->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);
        }

        $student->update([
            'name' => $request->name,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'short_content_uz' => $request->short_content_uz,
            'short_content_ru' => $request->short_content_ru,
            'short_content_en' => $request->short_content_en,
            'photo' => $path ?? $student->photo,
        ]);

        return redirect()->route('student.index', ['students' => $student->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        if (isset($student->photo))
        {
            Storage::delete($student->photo);
        }
        $student->delete();
        return redirect()->route('student.index');
    }
}
