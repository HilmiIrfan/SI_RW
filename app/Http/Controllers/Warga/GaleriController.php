<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use App\Models\Galeri; 
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    // Menampilkan semua item galeri
    public function index()
    {
        $galeris = Galeri::all();
        return view('galeri.index', compact('galeris'));
    }

    // Menampilkan form untuk menambahkan item galeri baru
    public function create()
    {
        return view('galeri.create');
    }

    // Menyimpan item galeri baru ke database
    // Menyimpan item galeri baru ke database
    public function store(Request $request)
    {
    // Validasi data input
    $request->validate([
        'nama_foto' => 'required', // Pastikan kolom 'nama_foto' tidak kosong
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Upload gambar
    $imageName = time().'.'.$request->image->extension();  
    $request->image->move(public_path('images'), $imageName);

    // Periksa apakah 'nama_foto' tersedia sebelum menyimpan ke dalam database
    if ($request->has('nama_foto')) {
        // Jika 'nama_foto' tersedia dalam request, simpan ke dalam database
        Galeri::create([
            'nama_foto' => $request->nama_foto,
            'detail_foto' => $request->detail_foto,
            'foto' => $imageName,
        ]);
    } else {
        // Tampilkan pesan kesalahan atau tindakan lain sesuai dengan kebutuhan aplikasi Anda
    }

    return redirect()->route('galeri.index')->with('success', 'Item galeri berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit item galeri
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('galeri.edit', compact('galeri'));
    }

    // Memperbarui item galeri di database
    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Atur sesuai kebutuhan
        ]);

        // Cek apakah item galeri ada dalam database
        $galeri = Galeri::findOrFail($id);

        // Jika ada gambar baru, upload dan simpan gambar baru
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $galeri->foto = $imageName; // Sesuaikan dengan nama kolom yang sesuai
        }

        // Update data galeri
        $galeri->nama_foto = $request->nama_foto;
        $galeri->detail_foto = $request->detail_foto;
        $galeri->save();

        return redirect()->route('galeri.index')->with('success', 'Item galeri berhasil diperbarui.');
    }

    // Menghapus item galeri dari database
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();
        return redirect()->route('galeri.index')->with('success', 'Item galeri berhasil dihapus.');
    }
}