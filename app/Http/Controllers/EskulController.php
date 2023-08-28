<?php

namespace App\Http\Controllers;

use App\Models\eskul;
use App\Models\Footer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EskulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $eskul = eskul::all();
        // return view('eskul.index', compact('eskul'));
        $footer = Footer::firstorFail();
        return view('home.eskul', compact('footer'));
    }

    public function show(eskul $eskul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(eskul $eskul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, eskul $eskul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(eskul $eskul)
    {
        //
    }
}
