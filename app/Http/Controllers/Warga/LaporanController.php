<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Http\Requests\StorePostRequest;
use App\Models\KategoriModel;
use App\Models\Laporan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Caster\RedisCaster;


class LaporanController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Laporan',
            'list' => ['Home', 'Laporan']
        ];

        $page = (object) [
            'title' => 'Daftar Laporan',
        ];

        $activeMenu = 'laporan';

        return view('laporan.index', [
            'breadcrumb' => $breadcrumb,
            'page' => $page,
            'activeMenu' => $activeMenu
        ]);
    }
    public function store(Request $request)
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

    public function list(Request $request)
    {
        $kategoris = Laporan::select('kategori_id', 'kategori_kode', 'kategori_nama');
        return datatables()->of($kategoris)
            ->addIndexColumn() // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
            ->addColumn('aksi', function ($kategori) { // menambahkan kolom aksi
                $btn = '<a href="' . url('/kategori/' . $kategori->kategori_id) . '" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="' . url('/kategori/' . $kategori->kategori_id . '/edit') . '" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="' . url('/kategori/' . $kategori->kategori_id) . '">'
                    . csrf_field() . method_field('DELETE') .
                    '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\');">Hapus</button></form>';
                return $btn;
            })
            ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html
            ->make(true);
    }

    // public function create()
    // {
    //     $breadcrumb = (object)[
    //         'title' => 'Tambah Kategori',
    //         'list' => ['Home', 'Kategori', 'Tambah']
    //     ];

    //     $page = (object)[
    //         'title' => 'Tambah Kategori Baru',
    //     ];

    //     $activeMenu = 'kategori';

    //     return view('kategori.create', [
    //         'breadcrumb' => $breadcrumb,
    //         'page' => $page,
    //         'activeMenu' => $activeMenu
    //     ]);
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'kategori_kode' => 'required|string|unique:m_kategori|min:3',
    //         'kategori_nama' => 'required|string',
    //     ]);

    //     KategoriModel::create([
    //         'kategori_kode' => $request->kategori_kode,
    //         'kategori_nama' => $request->kategori_nama
    //     ]);

    //     return redirect('/kategori')->with('success', 'Data Kategori baru telah ditambahkan');
    // }

    // public function show(string $id)
    // {
    //     $kategori = KategoriModel::find($id);

    //     $breadcrumb = (object)[
    //         'title' => 'Detail Kategori',
    //         'list'  => ['Home', 'Kategori', 'Detail']
    //     ];

    //     $page = (object)[
    //         'title' => 'Detail Kategori'
    //     ];

    //     $activeMenu = 'kategori';

    //     return view('kategori.show', [
    //         'breadcrumb' => $breadcrumb,
    //         'page' => $page,
    //         'kategori' => $kategori,
    //         'activeMenu' => $activeMenu
    //     ]);
    // }

    // public function edit(string $id)
    // {
    //     $kategori = KategoriModel::find($id);

    //     $breadcrumb = (object)[
    //         'title' => 'Edit Kategori',
    //         'list'  => ['Home', 'Kategori', 'Edit']
    //     ];

    //     $page = (object)[
    //         'title' => 'Edit Kategori'
    //     ];
    //     $activeMenu = 'kategori';

    //     return view('kategori.edit', [
    //         'breadcrumb' => $breadcrumb,
    //         'page' => $page,
    //         'kategori' => $kategori,
    //         'activeMenu' => $activeMenu
    //     ]);
    // }

    // public function update(Request $request, string $id)
    // {
    //     $validated = $request->validate([
    //         'kategori_kode' => 'required|min:3|unique:m_kategori,kategori_kode,'.$id.',kategori_id',
    //         'kategori_nama' => 'required',
    //     ]);

    //     KategoriModel::find($id)->update([
    //         'kategori_kode' => $request->kategori_kode,
    //         'kategori_nama' => $request->kategori_nama
    //     ]);

    //     return redirect('/kategori')->with('success', 'Data Kategori berhasil diubah');
    // }

    // public function destroy(string $id)
    // {
    //     $check = KategoriModel::find($id);
    //     if (!$check) {
    //         return redirect('/kategori')->with('error', 'Data Kategori tidak ditemukan');
    //     }
    //     try {
    //         KategoriModel::destroy($id);
    //         return redirect('/kategori')->with('success', 'Data Kategori berhasil dihapus');
    //     } catch (\Illuminate\Database\QueryException $e) {
    //         return redirect('/kategori')->with('error', 'Data Kategori gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
    //     }
    // }
    public function show(Laporan $laporan)
    {
        return view('laporans.show', compact('laporan'));
    }

}