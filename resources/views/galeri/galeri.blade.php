@extends('layout.template')

@section('content')
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 10;
            padding: 10;
            background-color: #f0f0f0;
        }

        h1 {
            text-align: center;
            margin-top: 25px;
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 10px;
            padding: 10px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .gallery-item {
            border: 2px solid #ccc;
            overflow: hidden;
            position: relative;
        }

        .gallery-item img {
            display: block;
            max-width: 250px; 
            max-height: 250px; 
            width: auto;
            height: auto;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .fasilitas-image .description {
            padding: 5px; /* Jarak yang lebih besar */
            width: 150px; /* Lebar yang lebih besar */
        }
        .tanamankeluarga-image .description {
            padding: 5px; /* Jarak yang lebih besar */
            width: 150px; /* Lebar yang lebih besar */
        }
        .lapanganvoli-image .description {
            padding: 5px; /* Jarak yang lebih kecil */
            width: 150px; /* Lebar yang lebih kecil */
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .navbar {
            display: flex;
            align-items: center;
            background-color: #e0e0e0;
            padding: 10px;
            justify-content: space-between;
        }

        .navbar img {
            height: 30px; /* Atur tinggi logo sesuai keinginan Anda */
            width: auto;/* Lebar otomatis agar proporsinya tetap terjaga */
            
        }

        .navbar .menu {
            display: flex;
            flex-grow: 1;
            justify-content: space-around;
            margin-left: 20px;
            margin-right: 20px;
        }

        .navbar .menu a {
            text-decoration: none;
            color: #000;
            padding: 10px 15px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .navbar .menu a:hover,
        .navbar .menu .active {
            background-color: #5A9BD5;
            color: #fff;
        }

        .navbar .search {
            background-color: #5A9BD5;
            padding: 5px 15px;
            border-radius: 4px;
            color: #fff;
        }

        
    </style>
    <div class="navbar">
        <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="Logo">
        <div class="menu">
            <a href="#">HOME</a>
            <a href="#">INFORMASI</a>
            <a href="#">LAPORAN</a>
            <a href="#">AGENDA</a>
            <a href="#" class="active">GALERI</a>
            <a href="#">PENGURUS</a>
            <a href="#">BANSOS</a>
            <a href="#">LOGIN</a>
        </div>
        <div class="search">Search</div>
    </div>
    <br>
    <div class="gallery-container">
        <div class="gallery-item fasilitas-image">
            <img src="{{ asset('adminlte/dist/img/Fasilitas.jpg') }}" alt="Fasilitas">
            <div class="description">
                <p><b>Fasilitas</b></p>
                <p>Posyandu</p>
            </div>
        </div>
        <div class="gallery-item tanamankeluarga-image">
            <img src="{{ asset('adminlte/dist/img/tanamankeluarga.jpg') }}" alt="tanamankeluarga">
            <div class="description">
                <p><b>Fasilitas</b></p>
                <p>Tanaman Obat Keluarga</p>
            </div>
        </div>
        <div class="gallery-item lapanganvoli-image">
            <img src="{{ asset('adminlte/dist/img/lapanganVoli.jpg') }}" alt="lapanganVoli">
            <div class="description">
                <p><b>Fasilitas</b></p>
                <p>Lapangan Voli Bersama</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('adminlte/dist/img/jalansehat.jpg') }}" alt="jalansehat">
            <div class="description">
                <p><b>Kegiatan</b></p>
                <p>Jalan Sehat Agustus 2023</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('adminlte/dist/img/poskaming.jpg') }}" alt="poskaming">
            <div class="description">
                <p><b>Fasilitas</b></p>
                <p>Pos Kamling</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('adminlte/dist/img/kerjaBakti.jpg') }}" alt="kerjaBakti">
            <div class="description">
                <p><b>Kegiatan</b></p>
                <p>Kerja Bakti</p>
            </div>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('adminlte/dist/img/lomba.jpg') }}" alt="lomba">
            <div class="description">
                <p><b>Kegiatan</b></p>
                <p>Lomba 17 Agustus 2022</p>
            </div>
        </div>
        
    </div>

@endsection