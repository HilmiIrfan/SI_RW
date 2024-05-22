@extends('rt.template')

@section('content')
    <div class="container">
        <h2>Data Bansos Diterima</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Uraian</th>
                        <th>Jenis</th>
                        <th>Tahun</th>
                        <th>Diselenggarakan oleh</th>
                        <th>Disalurkan melalui</th>
                        <th>Kategori Penerima</th>
                        <th>Alamat Rumah</th>
                        <th>Nama Penerima</th>
                        <th>Status</th>
                        <th>Pekerjaan</th>
                        <th>Pendidikan</th>
                        <th>Action</th> <!-- Tambah kolom untuk action delete -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($bansos as $data)
                    <tr>
                        <td>{{ $data->nomor }}</td>
                        <td>{{ $data->uraian }}</td>
                        <td>{{ $data->jenis }}</td>
                        <td>{{ $data->tahun }}</td>
                        <td>{{ $data->diselenggarakan }}</td>
                        <td>{{ $data->disalurkan }}</td>
                        <td>{{ $data->kategori }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->pekerjaan }}</td>
                        <td>{{ $data->pendidikan }}</td>
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
        max-width: 900px;
        margin: 0 auto;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .alert {
        margin-bottom: 20px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table th,
    .table td {
        padding: 10px;
        text-align: center;
        vertical-align: middle;
    }

    .table th {
        background-color: #007bff;
        color: #fff;
        font-weight: bold;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f2f2f2;
    }

    .table-striped tbody tr:nth-of-type(even) {
        background-color: #fff;
    }

    .table-striped tbody tr:hover {
        background-color: #cce5ff;
    }
</style>
@endsection
