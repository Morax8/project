<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Support\Facades\Log;

class GalleryController extends Controller
{
    public function show()

    {
        $gallery = gallery::latest()->paginate(8);
        $footer = Footer::firstorFail();
        $active = 'lainnya';
        return view('home.gallery', compact('footer', 'gallery', 'active'));
    }

    public function cmsIndex($type)
    {
        $gallery = Gallery::where('type', $type)->get();

        return view('admin.gallery.cmsIndex', [
            'gallery' => $gallery,
            'type' => $type,
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

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'text' => 'required|max:255',
            'type' => 'required|max:255',
            'image' => 'required|file|image', // Updated image validation rule
        ]);

        $input = [
            'nama' => $request->input('nama'),
            'type' => $request->input('type'),
            'text' => $request->input('text'),
            'active' => $request->has('active'), // Assuming you want to set 'active' based on checkbox
        ];

        // Check if an image is uploaded
        if ($image = $request->file('image')) {
            $currentDate = now()->format('Ymd');
            $desiredFileName = $request->input('nama');
            $imageName = $desiredFileName . $currentDate . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName; // Store the full path of the image
        }

        gallery::create($input);


        $cmsIndexUrl = route('gallery.cmsIndex', ['type' => $input['type']]);
        return redirect($cmsIndexUrl)->with('success', 'Content created successfully.');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $type, $id)
    {
        try {
            $request->validate([
                'nama' => 'required|max:255',
                'type' => 'required|max:255',
                'text' => 'required',
                'image' => 'nullable|image',
            ]);

            $content = Gallery::find($id);
            if (!$content) {
                return redirect("/{$type}cms")->with('error', 'Content not found.');
            }

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $currentDate = now()->format('Ymd');
                $desiredFileName = $request->input('nama');
                $imageName = $desiredFileName . $currentDate . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('images');

                // Delete the existing image
                if ($content->image && file_exists(public_path('images/' . $content->image))) {
                    unlink(public_path('images/' . $content->image));
                }

                // Move and save the new image
                $image->move($destinationPath, $imageName);

                $content->image = $imageName;
            }


            $content->nama = $request->input('nama');
            $content->text = $request->input('text');
            $content->type = $request->input('type');
            $content->active = $request->has('active');
            $content->save();

            $cmsIndexUrl = route('gallery.cmsIndex', ['type' => $content['type']]);
            return redirect($cmsIndexUrl)->with('success', 'Content updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating content:', ['message' => $e->getMessage()]);
            return redirect('/dashboard')->with('error', 'An error occurred while updating content.');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gallery $gallery, $id, $type)
    {
        $gallery = gallery::findOrFail($id);

        // Delete the image file from storage
        $imagePath = public_path('images') . '/' . $gallery->image;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $gallery->delete();

        $cmsIndexUrl = route('gallery.cmsIndex', ['type' => $type]);
        return redirect($cmsIndexUrl)->with('success', 'Content created successfully.');
    }
}
