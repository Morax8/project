<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FasilitasController extends Controller
{

    //fasilitas
    public function fascms()
    {
        $fasilitas = Fasilitas::where('type', 'fas')->get();
        return view('admin.fasilitas.fas.fasIndex', compact('fasilitas'));
    }

    public function fasIndex()
    {
        $fasilitas = Fasilitas::where('type', 'fas')->get();
        $footer = Footer::firstorFail();
        return view('fasilitas.fasilitas', compact('fasilitas', 'footer'));
    }

    public function fasEdit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.fas.fasEdit', compact('fasilitas'));
    }

    public function sarpra()
    {
        $sarpra = Fasilitas::where('type', 'sarpra')->get();
        $footer = Footer::firstorFail();
        return view('fasilitas.sarpra', compact('sarpra', 'footer'));
    }

    public function sarpracms()
    {
        $sarpra = Fasilitas::where('type', 'sar')->get();
        return view('admin.fasilitas.sarpra.sarpraIndex', compact('sarpra'));
    }

    public function sarpraEdit($id)
    {
        $sarpra = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.sarpra.sarpraEdit', compact('sarpra'));
    }


    public function update(Request $request, $type, $id)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required',
            'content' => 'required',
            'kondisi' => 'required',
        ]);

        // Find the content by its ID
        $content = Fasilitas::find($id);
        if (!$content) {
            return redirect('/dashboard')->with('error', 'Content not found.');
        }

        if ($image = $request->file('image')) {
            $desiredFileName = $request->input('title');
            $imageName = $desiredFileName . now()->format('Y-m-d') . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $imageName);
            // Add this line to set the 'image' attribute
        }

        // Update the content based on the type
        if ($type === 'sarpra'  || $type === 'fas') {
            $content->update([
                'title' => $request->title,
                'image' => $imageName,
                'content' => $request->content,
                'kondisi' => $request->kondisi,
            ]);
            return redirect("/{$type}cms");
        }

        return redirect('/')->with('error', 'Invalid content type.');
    }
}
