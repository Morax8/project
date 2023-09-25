<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JurusanController extends Controller
{
    //tsm
    public function tsm()
    {
        $tsmjurusan = jurusan::where('type', 'tsm')->get();
        return view('admin.jurusan.tsm.tsmIndex', compact('tsmjurusan'));
    }
    public function indexTsm()
    {
        $tsmjurusan = jurusan::where('type', 'tsm')->get();
        $footer = Footer::firstorFail();
        $active = 'jurusan';
        return view('jurusan.tsm', compact('tsmjurusan', 'footer', 'active'));
    }
    public function editTsm($id)
    {
        $tsmjurusan = jurusan::findOrFail($id);
        return view('admin.jurusan.tsm.tsmEdit', compact('tsmjurusan'));
    }

    //tip
    public function tip()
    {
        $tipjurusan = jurusan::where('type', 'tip')->get();
        return view('admin.jurusan.tip.tipIndex', compact('tipjurusan'));
    }
    public function indexTip()
    {
        $tipjurusan = jurusan::where('type', 'tip')->get();
        $footer = Footer::firstorFail();
        $active = 'jurusan';
        return view('jurusan.tip', compact('tipjurusan', 'footer', 'active'));
    }

    public function editTip($id)
    {
        $tipjurusan = jurusan::findOrFail($id);
        return view('admin.jurusan.tip.tipEdit', compact('tipjurusan'));
    }

    //tp
    public function tp()
    {
        $tpjurusan = jurusan::where('type', 'tp')->get();
        return view('admin.jurusan.tp.tpIndex', compact('tpjurusan'));
    }

    public function indexTp()
    {
        $tpjurusan = jurusan::where('type', 'tp')->get();
        $footer = Footer::firstorFail();
        $active = 'jurusan';
        return view('jurusan.tp', compact('tpjurusan', 'footer', 'active'));
    }

    public function editTp($id)
    {
        $tpjurusan = jurusan::findOrFail($id);
        return view('admin.jurusan.tp.tpEdit', compact('tpjurusan'));
    }
    //tm
    public function tm()
    {
        $tmjurusan = jurusan::where('type', 'tm')->get();
        return view('admin.jurusan.tm.tmIndex', compact('tmjurusan'));
    }

    public function indexTm()
    {
        $tmjurusan = jurusan::where('type', 'tm')->get();
        $footer = Footer::firstorFail();
        return view('jurusan.tm', compact('tmjurusan', 'footer'));
    }

    public function editTm($id)
    {
        $tmjurusan = jurusan::findOrFail($id);
        return view('admin.jurusan.tm.tmEdit', compact('tmjurusan'));
    }
    public function update(Request $request, $type, $id)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Find the content by its ID
        $content = jurusan::find($id);
        if (!$content) {
            return redirect('/')->with('error', 'Content not found.');
        }

        // Update the content based on the type
        if ($type === 'tsm' || $type === 'tip' || $type === 'tp' || $type === 'tm') {
            $content->update([
                'title' => $request->title,
                'content' => $request->content,
            ]);
            return redirect("/{$type}cms");
        }

        return redirect('/')->with('error', 'Invalid content type.');
    }
}
