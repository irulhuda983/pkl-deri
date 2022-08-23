<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'ktp_kia' => Dokumen::whereIn('jenis_id', [1, 2])->count(),
            'kk' => Dokumen::whereIn('jenis_id', [3])->count(),
            'akta_kematian' => Dokumen::whereIn('jenis_id', [4])->count(),
            'akta_kelahiran' => Dokumen::whereIn('jenis_id', [5])->count(),
        ];

        return view('home.index', compact('data'));
    }
}
