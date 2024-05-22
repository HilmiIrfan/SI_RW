@extends('rt.template')

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
                        <th>Action</th>
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
                            <form action="{{ route('bansos.terima', $data->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-success">Terima</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

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
