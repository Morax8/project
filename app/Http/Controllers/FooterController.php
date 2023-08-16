<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{

    public function index()
    {
        $footer = Footer::all();
        return view('partials.footer', compact('footer'));
    }

    public function cmsIndex()
    {
        $footer = Footer::all();
        return view('admin.footer.footerIndex', compact('footer'));
    }

    public function edit()
    {
        $footer = Footer::firstOrFail(); // Assuming you have only one footer record
        return view('admin.footer.footerEdit', compact('footer'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'logo' => 'nullable|image',
            'address' => 'required',
            'phone' => 'required',
            'website' => 'required',
            'email' => 'required|email',
            'about_content' => 'required',
        ]);


        $footer = Footer::firstOrFail(); // Assuming you have only one footer record

        $footer->update([
            'logo' => $request->file('logo')->store('public/images'),
            'address' => $request->address,
            'phone' => $request->phone,
            'website' => $request->website,
            'email' => $request->email,
            'about_content' => $request->about_content,
            // Add more fields as needed
        ]);

        return redirect('/footercms')->with('success', 'Footer content updated successfully.');
    }
}
