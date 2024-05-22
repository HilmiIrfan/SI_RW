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
        return view('bansos.filtered', compact('bansos'));
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
    public function showfilter()
    {
        $bansos = BansosTerima::all();
        return view('bansos.filtered');
    }
}
