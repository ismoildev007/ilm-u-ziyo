<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::all();
        return view('contact.index')->with('contacts', $contact);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create')->with([
            'contacts' => Contact::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {
        Contact::create([
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'telegram' => $request->telegram,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'linkedin' => $request->linkedin
        ]);

        return redirect()->route('contact.index');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contact.edit')->with(['contacts' => $contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $request, Contact $contact)
    {

        $contact->update([
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'telegram' => $request->telegram,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'linkedin' => $request->linkedin
        ]);

        return redirect()->route('contact.index', ['contacts' => $contact->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index');
    }
}
