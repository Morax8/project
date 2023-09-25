<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footer = Footer::firstorFail();
        $active = 'contact';
        return view('contact.index', compact('footer', 'active'));
    }

    public function succes()
    {
        $footer = Footer::firstorFail();
        $active = 'contact';
        return view('contact.succes', compact('footer', 'active'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // dd($request->all());

        Contact::create($request->all());

        return redirect('/contact_succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
