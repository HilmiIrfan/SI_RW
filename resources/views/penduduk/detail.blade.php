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

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>

    <div class="container">
        <h2>Detail Anggota KK - {{ $penduduks->first()->no_kk }}</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Pekerjaan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penduduks as $penduduk)
                    <tr>
                        <td>{{ $penduduk->nik }}</td>
                        <td>{{ $penduduk->nama }}</td>
                        <td>{{ $penduduk->status }}</td>
                        <td>{{ $penduduk->pekerjaan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('penduduk.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection

