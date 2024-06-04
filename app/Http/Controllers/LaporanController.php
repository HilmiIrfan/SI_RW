<?php

namespace App\Http\Controllers;


use App\Models\Laporan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;



class LaporanController extends Controller
{
    public function index()
    {
        $laporan = Laporan::all();
        $breadcrumb = (object) [
            'title' => 'Daftar Laporan',
            'list' => ['Home', 'Laporan']
        ];

        $page = (object) [
            'title' => 'Daftar Laporan',
        ];

        $activeMenu = 'laporan';
        
        return view('laporan.index',compact('laporan'), [
            'breadcrumb' => $breadcrumb,
            'page' => $page,
            'activeMenu' => $activeMenu
        ]);
    }
    public function store(Request $request): RedirectResponse
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'subject' => 'required|string',
            'nomor-hp' => 'required|numeric|digits_between:10,12',
            'warga-rt' => 'required|string',
            'pesan' => 'required|string',
        ]);

        // Menyimpan data ke dalam database
        Laporan::create([
            'nama_pelapor' => $request->nama,
            'subject' => $request->subject,
            'no_hp' => $request->input('nomor-hp'),
            'domisili_rt' => $request->input('warga-rt'),
            'pesan' => $request->pesan,
        ]);

        // Redirect atau memberikan response setelah data tersimpan
        return redirect()->back()->with('success', 'Laporan berhasil dikirim.');
    }

   
    public function show(Laporan $laporan)
    {
        return view('laporan.show', compact('laporan'));
    }

}