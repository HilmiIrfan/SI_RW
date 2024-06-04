<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendudukController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->get('filter', 'no_kk');

        if ($filter == 'all') {
            $penduduks = Penduduk::all();
        } else {
            $penduduks = Penduduk::select('no_kk')->groupBy('no_kk')->get();
        }

        return view('penduduk.index', compact('penduduks', 'filter'));
    }

    public function create()
    {
        // Mendapatkan nomor KK yang sudah ada
        $existing_no_kk = Penduduk::pluck('no_kk')->unique()->toArray();
        
        return view('penduduk.create', compact('existing_no_kk'));
    }
    
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'no_kk' => 'required_without:no_kk_manual', // Ini menunjukkan bahwa salah satu dari 'no_kk' atau 'no_kk_manual' harus diisi
            'no_kk_manual' => 'required_without:no_kk',
            'nik' => 'required',
            'nama' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
        ]);
    
        // Simpan data ke database
        Penduduk::create($request->all());
    
        // Redirect ke halaman create dengan pesan sukses
        return redirect()->route('penduduk.create')->with('success', 'Data penduduk berhasil ditambahkan.');
    }

    public function show($no_kk)
    {
        $penduduks = Penduduk::where('no_kk', $no_kk)->get();
        return view('penduduk.detail', compact('penduduks'));
    }
}