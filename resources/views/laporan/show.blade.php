@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            @empty($laporan)
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5> Data yang Anda cari tidak ditemukan.
                </div>
            @else
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tr>
                        <th>ID Laporan</th>
                        <td>{{ $laporan->id_laporan }}</td>
                    </tr>
                    <tr>
                        <th>Nama Pelapor</th>
                        <td>{{ $laporan->nama_pelapor }}</td>
                    </tr>
                    <tr>
                        <th>No HP</th>
                        <td>{{ $laporan->no_hp }}</td>
                    </tr>
                    <tr>
                        <th>Subject</th>
                        <td>{{ $laporan->subject }}</td>
                    </tr>
                    <tr>
                        <th>Domisili RT</th>
                        <td>{{ $laporan->domisili_rt }}</td>
                    </tr>
                    <tr>
                        <th>Pesan</th>
                        <td>{{ $laporan->pesan }}</td>
                    </tr>
                </table>
            @endempty
            <a href="{{ url('laporan') }}" class="btn btn-sm btn-default mt- 2">Kembali</a>
        </div>
    </div>
@endsection

@push('css')
@endpush

@push('js')
@endpush
