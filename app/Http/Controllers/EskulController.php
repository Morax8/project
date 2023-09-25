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
        $active = 'lainnya';
        return view('home.eskul', compact('footer', 'eskul', 'active'));
    }

    public function futsal()
    {
        $eskul = eskul::where('type', 'futsal')->get();
        $footer = Footer::firstorFail();
        $active = 'lainnya';
        return view('home.eskuls', compact('eskul', 'footer', 'active'));
    }

    public function multimedia()
    {
        $eskul = eskul::where('type', 'mm')->get();
        $footer = Footer::firstorFail();
        $active = 'lainnya';
        return view('home.eskuls', compact('eskul', 'footer', 'active'));
    }
    public function band()
    {
        $eskul = eskul::where('type', 'band')->get();
        $footer = Footer::firstorFail();
        $active = 'lainnya';
        return view('home.eskuls', compact('eskul', 'footer', 'active'));
    }
    public function paskib()
    {
        $eskul = eskul::where('type', 'paskib')->get();
        $footer = Footer::firstorFail();
        $active = 'lainnya';
        return view('home.eskuls', compact('eskul', 'footer', 'active'));
    }
    public function pramuka()
    {
        $eskul = eskul::where('type', 'pramuka')->get();
        $footer = Footer::firstorFail();
        $active = 'lainnya';
        return view('home.eskuls', compact('eskul', 'footer', 'active'));
    }
    public function badminton()
    {
        $eskul = eskul::where('type', 'badmin')->get();
        $footer = Footer::firstorFail();
        $active = 'lainnya';
        return view('home.eskuls', compact('eskul', 'footer', 'active'));
    }
    public function tenismeja()
    {
        $eskul = eskul::where('type', 'tenismeja')->get();
        $footer = Footer::firstorFail();
        $active = 'lainnya';
        return view('home.eskuls', compact('eskul', 'footer', 'active'));
    }
    public function padus()
    {
        $eskul = eskul::where('type', 'padus')->get();
        $footer = Footer::firstorFail();
        $active = 'lainnya';
        return view('home.eskuls', compact('eskul', 'footer', 'active'));
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
    public function update(Request $request, $type, $id)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Find the content by its ID
        $content = Eskul::find($id);

        if (!$content) {
            return redirect("/{$type}cms")->with('error', 'Content not found.');
        }

        // Check the $type and update the content accordingly
        if ($type == 'eskul' || $type == 'futsal') {
            $content->update([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
            ]);

            // Redirect with a success message
            return redirect("/{$type}cms")->with('success', 'Content updated successfully.');
        } else {
            return redirect("/{$type}cms")->with('error', 'Invalid content type.');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(eskul $eskul)
    {
        //
    }
}
