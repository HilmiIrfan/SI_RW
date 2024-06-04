@extends('warga.template')

@section('content')

    <style>
        body {
            font-family: Ubuntu;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 200%;
            max-width: 700px;
            margin: 80px auto;
            margin-top: 15px;
            background-color: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 25px;
        }

        .form-group {
            margin-bottom: 10px;
            display: flex;
        }

        label {
            display: block;
            margin-bottom: 5px;
            width: 30%; /* Adjust the width as needed */
        }

        input[type="text"],
        input[type="tel"],
        select,
        textarea {
            width: 60%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

    <body>
        <div class="container">
            <h1>LAPORAN</h1>
            <form action="{{ route('laporan.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" placeholder="Masukkan Nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <select id="subject" name="subject" required>
                        <option value="kritin/saran">Kritik & Saran</option>
                        <option value="pesan">Laporan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nomor-hp">Nomor HP:</label>
                    <input type="tel" id="nomor-hp" placeholder="Masukkan Nomor Telp" name="nomor-hp" pattern="[0-9]{10,12}" required>
                </div>
                <div class="form-group">
                    <label for="warga-rt">Warga RT:</label>
                    <select id="warga-rt" name="warga-rt" required>
                        <option value="RT01">RT01</option>
                        <option value="RT02">RT02</option>
                        <option value="RT03">RT03</option>
                        <option value="RT04">RT04</option>
                        <option value="RT05">RT05</option>
                        <option value="RT06">RT06</option>
                        <option value="RT07">RT07</option>
                        <option value="RT08">RT08</option>
                        <option value="RT09">RT09</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan:</label>
                    <textarea id="pesan" name="pesan" placeholder="Masukkan Pesan" rows="5" required></textarea>
                </div>
                <button type="submit">Kirim</button>
            </form>
        </div>
    </body>
@endsection
