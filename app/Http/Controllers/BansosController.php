<?php

namespace App\Http\Controllers;

use App\Models\Bansos;
use App\Models\BansosTerima;
use App\Models\FuzzyRanking;
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
        $bansos = Bansos::create([
            'no_kk' => $request->no_kk,
            'jumlah_tanggungan' => $request->jumlah_tanggungan,
            'gaji' => $request->gaji,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'pendidikan' => $request->pendidikan,
            'surat_tambahan' => $request->surat_tambahan,
            'status' => 'Menunggu', // atau status lainnya
            
        ]);
        $nilai_fuzzy = $this->hitungNilaiFuzzy($request->jumlah_tanggungan, $request->gaji, $request->pekerjaan, $request->pendidikan, $request->surat_tambahan);
        FuzzyRanking::create([
            'bansos_id' => $bansos->id,
            'nilai' => $nilai_fuzzy,
        ]);
        $fuzzyRanking = FuzzyRanking::where('bansos_id', $bansos->id)->first();

        // Tentukan kelayakan berdasarkan nilai fuzzy
        if ($fuzzyRanking) {
            $nilaiFuzzy = $fuzzyRanking->nilai;

            // Penentuan kelayakan berdasarkan nilai fuzzy
            if ($nilaiFuzzy < 500000) {
                $bansos->Kelayakan = 'Layak';
                $bansos->save();
            } elseif ($nilaiFuzzy <1000000) {
                $bansos->Kelayakan = 'Pertimbangan';
                $bansos->save();
            } else {
                $bansos->Kelayakan = 'Tidak Layak';
                $bansos->save();
            }
        } else {
            // Handle jika tidak ada nilai fuzzy yang ditemukan
            $bansos->Kelayakan = 'Tidak Layak';
            $bansos->save();
        }
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Data Bansos berhasil disimpan.');
    }
    public function showfilter()
    {
        $bansos = BansosTerima::all();
        return view('bansos.filtered');
    }

    private function hitungNilaiFuzzy($jumlah_tanggungan, $gaji, $pekerjaan, $pendidikan, $surat_tambahan)
{
   // Menentukan nilai keanggotaan untuk setiap variabel input

    // Jumlah Tanggungan
    if ($jumlah_tanggungan < 1) {
        $jumlah_tanggungan_rendah = 0.2;
        $jumlah_tanggungan_sedang = 0;
        $jumlah_tanggungan_tinggi = 0;
    } elseif ($jumlah_tanggungan >= 1 && $jumlah_tanggungan < 2) {
        $jumlah_tanggungan_rendah = 0;
        $jumlah_tanggungan_sedang = 0.4;
        $jumlah_tanggungan_tinggi = 0;
    } elseif ($jumlah_tanggungan >= 2 && $jumlah_tanggungan < 3) {
        $jumlah_tanggungan_rendah = 0;
        $jumlah_tanggungan_sedang = 0;
        $jumlah_tanggungan_tinggi = 0.6;
    } else {
        $jumlah_tanggungan_rendah = 0;
        $jumlah_tanggungan_sedang = 0;
        $jumlah_tanggungan_tinggi = 0.8;
    }

    // Gaji
    switch ($gaji) {
        case '<500000':
            return 250000; // Ambil nilai tengah dari rentang gaji
        case '500000-1000000':
            return 750000; // Ambil nilai tengah dari rentang gaji
        case '1000000-3000000':
            return 2000000; // Ambil nilai tengah dari rentang gaji
        case '>3000000':
            return 3500000; // Ambil nilai atas rentang gaji
        default:
            return 0; // Nilai default jika tidak sesuai dengan opsi yang diberikan
        $nilai_gaji = $this->gajiToNumeric($gaji); // Konversi nilai gaji menjadi numerik
        $gaji_rendah = max(0, min(1, (1000000 - $nilai_gaji) / 1000000));
        $gaji_sedang = max(0, min(1, ($nilai_gaji - 500000) / 500000));
        $gaji_tinggi = max(0, min(1, ($nilai_gaji - 1000000) / 2000000));
    // Pekerjaan
    // Karena pekerjaan adalah variabel kategorikal, kita hanya butuh nilai keanggotaan untuk setiap kategori
    $fuzzy_pekerjaan = [
        'PNS' => 0.2,
        'Petani/Nelayan' => 0.4,
        'Honor' => 0.6,
        'Pekerja Bebas' => 0.8,
    ];
    
    // Variabel pendidikan
    $fuzzy_pendidikan = [
        'Sarjana' => 0.2,
        'SMA' => 0.4,
        'SMP' => 0.6,
        'SD atau dibawahnya' => 0.8,
    ];
    // Surat Tambahan
    $surat_tambahan_punya = ($surat_tambahan == 'PUNYA') ? 1 : 0;
    $surat_tambahan_tidak = ($surat_tambahan == 'TIDAK') ? 1 : 0;

    // Menentukan nilai hasil setiap aturan (output)
    $hasil_aturan = [];

    // Aturan-aturan Fuzzy Sugeno
    // Aturan 1: IF (Jumlah Tanggungan Rendah) AND (Gaji Rendah) THEN (Output 1)
    $hasil_aturan = [];

    // Aturan-aturan Fuzzy Sugeno
    // Aturan 1: IF (Jumlah Tanggungan Rendah) AND (Gaji Rendah) THEN (Output 1)
    $output1 = min($jumlah_tanggungan_rendah, $gaji_rendah);
    $hasil_aturan[] =  0.3 * $output1; // Output sesuai dengan aturan
    
    // Aturan 2: IF (Jumlah Tanggungan Rendah) AND (Gaji Sedang) THEN (Output 2)
    $output2 = min($jumlah_tanggungan_rendah, $gaji_sedang);
    $hasil_aturan[] = 0.5 * $output2; // Output sesuai dengan aturan
    
    // Aturan 3: IF (Jumlah Tanggungan Rendah) AND (Gaji Tinggi) THEN (Output 3)
    $output3 = min($jumlah_tanggungan_rendah, $gaji_tinggi);
    $hasil_aturan[] =  0.7 * $output3; // Output sesuai dengan aturan
    
    // Aturan 4: IF (Jumlah Tanggungan Sedang) AND (Gaji Rendah) THEN (Output 4)
    $output4 = min($jumlah_tanggungan_sedang, $gaji_rendah);
    $hasil_aturan[] =  0.4 * $output4; // Output sesuai dengan aturan
    
    // Aturan 5: IF (Jumlah Tanggungan Sedang) AND (Gaji Sedang) THEN (Output 5)
    $output5 = min($jumlah_tanggungan_sedang, $gaji_sedang);
    $hasil_aturan[] = 0.6 * $output5; // Output sesuai dengan aturan
    
    // Aturan 6: IF (Jumlah Tanggungan Sedang) AND (Gaji Tinggi) THEN (Output 6)
    $output6 = min($jumlah_tanggungan_sedang, $gaji_tinggi);
    $hasil_aturan[] = 0.8 * $output6; // Output sesuai dengan aturan
    
    // Aturan 7: IF (Jumlah Tanggungan Tinggi) AND (Gaji Rendah) THEN (Output 7)
    $output7 = min($jumlah_tanggungan_tinggi, $gaji_rendah);
    $hasil_aturan[] =  0.5 * $output7; // Output sesuai dengan aturan
    
    // Aturan 8: IF (Jumlah Tanggungan Tinggi) AND (Gaji Sedang) THEN (Output 8)
    $output8 = min($jumlah_tanggungan_tinggi, $gaji_sedang);
    $hasil_aturan[] = 0.7 * $output8; // Output sesuai dengan aturan
    
    // Aturan 9: IF (Jumlah Tanggungan Tinggi) AND (Gaji Tinggi) THEN (Output 9)
    $output9 = min($jumlah_tanggungan_tinggi, $gaji_tinggi);
    $hasil_aturan[] = 0.9 * $output9; // Output sesuai dengan aturan
    
    // Menghitung nilai akhir sebagai output menggunakan metode sugeno (rata-rata bobot)
    $nilai_fuzzy = array_sum($hasil_aturan) / count($hasil_aturan);
    
    return $nilai_fuzzy;

    
}
}
}