@extends('layout.template')

@section('content')

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
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
            <form action="#" method="post">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <select id="subject" name="subject" required>
                        <option value="Pertanyaan">Kritik&Saran</option>
                        <option value="Komentar">Laporan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nomor-hp">Nomor HP:</label>
                    <input type="tel" id="nomor-hp" name="nomor-hp" pattern="[0-9]{10,12}" required>
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
                    <textarea id="pesan" name="pesan" rows="5" required></textarea>
                </div>
                <button type="submit">Kirim</button>
            </form>
        </div>
    </body>


    </html>
