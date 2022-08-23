<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;

class KtpController extends Controller
{
    
    public function index()
    {
        $data = Dokumen::where('jenis_id', 1)->get();
        return view('ktp.index', compact('data'));
    }

    public function create()
    {
        return view('ktp.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        // if ($validator->fails()) {
        //     return redirect('ktp/create')->withErrors($validator)->withInput();
        // }

        $data = Dokumen::create([
            'jenis_id' => 1,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'tgl_register' => date('Y-m-d H:i:s'),
        ]);

        return redirect('ktp');
    }

    public function show_ubah($id)
    {
        $data = Dokumen::find($id);
        return view('ktp.ubah_status', compact('data'));
    }

    public function ubah_status(Request $request, $id)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
        ]);

        // if ($validator->fails()) {
        //     return redirect('ktp/'.$id.'/show_ubah')->withErrors($validator)->withInput();
        // }

        $dokumen = Dokumen::find($id);

        $dokumen->update([
            'status' => 'diambil',
            'nama_pengambil' => $request->nama,
            'nohp_pengambil' => $request->no_hp,
            'tgl_pengambilan' => date('Y-m-d H:i:s'),
        ]);

        return redirect('ktp');
    }

    public function edit($id)
    {
        $data = Dokumen::find($id);
        return view('ktp.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        // if ($validator->fails()) {
        //     return redirect('ktp/'.$id.'/show_ubah')->withErrors($validator)->withInput();
        // }

        $dokumen = Dokumen::find($id);

        $dokumen->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect('ktp');
    }

    public function delete($id)
    {
        $dokumen = Dokumen::find($id);

        $dokumen->delete();

        return redirect('ktp');
    }
}
