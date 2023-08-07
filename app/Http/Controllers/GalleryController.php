<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoregalleryRequest;
use App\Http\Requests\UpdategalleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = gallery::all();

        return view('admin.gallery.indexGall', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.createGall');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoregalleryRequest $request, gallery $gallery)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'text' => 'required|max:255',
            'type' => 'required|max:255',
            'gambar' => 'required|image',
        ]);
        $input['nama'] = $request->input('nama');

        $gallery->active = $request->has('active');

        if ($image = $request->file('gambar')) {
            $desiredFileName = $request->input('nama');

            $imageName = $desiredFileName . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('images');
            $image->move($destinationPath, $imageName);

            $input['gambar'] = $imageName;
        }

        gallery::create($input);

        return redirect('/gallery')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gallery $gallery)
    {
        return view('admin.gallery.editGall', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategalleryRequest $request, gallery $gallery, $type, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'text' => 'required',
            'gambar' => 'required|image',

        ]);

        // Find the content by its ID
        $content = gallery::find($id);
        if (!$content) {
            return redirect('/{$type}cms')->with('error', 'Content not found.');
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Generate a unique but identical name for the image
            $imageName = $gallery->nama . '-' . Str::random(1) . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('images');
            $image->move($destinationPath, $imageName);

            if ($gallery->image && file_exists(public_path('images/' . $gallery->image))) {
                unlink(public_path('images/' . $gallery->image));
            }
            $gallery->image = $imageName;
        }

        // Update the content based on the type
        if ($type === 'tsm' || $type === 'tip' || $type === 'tp' || $type === 'tm') {
            $content->update([
                'nama' => $request->nama,
                'gambar' => $request->gambar,
                'text' => $request->text,
            ]);
            return redirect("/{$type}cms");
        }

        return redirect('/')->with('error', 'Invalid content type.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gallery $gallery)
    {
        //
    }
}
