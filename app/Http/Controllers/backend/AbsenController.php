<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\absensi;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index()
    {
        $data = absensi::get();
        return view('backend.absen.index', compact('data'));
    }

    public function show($id = null)
    {
        if ($id == null) {
            return redirect()->route('backend.manage.absensi')->with('error', "The Id is Empty");
        } else {
            $data = absensi::find($id);
            return view('backend.absen.show', compact('data'));
        };
    }

    public function create()
    {
        return view('backend.absen.create');
    }

    public function edit($id)
    {
        $data = absensi::where('id', $id)->get();
        return view('backend.manage.edit.absen', compact('data'));
    }

    public function edit_process(Request $request, $id)
    {
        request()->validate([
            'nama'         => 'required',
            'nama_sholat'   => 'required'
        ]);


        absensi::where('id', $id)->update(([
            'title'         => $request->nama,
            'nama_sholat'   => $request->nama_sholat
        ]));

        return redirect()
            ->route('backend.manage.absensi')
            ->with('success', 'Item Created Successfully');
    }

    public function create_process(Request $request)
    {
        request()->validate([
            'nama'         => 'required',
            'nama_sholat'   => 'required'
        ]);

        absensi::create([
            'nama'         => $request->nama,
            'nama_sholat'   => $request->nama_sholat
        ]);

        return redirect()
            ->route('backend.manage.absensi')
            ->with('success', 'Item Created Successfully');
    }

<<<<<<< HEAD
    
=======
    public function destroy($id)
    {
        $data = absensi::find($id);

        $data->delete();
        return redirect()
            ->route('backend.manage.absensi')
            ->with('success', 'Item Created Successfully');
    }
>>>>>>> faefab71b83b52a26647a1d9d8bf4dffd0de0ff6
}
