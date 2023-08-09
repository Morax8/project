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

    public function store(Request $request, $type)
    {
        try {
            $request->validate([
                'nama' => 'required|max:255',
                'text' => 'required|max:255',
                'image' => 'required|image',
            ]);

            $image = $request->file('image');
            $currentDate = now()->format('Ymd');
            $imageName = $currentDate . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $image->move($destinationPath, $imageName);

            $input = [
                'nama' => $request->input('nama'),
                'type' => $request->input('type'),
                'text' => $request->input('text'),
                'image' => $imageName,
                'active' => $request->has('active'),
            ];

            gallery::create($input);

            return redirect()->route('gallery.cmsIndex', ['type' => $type])->with('success', 'Content created successfully.');
        } catch (\Exception $e) {
            Log::error('Error creating content:', ['message' => $e->getMessage()]);
            return redirect('/dashboard')->with('error', 'An error occurred while creating content.');
        }
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
                $imageName = $currentDate . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('images');
                $image->move($destinationPath, $imageName);

                if ($content->image && file_exists(public_path('images/' . $content->image))) {
                    unlink(public_path('images/' . $content->image));
                }
                $content->image = $imageName;
            }

            $content->nama = $request->input('nama');
            $content->text = $request->input('text');
            $content->type = $request->input('type');
            $content->active = $request->has('active');
            $content->save();

            return redirect()->route('gallery.cmsIndex', ['type' => $type])->with('success', 'Content updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating content:', ['message' => $e->getMessage()]);
            return redirect('/dashboard')->with('error', 'An error occurred while updating content.');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gallery $gallery)
    {
        //
    }
}
