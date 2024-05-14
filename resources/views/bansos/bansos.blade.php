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
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
            /* Mengurangi 20px dari lebar total untuk menyesuaikan dengan padding */
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

    <body>
        <div class="container">
            <h2>Form Input Bansos</h2>
            <form action="#" method="post">
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
                <!-- Tambahkan input fields lainnya sesuai dengan kebutuhan -->
                <button type="submit">Simpan</button>
            </form>

            <h2>Daftar Bansos</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Uraian Bansos</th>
                        <th>Jenis Bantuan</th>
                        <th>Tahun</th>
                        <th>Diselenggarakan oleh</th>
                        <th>Disalurkan melalui</th>
                        <th>Kategori Penerima</th>
                        <th>Alamat Rumah</th>
                        <th>Nama Penerima</th>
                        <th>Status</th>
                        <th>Pekerjaan</th>
                        <th>Pendidikan</th>
                        <!-- Tambahkan kolom lainnya sesuai dengan kebutuhan -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Koneksi ke database (jika digunakan)
                    // $conn = mysqli_connect("localhost", "username", "password", "nama_database");
                    
                    // Ambil data bansos dari array sementara (contoh)
                    $data = [
                        ['Sesha', 'Uraian1', 'Jenis1', '2024', 'Diselenggarakan1', 'Disalurkan1', 'Kategori1', 'Alamat1', 'Nama1', 'Status1', 'Pekerjaan1', 'Pendidikan1'],
                        ['Febby', 'Uraian2', 'Jenis2', '2024', 'Diselenggarakan2', 'Disalurkan2', 'Kategori2', 'Alamat2', 'Nama2', 'Status2', 'Pekerjaan2', 'Pendidikan2'],
                        // Tambahkan data lainnya sesuai dengan kebutuhan
                    ];
                    
                    // Tampilkan data dalam bentuk tabel
                    foreach ($data as $row) {
                        echo '<tr>';
                        foreach ($row as $value) {
                            echo "<td>$value</td>";
                        }
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </body>

    </html>
