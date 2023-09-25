<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\kerjasama;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KerjasamaController extends Controller
{
    public function cmsIndex()
    {
        $ks = kerjasama::all();
        return view('admin.kerjasama.kerjasIndex', compact('ks'));
    }

    public function cmsEdit($id)
    {
        $ks = kerjasama::findorFail($id);
        return view('admin.kerjasama.kerjasEdit', compact('ks'));
    }

    public function Index()
    {
        $ks = kerjasama::all();
        $footer = Footer::firstorFail();
        $active = 'lainnya';
        return view('home.kerjasama', compact('ks', 'footer', 'active'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $kerjasama = kerjasama::findOrFail($id);

        $kerjasama->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect('/kscms')->with('success', 'Data berhasil diubah');
    }
}
