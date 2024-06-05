@extends('Admin.template')

@section('content')
<div class="container">
    <h2>Tambah Iuran Warga</h2>
    <form action="{{ route('iuran.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_warga">Nama Warga</label>
            <input type="text" name="nama_warga" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tanggal_iuran">Tanggal Iuran</label>
            <input type="date" name="tanggal_iuran" class="form-control" required>
        </div>
        <div class="form-group">S
            <label for="nominal">Nominal</label>
            <input type="number" name="nominal" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
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
