<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentRequest;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $document= Document::all();
        return view('document.index')->with('documents', $document);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('document.create')->with([
            'documents' => Document::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DocumentRequest $request)
    {
        if ($request->hasFile('licence'))
        {
            $name = $request->file('licence')->getClientOriginalName();
            $path = $request->file('licence')->storeAs('post_photo', $name);

        }
        if ($request->hasFile('passport'))
        {
            $name = $request->file('passport')->getClientOriginalName();
            $paths = $request->file('passport')->storeAs('post_photo', $name);

        }

        Document::create([
            'licence' => $path ?? null,
            'passport' => $paths ?? null,
        ]);

        return redirect()->route('document.index');
    }

    /**
     * Display the specified resource.
     */

    public function edit(Document $document)
    {
        return view('document.edit')->with(['documents' => $document]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DocumentRequest $request, Document $document)
    {

        if ($request->hasFile('licence'))
        {
            if (isset($document->licence))
            {
                Storage::delete($document->licence);
            }

            $name = $request->file('licence')->getClientOriginalName();
            $path = $request->file('licence')->storeAs('post_photo', $name);
        }
        if ($request->hasFile('passport'))
        {
            if (isset($document->passport))
            {
                Storage::delete($document->passport);
            }

            $name = $request->file('passport')->getClientOriginalName();
            $paths = $request->file('passport')->storeAs('post_photo', $name);
        }

        $document->update([
            'licence' => $path ?? $document->licence,
            'passport' => $paths ?? $document->passport,
        ]);

        return redirect()->route('document.index', ['documents' => $document->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->route('document.index');
    }
}
