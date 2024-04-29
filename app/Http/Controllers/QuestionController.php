<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $question = Question::all();
        return view('question.index')->with('questions', $question);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('question.create')->with([
            'questions' => Question::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Question::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
        ]);

        return redirect()->route('question.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        return view('question.show')->with([
            'questions' => $question,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Question $question)
    {
        return view('question.edit')->with(['questions' => $question]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, Question $question)
    {

        $question->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
        ]);

        return redirect()->route('question.index', ['questions' => $question->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('question.index');
    }
}
