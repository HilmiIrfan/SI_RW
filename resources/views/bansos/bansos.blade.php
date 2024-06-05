@extends('warga.template')

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
            max-width: 6000px;
            margin: 50px auto;
            margin-top: 0px;
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

        input[type="text"], select {
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
    <div class="container-fluid">
        <div class="card card-primary">
          <div class="card-header">
            <h4 class="card-title">Form Input Data Bansos</h4>
          </div>
    <div class="container">
        <h2 style="text-align: center;">Masukkan Data Anda</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('bansos.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="no_kk">Nomor Kartu Keluarga:</label>
                <input type="text" id="no_kk" name="no_kk" value="{{ old('no_kk') }}" required>
            </div>
            <div class="form-group">
                <label for="jumlah_tanggungan">Jumlah Tanggungan:</label>
                <select id="jumlah_tanggungan" name="jumlah_tanggungan" required>
                    <option value="0" {{ old('jumlah_tanggungan') == '0' ? 'selected' : '' }}>0</option>
                    <option value="1" {{ old('jumlah_tanggungan') == '1' ? 'selected' : '' }}>1</option>
                    <option value="2" {{ old('jumlah_tanggungan') == '2' ? 'selected' : '' }}>2</option>
                    <option value="3" {{ old('jumlah_tanggungan') == '3' ? 'selected' : '' }}>3</option>
                    <option value="4" {{ old('jumlah_tanggungan') == '4' ? 'selected' : '' }}>&gt;3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gaji">Gaji:</label>
                <select id="gaji" name="gaji" required>
                    <option value="<500000" {{ old('gaji') == '<500000' ? 'selected' : '' }}>&lt;500000</option>
                    <option value="500000-1000000" {{ old('gaji') == '500000-1000000' ? 'selected' : '' }}>500000-1000000</option>
                    <option value="1000000-3000000" {{ old('gaji') == '1000000-3000000' ? 'selected' : '' }}>1000000-3000000</option>
                    <option value=">3000000" {{ old('gaji') == '>3000000' ? 'selected' : '' }}>&gt;3000000</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan:</label>
                <select id="pekerjaan" name="pekerjaan" required>
                    <option value="PNS" {{ old('pekerjaan') == 'PNS' ? 'selected' : '' }}>PNS</option>
                    <option value="Honor" {{ old('pekerjaan') == 'Honor' ? 'selected' : '' }}>Honor</option>
                    <option value="Petani/Nelayan" {{ old('pekerjaan') == 'Petani/Nelayan' ? 'selected' : '' }}>Petani/Nelayan</option>
                    <option value="Pekerja Bebas" {{ old('pekerjaan') == 'Pekerja Bebas' ? 'selected' : '' }}>Pekerja Bebas</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Rumah:</label>
                <input type="text" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
            </div>
            <div class="form-group">
                <label for="pendidikan">Pendidikan:</label>
                <select id="pendidikan" name="pendidikan" required>
                    <option value="SD atau dibawahnya" {{ old('pendidikan') == 'SD atau dibawahnya' ? 'selected' : '' }}>SD atau dibawahnya</option>
                    <option value="SMP" {{ old('pendidikan') == 'SMP' ? 'selected' : '' }}>SMP</option>
                    <option value="SMA" {{ old('pendidikan') == 'SMA' ? 'selected' : '' }}>SMA</option>
                    <option value="Sarjana" {{ old('pendidikan') == 'Sarjana' ? 'selected' : '' }}>Sarjana</option>
                </select>
            </div>
            <div class="form-group">
                <label for="surat_tambahan">Surat Tambahan:</label>
                <select id="surat_tambahan" name="surat_tambahan" required>
                    <option value="PUNYA" {{ old('surat_tambahan') == 'PUNYA' ? 'selected' : '' }}>PUNYA</option>
                    <option value="TIDAK" {{ old('surat_tambahan') == 'TIDAK' ? 'selected' : '' }}>TIDAK</option>
                </select>
            </div>
            <button type="submit">Simpan</button>
        </form>
    </div>
@endsection
