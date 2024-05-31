@extends('Admin.template')

@section('content')
<style>
    .container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow-x: auto;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .alert {
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
        text-align: center;
    }

    .table-responsive {
        overflow-x: auto;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .table th,
    .table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    .table th {
        background-color: #f2f2f2;
        text-align: center;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .btn {
        padding: 5px 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: #fff;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    .btn-info {
        background-color: #17a2b8;
        color: #fff;
    }

    .btn-info:hover {
        background-color: #138496;
    }
</style>

    <div class="container">
        <h2>Data Penduduk</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{ route('penduduk.index', ['filter' => 'all']) }}" class="btn btn-primary">Tampilkan Semua Penduduk</a>
                    <a href="{{ route('penduduk.index', ['filter' => 'no_kk']) }}" class="btn btn-secondary">Tampilkan Berdasarkan No KK</a>
                </div>
                <div>
                    <a href="{{ route('penduduk.create') }}" class="btn btn-primary">Tambah Penduduk <i class="fas fa-plus-circle"></i></a>
                </div>
            </div>
        </div>
        
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        @if($filter == 'all')
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Pekerjaan</th>
                            <th>No KK</th>
                        @else
                            <th>No KK</th>
                        @endif
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($filter == 'all')
                        @foreach($penduduks as $penduduk)
                            <tr>
                                <td>{{ $penduduk->nik }}</td>
                                <td>{{ $penduduk->nama }}</td>
                                <td>{{ $penduduk->status }}</td>
                                <td>{{ $penduduk->pekerjaan }}</td>
                                <td>{{ $penduduk->no_kk }}</td>
                                <td>
                                    <a href="{{ route('penduduk.show', $penduduk->no_kk) }}" class="btn btn-info">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        @foreach($penduduks as $penduduk)
                            <tr>
                                <td>{{ $penduduk->no_kk }}</td>
                                <td>
                                    <a href="{{ route('penduduk.show', $penduduk->no_kk) }}" class="btn btn-info">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div style="margin-bottom: 100px;"></div> <!-- Tambahkan ruang kosong di sini -->
    </div>
@endsection

