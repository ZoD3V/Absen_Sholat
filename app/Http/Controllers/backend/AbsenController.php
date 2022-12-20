<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AbsensiModel;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index()
    {
        return view('backend.absen.index');
    }

    public function create()
    {
        return view('backend.absen.create');
    }

    public function edit($id)
    {
        $data = AbsensiModel::where('id', $id)->get();
        return view('backend.manage.edit.absen', compact('data'));
    }

    public function edit_process(Request $request, $id)
    {
        request()->validate([
            'nama'         => 'required',
            'nama_sholat'   => 'required'
        ]);


        AbsensiModel::where('id', $id)->update(([
            'title'         => $request->nama,
            'nama_sholat'   => $request->nama_sholat
        ]));

        return redirect()
            ->route('backend.absen.index')
            ->with('success', 'Item Created Successfully');
    }

    public function create_process(Request $request)
    {
        request()->validate([
            'nama'         => 'required',
            'nama_sholat'   => 'required'
        ]);

        AbsensiModel::create([
            'title'         => $request->nama,
            'nama_sholat'   => $request->nama_sholat
        ]);

        return redirect()
            ->route('backend.absen.index')
            ->with('success', 'Item Created Successfully');
    }

<<<<<<< HEAD
    
=======
    public function destroy($id)
    {
        $data = AbsensiModel::find($id);


        return redirect()
            ->route('backend.absen.index')
            ->with('success', 'Item Created Successfully');
    }
>>>>>>> faefab71b83b52a26647a1d9d8bf4dffd0de0ff6
}
