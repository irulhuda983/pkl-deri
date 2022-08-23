<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokumenController extends Controller
{
    

    public function store(Request $request)
    {
        $request->validate([
            'jenis_id' => 'required',
            'nik' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
        ]);
    }
}
