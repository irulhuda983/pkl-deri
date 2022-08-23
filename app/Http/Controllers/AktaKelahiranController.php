<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;

class AktaKelahiranController extends Controller
{
    
    public function index()
    {
        $data = Dokumen::where('jenis_id', 4)->get();
        return view('akta_kelahiran.index', compact('data'));
    }

    public function create()
    {
        return view('akta_kelahiran.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'no_seri_akta' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        // if ($validator->fails()) {
        //     return redirect('akta_kelahiran/create')->withErrors($validator)->withInput();
        // }

        $data = Dokumen::create([
            'jenis_id' => 4,
            'no_seri_akta' => $request->no_seri_akta,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'tgl_register' => date('Y-m-d H:i:s'),
        ]);

        return redirect('akta-kelahiran');
    }

    public function show_ubah($id)
    {
        $data = Dokumen::find($id);
        return view('akta_kelahiran.ubah_status', compact('data'));
    }

    public function ubah_status(Request $request, $id)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
        ]);

        // if ($validator->fails()) {
        //     return redirect('akta_kelahiran/'.$id.'/show_ubah')->withErrors($validator)->withInput();
        // }

        $dokumen = Dokumen::find($id);

        $dokumen->update([
            'status' => 'diambil',
            'nama_pengambil' => $request->nama,
            'nohp_pengambil' => $request->no_hp,
            'tgl_pengambilan' => date('Y-m-d H:i:s'),
        ]);

        return redirect('akta-kelahiran');
    }

    public function edit($id)
    {
        $data = Dokumen::find($id);
        return view('akta_kelahiran.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'no_seri_akta' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        // if ($validator->fails()) {
        //     return redirect('akta_kelahiran/'.$id.'/show_ubah')->withErrors($validator)->withInput();
        // }

        $dokumen = Dokumen::find($id);

        $dokumen->update([
            'no_seri_akta' => $request->no_seri_akta,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect('akta-kelahiran');
    }

    public function delete($id)
    {
        $dokumen = Dokumen::find($id);

        $dokumen->delete();

        return redirect('akta-kelahiran');
    }
}
