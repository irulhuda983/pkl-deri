<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;

class KiaController extends Controller
{
    
    public function index()
    {
        $data = Dokumen::where('jenis_id', 2)->get();
        return view('kia.index', compact('data'));
    }

    public function create()
    {
        return view('kia.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'nama_ortu' => 'required',
            'alamat' => 'required',
        ]);

        // if ($validator->fails()) {
        //     return redirect('kia/create')->withErrors($validator)->withInput();
        // }

        $data = Dokumen::create([
            'jenis_id' => 2,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'nama_ortu' => $request->nama_ortu,
            'alamat' => $request->alamat,
            'tgl_register' => date('Y-m-d H:i:s'),
        ]);

        return redirect('kia');
    }

    public function show_ubah($id)
    {
        $data = Dokumen::find($id);
        return view('kia.ubah_status', compact('data'));
    }

    public function ubah_status(Request $request, $id)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
        ]);

        // if ($validator->fails()) {
        //     return redirect('kia/'.$id.'/show_ubah')->withErrors($validator)->withInput();
        // }

        $dokumen = Dokumen::find($id);

        $dokumen->update([
            'status' => 'diambil',
            'nama_pengambil' => $request->nama,
            'nohp_pengambil' => $request->no_hp,
            'tgl_pengambilan' => date('Y-m-d H:i:s'),
        ]);

        return redirect('kia');
    }

    public function edit($id)
    {
        $data = Dokumen::find($id);
        return view('kia.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'no_hp' => 'required',
            'nama_ortu' => 'required',
            'alamat' => 'required',
        ]);

        // if ($validator->fails()) {
        //     return redirect('kia/'.$id.'/show_ubah')->withErrors($validator)->withInput();
        // }

        $dokumen = Dokumen::find($id);

        $dokumen->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'nama_ortu' => $request->nama_ortu,
            'alamat' => $request->alamat,
        ]);

        return redirect('kia');
    }

    public function delete($id)
    {
        $dokumen = Dokumen::find($id);

        $dokumen->delete();

        return redirect('kia');
    }
}
