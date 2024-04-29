<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Partners;
use App\Models\Post;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partner = Partners::all();
        return view('partners.index')->with('partners', $partner);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partners.create')->with([
            'partners' => Partners::all(),
            'posts' => Post::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        Partners::create([
            'partner_id' => $request->partner_id,
            'partner_name' => $request->partner_name,
        ]);

        return redirect()->route('partners.index');
    }

    /**
     * Display the specified resource.
     */

    public function edit(Partners $partner)
    {
        return view('partners.edit')->with(['partners' => $partner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, Partners $partner)
    {

        $partner->update([
            'partner_name' => $request->partner_name,
        ]);

        return redirect()->route('partners.index', ['partners' => $partner->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partners $partner)
    {
        $partner->delete();
        return redirect()->route('partners.index');
    }
}
