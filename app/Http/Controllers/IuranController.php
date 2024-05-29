<?php

namespace App\Http\Controllers;

use App\Models\Iuran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IuranController extends Controller
{
    /**
     * Menampilkan daftar iuran warga.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iuran = Iuran::with('user')->get();
        return view('rt.iuranwarga', compact('iuran'));
    }

    /**
     * Menampilkan formulir untuk menambahkan data iuran baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('rt.iuranwarga_create', compact('warga'));
    }

    /**
     * Menyimpan data iuran baru.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $this->validateRequest($request);

        $iuran = Iuran::create($validatedData);

        return redirect()->route('iuran.index')->with('success', 'Data iuran baru berhasil ditambahkan.');
    }

    /**
     * Menampilkan formulir untuk mengedit data iuran.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $iuran = Iuran::with('warga')->findOrFail($id);
        $user = User::all();
        return view('rt.iuranwarga_edit', compact('iuran', 'warga'));
    }

    /**
     * Memperbarui data iuran.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $this->validateRequest($request);

        $iuran = Iuran::findOrFail($id);
        $iuran->update($validatedData);

        return redirect()->route('iuran.index')->with('success', 'Data iuran berhasil diperbarui.');
    }

    /**
     * Menghapus data iuran.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Iuran::findOrFail($id)->delete();

        return redirect()->route('iuran.index')->with('success', 'Data iuran berhasil dihapus.');
    }

    /**
     * Validasi data input.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    private function validateRequest(Request $request)
    {
        return Validator::make($request->all(), [
            'id_warga' => 'required|integer|exists:warga,id',
            'nama_warga' => 'required|string',
            'tanggal_iuran' => 'required|date',
            'nominal' => 'required|numeric|min:1',
        ]);
    }
}