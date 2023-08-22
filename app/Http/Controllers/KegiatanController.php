<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan=Kegiatan::firstorFail();
        $footer = Footer::firstorFail();
        return view('home.kegiatan', compact('footer', 'kegiatan'));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $kegiatan=Kegiatan::firstorFail();
        return view('admin.kegiatan.cmsindex', compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        $kegiatan=Kegiatan::firstorFail();
        return view('admin.kegiatan.cmsedit', compact('kegiatan'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        //
    }

}
