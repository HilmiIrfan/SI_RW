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
        return view('galeri/index', compact('galeris'));
    }

    // Menampilkan form untuk menambahkan item galeri baru
    public function create()
    {
        return view('galeri/create');
    }

    // Menyimpan item galeri baru ke database
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Atur sesuai kebutuhan
        ]);

        // Upload gambar
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        // Simpan data ke database
        Galeri::create([
            'image_path' => $imageName,
        ]);

        return redirect()->route('galeri/index')->with('success', 'Item galeri berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit item galeri
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('galeri/edit', compact('galeri'));
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
            $galeri->image_path = $imageName;
        }

        $galeri->save();

        return redirect()->route('galeri/index')->with('success', 'Item galeri berhasil diperbarui.');
    }

    // Menghapus item galeri dari database
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();
        return redirect()->route('galeri/index')->with('success', 'Item galeri berhasil dihapus.');
    }
}