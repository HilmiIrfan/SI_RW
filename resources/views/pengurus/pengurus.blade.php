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
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
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
            max-width: 270px; 
            max-height: 270px; 
            width: auto;
            height: auto;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .rt01-image .description {
            padding: 5px; /* Jarak yang lebih besar */
            width: 150px; /* Lebar yang lebih besar */
        }
        .rt02-image .description {
            padding: 5px; /* Jarak yang lebih besar */
            width: 150px; /* Lebar yang lebih besar */
        }
        .rt03-image .description {
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
        .curved-frame {
  overflow: hidden; /* This hides overflowing content  */
  border-radius: 50%; /* Creates a circular shape */
  width: 200px; /* Adjust width as needed */
  height: 200px; /* Adjust height as needed */
  position: relative; /* Allows positioning of child element */
}

.curved-frame img {
  border-radius: inherit; /* Inherits rounded corners from parent */
  position: absolute; /* Positions image on top of the frame */
  top: 50%; /* Centers image vertically */
  left: 50%; /* Centers image horizontally */
  transform: translate(-50%, -50%); /* Adjusts positioning further  */
  width: 100%; /* Ensures image fills the frame */
}


        
    </style>

    
    <br>
    <div class="gallery-container">
        <div class="gallery-item rt01-image">
            <img src="{{ asset('adminlte/dist/img/RT01.jpg') }}" alt="rt01">
            <div class="description">
                <p><b>Ketua RT 01</b></p>
                <p>Bambang Sumono</p>
                <p>Jl. Kesatrian Dalam K24</p>
                <p>+62 822-3043-8150</p>
            </div>
        </div>
        <div class="gallery-item rt02-image">
            <img src="{{ asset('adminlte/dist/img/RT02.jpg') }}" alt="rt02">
            <div class="description">
                <p><b>Ketua RT 02</b></p>
                <p>Joko Anwar</p>
                <p>Jl. Kesatrian Dalam K24</p>
                <p>+62 822-3043-8150</p>
            </div>
        </div>
        <div class="gallery-item rt03-image">
            <img src="{{ asset('adminlte/dist/img/RT03.jpg') }}" alt="rt03">
            <div class="description">
                <p><b>Ketua RT 03</b></p>
                <p>Bambang Sumono</p>
                <p>Jl. Kesatrian Dalam K24</p>
                <p>+62 822-3043-8150</p>
            </div>
        </div>
        <div class="gallery-item rt05-image">
            <img src="{{ asset('adminlte/dist/img/RT05.jpg') }}" alt="rt05">
            <div class="description">
                <p><b>Ketua RT 04</b></p>
                <p>Bambang Sumono</p>
                <p>Jl. Kesatrian Dalam K24</p>
                <p>+62 822-3043-8150</p>
            </div>
        </div>
        <div class="gallery-item rt02-image">
            <img src="{{ asset('adminlte/dist/img/RT02.jpg') }}" alt="rt02">
            <div class="description">
                <p><b>Ketua RT 05</b></p>
                <p>Joko Anwar</p>
                <p>Jl. Kesatrian Dalam K24</p>
                <p>+62 822-3043-8150</p>
            </div>
        </div>
        <div class="gallery-item rt03-image">
            <img src="{{ asset('adminlte/dist/img/RT03.jpg') }}" alt="rt03">
            <div class="description">
                <p><b>Ketua RT 06</b></p>
                <p>Bambang Sumono</p>
                <p>Jl. Kesatrian Dalam K24</p>
                <p>+62 822-3043-8150</p>
            </div>
        </div>
        <div class="gallery-item rt02-image">
            <img src="{{ asset('adminlte/dist/img/RT02.jpg') }}" alt="rt02">
            <div class="description">
                <p><b>Ketua RT 07</b></p>
                <p>Joko Anwar</p>
                <p>Jl. Kesatrian Dalam K24</p>
                <p>+62 822-3043-8150</p>
            </div>
        </div>
        <div class="gallery-item rt02-image">
            <img src="{{ asset('adminlte/dist/img/RT02.jpg') }}" alt="rt02">
            <div class="description">
                <p><b>Ketua RT 08</b></p>
                <p>Joko Anwar</p>
                <p>Jl. Kesatrian Dalam K24</p>
                <p>+62 822-3043-8150</p>
            </div>
        </div>
        <div class="gallery-item rt05-image">
            <img src="{{ asset('adminlte/dist/img/RT05.jpg') }}" alt="rt05">
            <div class="description">
                <p><b>Ketua RT 09</b></p>
                <p>Bambang Sumono</p>
                <p>Jl. Kesatrian Dalam K24</p>
                <p>+62 822-3043-8150</p>
            </div>
        </div>
        
    </div>

@endsection