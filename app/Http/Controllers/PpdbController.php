<?php

namespace App\Http\Controllers;

use App\Models\ppdb;
use App\Models\Footer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\MyExport;
use Maatwebsite\Excel\Facades\Excel;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footer = Footer::firstorFail();
        $active = 'lainnya';
        return view('ppdb.ppdb', compact('footer', 'active'));
    }

    public function succes()
    {
        $footer = Footer::firstorFail();
        $active = 'lainnya';
        return view('ppdb.ppdb-succes', compact('footer', 'active'));
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
        return redirect('/ppdb-succes')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function view(ppdb $ppdb)
    {
        $this->authorize('read ppdb');
        $ppdb = ppdb::all();
        return view('admin.ppdb.index', compact('ppdb'));
    }
    public function export()
    {
        return Excel::download(new MyExport, 'ppdb.xlsx');
    }
}
