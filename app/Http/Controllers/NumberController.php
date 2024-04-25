<?php

namespace App\Http\Controllers;

use App\Http\Requests\NumberRequest;
use App\Models\Number;
use Illuminate\Http\Request;

class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $number = Number::all();
        return view('number.index')->with('numbers', $number);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('number.create')->with([
            'numbers' => Number::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NumberRequest $request)
    {

        Number::create([
            'students' => $request->students,
            'teachers' => $request->teachers,
            'departments' => $request->departments,
            'practices' => $request->practices,
        ]);

        return redirect()->route('number.index');
    }

    /**
     * Display the specified resource.
     */

    public function edit(Number $number)
    {
        return view('number.edit')->with(['numbers' => $number]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NumberRequest $request, Number $number)
    {

        $number->update([
            'students' => $request->students,
            'teachers' => $request->teachers,
            'departments' => $request->departments,
            'practices' => $request->practices,
        ]);

        return redirect()->route('number.index', ['numbers' => $number->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Number $number)
    {
        $number->delete();
        return redirect()->route('number.index');
    }
}
