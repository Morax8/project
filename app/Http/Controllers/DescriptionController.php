<?php

namespace App\Http\Controllers;

use App\Models\Description;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function DescIndex()
    {
        $desc = Description::all();
        return view('admin.desc.descIndex', compact('desc'));
    }
    public function edit()
    {
        $desc = Description::firstorFail();
        return view('admin.desc.descEdit', compact('desc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Description $description)
    {
        $request->validate([
            'header1' => 'required',
            'header2' => 'required',
            'descspan' => 'required',
            'descstrong' => 'required',
            'desch1' => 'required',
            'desc' => 'required',
            'jmljurusan' => 'required',
            'jurusan' => 'required',
            'descjurusan' => 'required',
            'jmlsiswa' => 'required',
            'siswa' => 'required',
            'descsiswa' => 'required',
            'jmlguru' => 'required',
            'guru' => 'required',
            'descguru' => 'required',
            // Add more validation rules for other fields
        ]);

        $description->update($request->all());

        return redirect('/desc')
            ->with('success', 'Description updated successfully.');
    }
}
