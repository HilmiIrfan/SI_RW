<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanAdminController extends Controller
{
    public function index()
    {
        return view('laporan.index');
    }
    public function show(Laporan $laporan)
    {
        return view('laporan.show');
    }
    public function create(Laporan $laporan)
    {
        return view('laporan.create');
    }
}

