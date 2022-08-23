<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;

class AktaKematianController extends Controller
{
    
    public function index()
    {
        $data = Dokumen::where('jenis_id', 5)->get();
        return view('akta_kematian.index', compact('data'));
    }

    public function create()
    {
        return view('akta_kematian.create');
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
        //     return redirect('akta_kematian/create')->withErrors($validator)->withInput();
        // }

        $data = Dokumen::create([
            'jenis_id' => 5,
            'no_seri_akta' => $request->no_seri_akta,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'tgl_register' => date('Y-m-d H:i:s'),
        ]);

        return redirect('akta-kematian');
    }

    public function show_ubah($id)
    {
        $data = Dokumen::find($id);
        return view('akta_kematian.ubah_status', compact('data'));
    }

    public function ubah_status(Request $request, $id)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'no_hp' => 'required',
        ]);

        // if ($validator->fails()) {
        //     return redirect('akta_kematian/'.$id.'/show_ubah')->withErrors($validator)->withInput();
        // }

        $dokumen = Dokumen::find($id);

        $dokumen->update([
            'status' => 'diambil',
            'nama_pengambil' => $request->nama,
            'nohp_pengambil' => $request->no_hp,
            'tgl_pengambilan' => date('Y-m-d H:i:s'),
        ]);

        return redirect('akta-kematian');
    }

    public function edit($id)
    {
        $data = Dokumen::find($id);
        return view('akta_kematian.edit', compact('data'));
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
        //     return redirect('akta_kematian/'.$id.'/show_ubah')->withErrors($validator)->withInput();
        // }

        $dokumen = Dokumen::find($id);

        $dokumen->update([
            'no_seri_akta' => $request->no_seri_akta,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect('akta-kematian');
    }

    public function delete($id)
    {
        $dokumen = Dokumen::find($id);

        $dokumen->delete();

        return redirect('akta-kematian');
    }
}
