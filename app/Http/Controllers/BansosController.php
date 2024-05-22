<?php

namespace App\Http\Controllers;

use App\Models\Bansos;
use App\Models\BansosTerima;
use Illuminate\Http\Request;

class BansosController extends Controller
{
    public function index()
    {
        // Mengambil semua data bansos dari database
        $bansos = Bansos::all();

        // Mengirim data bansos ke view
        return view('bansos.filter', compact('bansos'));
    }

    public function terima($id)
    {
        // Mencari data bansos berdasarkan ID
        $bansos = Bansos::findOrFail($id);

        // Menyimpan data bansos yang diterima ke tabel bansos_terima
        BansosTerima::create([
            'bansos_id' => $bansos->id,
        ]);

        // Redirect kembali ke halaman daftar bansos dengan pesan sukses
        return redirect()->route('bansosfilt')->with('success', 'Data Bansos diterima.');
    }
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nomor' => 'required',
            'uraian' => 'required',
            'jenis' => 'required',
            'tahun' => 'required',
            'diselenggarakan' => 'required',
            'disalurkan' => 'required',
            'kategori' => 'required',
            'alamat' => 'required',
            'nama' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'pendidikan' => 'required',
        ]);

        // Simpan data ke dalam database
        Bansos::create($validatedData);

        // Redirect dan memberikan pesan sukses
        return redirect()->back()->with('success', 'Data Bansos berhasil disimpan.');
    }
}
