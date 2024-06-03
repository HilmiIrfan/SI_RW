@extends('Admin.template')

@section('content')
    <div class="container">
        <h2>Data Bansos</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nomor KK</th>
                        <th>Jumlah Tanggungan</th>
                        <th>Gaji</th>
                        <th>Pekerjaan</th>
                        <th>Alamat</th>
                        <th>Pendidikan</th>
                        <th>Surat Tambahan</th>
                        <th>Status</th>
                        <th>Kepala Keluarga</th> <!-- New column -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bansos as $data)
                    <tr>
                        <td>{{ $data->no_kk }}</td>
                        <td>{{ $data->jumlah_tanggungan }}</td>
                        <td>{{ $data->gaji }}</td>
                        <td>{{ $data->pekerjaan }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->pendidikan }}</td>
                        <td>{{ $data->surat_tambahan }}</td>
                        <td>{{ $data->status }}</td>
                        <td>
                            @foreach($bansoss as $datas)
                                @if($datas->no_kk == $data->no_kk && $datas->status == "Kepala Keluarga")
                                    {{ $datas->nama }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            <!-- Tombol Delete dengan konfirmasi -->
                            <form action="{{ route('bansos.undo_terima', $data->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" onclick="return confirm('Anda yakin ingin menghapus status Diterima dari data ini?')" class="btn btn-warning">Batalkan Terima</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-x: auto; /* Menambahkan pengguliran horizontal */
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
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            background-color: #218838;
        }
    </style>
@endsection
