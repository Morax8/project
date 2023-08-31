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
        $footer = Footer::firstorFail();
        $eskul = eskul::firstorFail();
        return view('home.eskul', compact('footer', 'eskul'));
    }

    public function show(eskul $eskul)
    {
        $eskul = eskul::firstorFail();
        return view('admin.eskul.mainpage.mainIndex', compact('eskul'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(eskul $eskul)
    {
        $eskul = eskul::firstorFail();
        return view('admin.eskul.mainpage.mainEdit', compact('eskul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, eskul $eskul)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(eskul $eskul)
    {
        //
    }
}
