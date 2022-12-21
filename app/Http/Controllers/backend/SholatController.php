<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\sholat;
use Illuminate\Http\Request;

class SholatController extends Controller
{
    public function index()
    {
        $data = sholat::get();
        return view('backend.sholat.index', compact('data'));
    }
}
