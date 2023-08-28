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

        $input = [
            'nama' => $request->input('nama'),
            'active' => $request->has('active'),
        ];

        if ($image = $request->file('image')) {
            $desiredFileName = $request->input('nama');
            $imageName = $desiredFileName . now()->format('Y-m-d') . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Slider::create($input);

        return redirect('/sliders')->with('success', 'Data berhasil ditambahkan');
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
        $request->validate([
            'nama' => 'required|max:255',
            'image' => 'image',
        ]);

        $slider->nama = $request->input('nama');
        $slider->active = $request->has('active');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $slider->nama . now()->format('Y-m-d') . '.' . $image->getClientOriginalExtension();
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
