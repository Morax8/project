<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoregalleryRequest;
use Illuminate\Support\Facades\Log;

class GalleryController extends Controller
{
    public function cmsIndex($type)
    {
        $gallery = Gallery::where('type', $type)->get();

        return view('admin.gallery.cmsIndex', [
            'gallery' => $gallery,
            'galleryType' => $type,
        ]);
    }

    public function edit($type, $id)
    {
        // Load the appropriate gallery item based on type and id
        $item = Gallery::where('type', $type)->findOrFail($id);

        // Pass the item to the view along with the type
        return view('admin.gallery.edit', compact('item', 'type'));
    }
    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request, gallery $gallery)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'text' => 'required|max:255',
            'type' => 'required|max:255',
            'gambar' => 'required',
        ]);

        $input['nama'] = $request->input('nama');
        $input['type'] = $request->input('type');
        $input['text'] = $request->input('text');
        $input['gambar'] = $request->input('gambar');


        // Get the 'type' parameter from the route
        $type = $request->route('type');


        $gallery->active = $request->has('active');

        if ($gambar = $request->file('gambar')) {
            $desiredFileName = $request->input('nama');
            $gambarName = $desiredFileName . '.' . $gambar->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $gambar->move($destinationPath, $gambarName);
            $input['gambar'] = $gambarName;
        }

        gallery::create($input);

        $cmsIndexUrl = route('gallery.cmsIndex', ['type' => $type]);
        return redirect($cmsIndexUrl);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, gallery $gallery, $type, $id)
    {
        try {
            $request->validate([
                'nama' => 'required|max:255',
                'type' => 'required|max:255',
                'text' => 'required',
                'image' => 'required|image',

            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Log validation errors
            Log::error('Validation errors:', $e->errors());
            throw $e;
        }
        //dd($request->all());

        $gallery->nama = $request->input('nama');


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
            $slider->image = $imageName;
        }
        // Update the content based on the type
        if ($type === 'tsm' || $type === 'tip' || $type === 'tp' || $type === 'tm') {
            $content->update([
                'nama' => $request->nama,
                'gambar' => $request->gambar,
                'text' => $request->text,
            ]);
            $cmsIndexUrl = route('gallery.cmsIndex', ['type' => $type]);

            return redirect($cmsIndexUrl);
        }


        return redirect('/dashboard')->with('error', 'Invalid content type.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gallery $gallery)
    {
        //
    }
}
