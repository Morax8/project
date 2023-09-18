<?php

namespace App\Http\Controllers;

use App\Models\ppdb;
use App\Models\Footer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footer = Footer::firstorFail();
        return view('home.ppdb', compact('footer'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jurusan' => 'required|string',
            'mengetahuippdb' => 'required|string',
            'kerabat' => 'required|string',
            'nama' => 'required|string',
            'nik' => 'required|string',
            'jk' => 'required|string',
            'tmptlahir' => 'required|string',
            'tgllahir' => 'required|date',
            'agama' => 'required|string',
            'domisili' => 'required|string',
            'rtrw' => 'required|string',
            'kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'kota' => 'required|string',
            'anakbrp' => 'required|string',
            'statusrumah' => 'required|string',
            'nohp' => 'required|string',
            'accsosmed' => 'required|string',
            'tb' => 'required|string',
            'bb' => 'required|string',
            'asalsklh' => 'required|string',
            'kotaasalsklh' => 'required|string',
            'nisn' => 'required|string',
            'tgllulus' => 'required|string',
            'eskul' => 'required|string',
            'namaayah' => 'required|string',
            'nikayah' => 'required|string',
            'nokk' => 'required|string',
            'tmptlahirayah' => 'required|string',
            'tgllahirayah' => 'required|date',
            'pendidikanayah' => 'required|string',
            'pekerjaanayah' => 'required|string',
            'namaibu' => 'required|string',
            'nikibu' => 'required|string',
            'tmptlahiribu' => 'required|string',
            'tgllahiribu' => 'required|date',
            'pendidikanibu' => 'required|string',
            'pekerjaanibu' => 'required|string',
            'mapeldisukai' => 'required|string',
            'tinggalkls' => 'required|string',
            'prestasi' => 'required|string',
            'gambarlingkungan' => 'required|string',
            'kjp' => 'required|string',
            'pip' => 'required|string',
        ]);

        ppdb::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(ppdb $ppdb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ppdb $ppdb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ppdb $ppdb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ppdb $ppdb)
    {
        //
    }
}
