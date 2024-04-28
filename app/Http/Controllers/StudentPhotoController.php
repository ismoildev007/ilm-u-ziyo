<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentRequest;
use App\Models\StudentPhoto;
use Illuminate\Support\Facades\Storage;

class StudentPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student_photo = StudentPhoto::all();
        return view('photo.index')->with('photos', $student_photo);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('photo.create')->with([
            'photos' => StudentPhoto::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DocumentRequest $request)
    {

        if ($request->hasFile('student_photos'))
        {
            $name = $request->file('student_photos')->getClientOriginalName();
            $path = $request->file('student_photos')->storeAs('post_photo', $name);

        }

        StudentPhoto::create([
            'student_photos' => $path ?? null,
        ]);

        return redirect()->route('photo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentPhoto $photo)
    {
        $photo->delete();
        return redirect()->route('photo.index');
    }
}
