<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendudukController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->get('filter', 'no_kk');

        if ($filter == 'all') {
            $penduduks = Penduduk::all();
        } else {
            $penduduks = Penduduk::select('no_kk')->groupBy('no_kk')->get();
        }

        return view('penduduk.index', compact('penduduks', 'filter'));
    }

    public function show($no_kk)
    {
        $penduduks = Penduduk::where('no_kk', $no_kk)->get();
        return view('penduduk.detail', compact('penduduks'));
    }
}
