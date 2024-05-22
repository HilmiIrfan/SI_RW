@extends('layout.template')

@section('content')
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Style container */
        .container {
            width: 100%;
            max-width: 600px;
            margin: 50px auto;
            margin-top: 15px;
            background-color: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        /* Style form */
        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Style table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        table th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: center;
        }

        /* Alternating row colors */
        table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>

    <div class="container">
        <h2>Form Data Input Bansos</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('bansos.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nomor">Nomor:</label>
                <input type="text" id="nomor" name="nomor" required>
            </div>
            <div class="form-group">
                <label for="uraian">Uraian Bansos:</label>
                <input type="text" id="uraian" name="uraian" required>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis Bantuan:</label>
                <input type="text" id="jenis" name="jenis" required>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun:</label>
                <input type="text" id="tahun" name="tahun" required>
            </div>
            <div class="form-group">
                <label for="diselenggarakan">Diselenggarakan oleh:</label>
                <input type="text" id="diselenggarakan" name="diselenggarakan" required>
            </div>
            <div class="form-group">
                <label for="disalurkan">Disalurkan melalui:</label>
                <input type="text" id="disalurkan" name="disalurkan" required>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori Penerima:</label>
                <input type="text" id="kategori" name="kategori" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Rumah:</label>
                <input type="text" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Penerima:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" id="status" name="status" required>
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan:</label>
                <input type="text" id="pekerjaan" name="pekerjaan" required>
            </div>
            <div class="form-group">
                <label for="pendidikan">Pendidikan:</label>
                <input type="text" id="pendidikan" name="pendidikan" required>
            </div>
            <button type="submit">Simpan</button>
        </form>
    </div>
@endsection
