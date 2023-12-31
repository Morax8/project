<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Footer;

class ProfileController extends Controller
{
    public function sejarah()
    {
        $sejprof = Profile::where('type', 'sej')->get();
        $footer = Footer::firstorFail();
        $active = 'profile';
        return view('profile.sejarah', compact('sejprof', 'footer', 'active'));
    }

    public function indexSejarah()
    {
        $sejprof = Profile::where('type', 'sej')->get();
        return view('admin.profile.sejarah.sejarahIndex', compact('sejprof'));
    }
    public function sejarahEdit($id)
    {
        $sejprof = Profile::findOrFail($id);
        return view('admin.profile.sejarah.sejarahEdit', compact('sejprof'));
    }

    public function visimisi()
    {
        $vmprof = Profile::where('type', 'vm')->get();
        $footer = Footer::firstorFail();
        $active = 'profile';
        return view('profile.visimisi', compact('vmprof', 'footer', 'active'));
    }

    public function indexVisimisi()
    {
        $vmprof = Profile::where('type', 'vm')->get();
        return view('admin.profile.visimisi.visimisiIndex', compact('vmprof'));
    }
    public function visimisiEdit($id)
    {
        $vmprof = Profile::findOrFail($id);
        return view('admin.profile.visimisi.visimisiEdit', compact('vmprof'));
    }

    public function logo()
    {
        $logoprof = Profile::where('type', 'logo')->get();
        $footer = Footer::firstorFail();
        $active = 'profile';
        return view('profile.logo', compact('logoprof', 'footer', 'active'));
    }

    public function indexLogo()
    {
        $logoprof = Profile::where('type', 'logo')->get();
        return view('admin.profile.logo.logoIndex', compact('logoprof'));
    }

    public function logoEdit($id)
    {
        $logoprof = Profile::findOrFail($id);
        return view('admin.profile.logo.logoEdit', compact('logoprof'));
    }

    public function update(Request $request, $type, $id)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Find the content by its ID
        $content = Profile::find($id);
        if (!$content) {
            return redirect('/')->with('error', 'Content not found.');
        }

        // Update the content based on the type
        if ($type === 'sej' || $type === 'logo' || $type === 'vm') {
            $content->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);
            return redirect("/{$type}cms");
        }

        return redirect('/')->with('error', 'Invalid content type.');
    }
}
