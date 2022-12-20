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
}
