<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{

    //fasilitas
    public function fascms()
    {
        $fasilitas = Fasilitas::where('type', 'fasilitas')->get();
        return view('admin.fasilitas.fas.fasIndex', compact('fasilitas'));
    }

    public function fasIndex()
    {
        $fasilitas = Fasilitas::where('type', 'fasilitas')->get();
        return view('fasilitas.fasilitas', compact('fasilitas'));
    }

    public function fasEdit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.fas.fasEdit', compact('fasilitas'));
    }

    //sarana

    public function sarcms()
    {
        $sarana = Fasilitas::where('type', 'sarana')->get();
        return view('admin.fasilitas.sarana.saranaIndex', compact('sarana'));
    }

    public function saranaIndex()
    {
        $sarana = Fasilitas::where('type', 'sarana')->get();
        return view('fasilitas.sarana', compact('sarana'));
    }

    public function saranaEdit($id)
    {
        $sarana = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.sarana.saranaEdit', compact('sarana'));
    }

    //prasarana
    public function prascms()
    {
        $prasarana = Fasilitas::where('type', 'prasarana')->get();
        return view('admin.fasilitas.prasarana.prasIndex', compact('prasarana'));
    }

    public function prasaranaIndex()
    {
        $prasarana = Fasilitas::where('type', 'prasarana')->get();
        return view('fasilitas.prasarana', compact('prasarana'));
    }

    public function prasaranaEdit($id)
    {
        $prasarana = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.prasarana.prasEdit', compact('prasarana'));
    }


    //lab
    public function labcms()
    {
        $lab = Fasilitas::where('type', 'lab')->get();
        return view('admin.fasilitas.lab.labIndex', compact('lab'));
    }

    public function labIndex()
    {
        $lab = Fasilitas::where('type', 'lab')->get();
        return view('fasilitas.lab', compact('lab'));
    }

    public function labEdit($id)
    {
        $lab = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.lab.labEdit', compact('lab'));
    }

    //perpus
    public function perpuscms()
    {
        $perpus = Fasilitas::where('type', 'perpus')->get();
        return view('admin.fasilitas.perpus.perpusIndex', compact('perpus'));
    }

    public function perpusIndex()
    {
        $perpus = Fasilitas::where('type', 'perpus')->get();
        return view('fasilitas.perpus', compact('perpus'));
    }

    public function perpusEdit($id)
    {
        $perpus = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.perpus.perpusEdit', compact('perpus'));
    }

    public function update(Request $request, $type, $id)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Find the content by its ID
        $content = Fasilitas::find($id);
        if (!$content) {
            return redirect('/')->with('error', 'Content not found.');
        }

        // Update the content based on the type
        if ($type === 'tsm' || $type === 'tip' || $type === 'tp' || $type === 'tm') {
            $content->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);
            return redirect("/{$type}cms");
        }

        return redirect('/')->with('error', 'Invalid content type.');
    }
}
