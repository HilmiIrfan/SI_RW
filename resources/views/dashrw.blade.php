@extends('Admin.template')

@section('content')

<style>
    .card-header .container {
        position: relative;
        width: 100%;
        margin: 0 auto;
    }

    .card-header .image-container {
        position: relative;
        display: inline-block;
    }

    .card-header .image-container img {
        width: 100%;
        height: auto;
    }

    .card-header .text-container {
        background-color: rgba(0, 0, 0, 0.6);
        padding: 20px;
        border-radius: 10px;
        color: white;
        font-size: 18px;
    }

    .card-header .text-container span {
        font-weight: bold;
        font-size: 22px;
    }

    /* Card body CSS */
    .card-body {
    display: flex;
    align-items: center; /* Mengatur vertikal tengah */
}

.card-body .container {
    display: flex;
    justify-content: space-between; /* Meletakkan elemen di ujung kanan */
}

.card-body .image-container {
    flex: 0 0 40%; /* Mengatur lebar gambar */
    margin-right: 20px; /* Jarak antara gambar dan teks */
}

.card-body .image-container img {
    width: 100%;
    height: auto;
}

.card-body .text-container {
    flex: 0 0 55%; /* Mengatur lebar teks */
}

.card-body .text-container h1 {
    font-size: 24px; /* Ukuran judul */
    margin-bottom: 10px; /* Jarak antara judul dan paragraf */
}

.card-body .text-container p {
    font-size: 16px; /* Ukuran teks */
    margin-bottom: 10px; /* Jarak antara paragraf */
}

.card-body .text-container ul {
    margin-bottom: 10px; /* Jarak antara daftar dengan paragraf atau elemen lainnya */
}

.card-body .text-container ul li {
    margin-bottom: 5px; /* Jarak antara item daftar */
}

.card-body .text-container ul ul {
    margin-top: 5px; /* Jarak antara daftar bersarang */
}

.card-body .text-container ul ul li {
    margin-bottom: 5px; /* Jarak antara item daftar bersarang */
}

.card-body .text-container p:last-child {
    margin-bottom: 0; /* Menghapus margin bottom untuk elemen terakhir */
}

</style>

<div class="card">
    <div class="card-header">
        <div class="container">
            <div class="image-container">
                <img src="adminlte/dist/img/jalanKesatrian.png" alt="Street sign">
                <div class="text-container">
                    <p><span>9</span> Rukun Tetangga &nbsp; &nbsp; &nbsp; <span>60</span> Kartu Keluarga  &nbsp; &nbsp; &nbsp; <span>750</span> Warga</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="container">
            <div class="image-container">
                <img src="adminlte/dist/img/image 6.png" alt="Street sign">
                <img src="adminlte/dist/img/image 7.png" alt="Street sign">
                <img src="adminlte/dist/img/image 8.png" alt="Street sign">
            </div>
            <div class="text-container">
                <h1>SEJARAH TERBENTUKNYA RW. 01 KELURAHAN KESATRIAN-KECAMATAN BLIMBING KOTA MALANG</h1>
                <p> Isikan Sejarahnyta yaaa....Karna Saya Tidak Tau</p>
                <h1><br></h1>
                <h1>RW 01 KELURAHAN KESATRIAN</h1>
                <p>Visi: <br>Terwujudnya RW Yang Maju, Mandiri, Sejahtera, Dan Berkelanjutan, Dengan Mengedepankan Semangat Gotong Royong, Kebersamaan, Dan Kepedulian Antar Warga.</p>
                <p>Misi:</p>
                <ul>
                    <li>Meningkatkan Kualitas Hidup Dan Kesejahteraan Warga:
                        <ul>
                            <li>Meningkatkan Akses Terhadap Layanan Kesehatan, Pendidikan, Dan Ekonomi.</li>
                            <li>Mewujudkan Lingkungan Yang Bersih, Sehat, Dan Aman.</li>
                            <li>Membangun Infrastruktur Yang Memadai Dan Berkualitas.</li>
                        </ul>
                    </li>
                    <li>Memperkuat Rasa Persatuan Dan Kesatuan Antar Warga:
                        <ul>
                            <li>Mengadakan Kegiatan Sosial Dan Budaya Yang Melibatkan Seluruh Warga.</li>
                            <li>Membangun Komunikasi Dan Interaksi Yang Positif Antar Warga.</li>
                            <li>Menyelesaikan Konflik Dan Permasalahan Antar Warga Dengan Musyawarah Mufakat.</li>
                        </ul>
                    </li>
                    <li>Mendorong Partisipasi Aktif Warga Dalam Pembangunan RW:
                        <ul>
                            <li>Memberikan Edukasi Dan Pelatihan Kepada Warga Tentang Berbagai Program Pembangunan.</li>
                            <li>Membentuk Kelompok-Kelompok Kerja (Pokja) Untuk Menangani Berbagai Bidang Pembangunan.</li>
                            <li>Memberikan Penghargaan Kepada Warga Yang Berpartisipasi Aktif Dalam Pembangunan RW.</li>
                        </ul>
                    </li>
                    <li>Menjaga Kelestarian Lingkungan Hidup:
                        <ul>
                            <li>Melaksanakan Program Penghijauan Dan Kebersihan Lingkungan.</li>
                            <li>Mengedukasi Warga Tentang Pentingnya Menjaga Kelestarian Lingkungan Hidup.</li>
                            <li>Memanfaatkan Sumber Daya Alam Secara Berkelanjutan.</li>
                        </ul>
                    </li>
                    <li>Mengembangkan Potensi Ekonomi Warga:
                        <ul>
                            <li>Memberikan Pelatihan Dan Pendampingan Kepada Warga Untuk Mengembangkan Usaha Kecil Menengah (UKM).</li>
                            <li>Membuka Akses Pasar Bagi Produk-Produk UKM Warga.</li>
                            <li>Menjalin Kerjasama Dengan Pihak-Pihak Terkait Untuk Pengembangan Ekonomi Warga.</li>
                        </ul>
                    </li>
                </ul>
                <p>Motto: Bersatu, Bergotong Royong</p>
            </div>
        </div>
    </div>
</div>

@endsection
