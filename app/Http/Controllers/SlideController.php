<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();

        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Slider $slider)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'image' => 'required|image',
        ]);
        // Set the 'nama' field value from the form input
        $input['nama'] = $request->input('nama');

        // Check if the 'active' checkbox is checked and update the 'active' attribute accordingly
        $slider->active = $request->has('active');

        if ($image = $request->file('image')) {
            // Get the desired filename from the form input
            $desiredFileName = $request->input('nama');

            // Append the original file extension to the sanitized filename
            $imageName = $desiredFileName . '.' . $image->getClientOriginalExtension();

            // Move the image to the destination path
            $destinationPath = public_path('images');
            $image->move($destinationPath, $imageName);

            // Save the image filename to the database
            $input['image'] = $imageName;
        }

        // Save the data to the database
        Slider::create($input);

        return redirect('/sliders')->with('success', 'Data berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Slider $slider)
    {
        // Validation rules for the form fields
        $request->validate([
            'nama' => 'required|max:255',
            'image' => 'image', // Add any required image validation rules here
        ]);

        // Set the 'nama' field value from the form input
        $slider->nama = $request->input('nama');

        // Check if the 'active' checkbox is checked and update the 'active' attribute accordingly
        $slider->active = $request->has('active');

        // Check if a new image is being uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Generate a unique but identical name for the image
            $imageName = $slider->nama . '-' . Str::random(1) . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('images');
            $image->move($destinationPath, $imageName);

            if ($slider->image && file_exists(public_path('images/' . $slider->image))) {
                unlink(public_path('images/' . $slider->image));
            }
            $slider->image = $imageName;
        }

        $slider->update();

        Session::flash('success', 'Slider updated successfully');
        return redirect('/sliders');
    }






    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();

        return redirect('/sliders')->with('success', 'Data berhasil dihapus');
    }
}
