<?php

namespace App\Http\Controllers;

use App\Models\Bansos;
use App\Models\BansosTerima;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class BansosController extends Controller
{
    public function index()
    {
        // Mengambil semua data bansos dari database
        $bansos = Bansos::all();
        $bansoss = Penduduk::all();
        return view('bansos.filter', compact('bansos','bansoss'));
    }

    public function terima($id)
    {
        $bansos = Bansos::findOrFail($id);
        $bansos->status = 'Diterima';
        $bansos->save();

        return redirect()->route('bansos.filter')->with('success', 'Bansos berhasil diterima.');
    }
    public function undoTerima($id)
{
    $bansos = Bansos::findOrFail($id);
    
    $bansos->status = 'Belum Diterima'; // Atur status kembali ke "Belum Diterima"
    $bansos->save();

    return redirect()->back()->with('success', 'Status Diterima berhasil dihapus.');
}

    public function filtered()
    {
        $bansos = Bansos::where('status', 'Diterima')->get();
        $bansoss = Penduduk::all();
        return view('bansos.filtered', compact('bansos','bansoss'));
    }public function filteredAdmin()
    {
        $bansos = Bansos::where('status', 'Diterima')->get();
        $bansoss = Penduduk::all();
        return view('bansos.filteredAdmin', compact('bansos','bansoss'));
    }
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'no_kk' => 'required|exists:penduduk,no_kk', // Ensure no_kk exists in penduduk table
            'jumlah_tanggungan' => 'required',
            'gaji' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
            'surat_tambahan' => 'required',

        ], [
            'no_kk.exists' => 'Nomor KK tidak ditemukan di tabel penduduk.', // Custom error message
        ]);

        // Create a new Bansos record
        Bansos::create($request->all());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Data Bansos berhasil disimpan.');
    }
    public function showfilter()
    {
        $bansos = BansosTerima::all();
        return view('bansos.filtered');
    }
}
