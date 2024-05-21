<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use App\Models\Galeri; 
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all();
        return view('galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('galeri.create');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required',
    //         'image' => 'required|image',
    //     ]);

    //     $imagePath = $request->file('image')->store('images', 'public');

    //     // Galeri:create([
    //     //     'title' => $request->title,
    //     //     'description' => $request->description,
    //     //     'image_path' => $imagePath,
    //     // ]);

    //     return redirect()->route('galeri.index')->with('success', 'Galeri created successfully.');
    // }

    // public function show(Galeri $galeri)
    // {
    //     return view('galeri.show', compact('galeri'));
    // }

    // public function edit(Galeri $galeri)
    // {
    //     return view('galeri.edit', compact('galeri'));
    // }

    // public function update(Request $request, Galeri $galeri)
    // {
    //     $request->validate([
    //         'title' => 'required',
    //         'image' => 'nullable|image',
    //     ]);

    //     if ($request->hasFile('image')) {
    //         $imagePath = $request->file('image')->store('images', 'public');
    //         $galeri->image_path = $imagePath;
    //     }

    //     $galeri->title = $request->title;
    //     $galeri->description = $request->description;
    //     $galeri->save();

    //     return redirect()->route('galeri.index')->with('success', 'Galeri updated successfully.');
    // }

    // public function destroy(Galeri $galeri)
    // {
    //     $galeri->delete();
    //     return redirect()->route('galeri.index')->with('success', 'Galeri deleted successfully.');
    // }
}
?>