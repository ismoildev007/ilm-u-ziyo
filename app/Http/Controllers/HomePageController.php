<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = Home::all();
        return view('homePage.index')->with('homes', $home);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('homePage.create')->with([
            'homes' => Home::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request->hasFile('photo'))
        {
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);

        }

        Home::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'photo' => $path ?? null
        ]);

        return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        return view('homes.show')->with([
            'homes' => $home,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        return view('homePage.edit')->with(['homes' => $home]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        if ($request->hasFile('photo'))
        {
            if (isset($home->photo))
            {
                Storage::delete($home->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);
        }

        $home->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'description_uz' => $request->description_uz,
            'description_ru' => $request->description_ru,
            'description_en' => $request->description_en,
            'photo' => $path ?? $home->photo,
        ]);

        return redirect()->route('home.index', ['homes' => $home->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        if (isset($home->photo))
        {
            Storage::delete($home->photo);
        }
        $home->delete();
        return redirect()->route('home.index');
    }
}
