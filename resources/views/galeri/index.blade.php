@extends('layout.template')

@section('content')

<style>
  /* Styles untuk Galeri */
  .gallery-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
  }

  .gallery-item {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .gallery-item img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.3s ease-in-out;
  }

  .gallery-item:hover img {
    transform: scale(1.1);
  }
</style>

<div class="container-fluid">
  <div class="card card-primary">
    <div class="card-header">
      <h4 class="card-title">Galeri RW 01 Kesatrian Dalam</h4>
    </div>
    <div class="card-body">
        <a href="{{ route('galeri.create') }}" class="btn btn-success mb-3">Tambah Gambar</a>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
      <div class="gallery-container">
        <div class="gallery-item">
          <a href="{{ asset('adminlte/dist/img/Fasilitas.jpg') }}" data-toggle="lightbox" data-title="sample 1 - Fasilitas">
            <img src="{{ asset('adminlte/dist/img/Fasilitas.jpg') }}" alt="Fasilitas sample" />
          </a>
        </div>
        <div class="gallery-item">
          <a href="{{ asset('adminlte/dist/img/poskaming.jpg') }}" data-toggle="lightbox" data-title="Fasilitas - black">
            <img src="{{ asset('adminlte/dist/img/poskaming.jpg') }}" alt="Fasilitas sample" />
          </a>
        </div>
        <div class="gallery-item">
          <a href="{{ asset('adminlte/dist/img/lomba.jpg') }}" data-toggle="lightbox" data-title="sample 3 - red">
            <img src="{{ asset('adminlte/dist/img/lomba.jpg') }}" class="img-fluid mb-2" alt="red sample" />
          </a>            
        </div>
        <div class="gallery-item">
          <a href="{{ asset('adminlte/dist/img/jalansehat.jpg') }}" data-toggle="lightbox" data-title="sample 4 - red">
            <img src="{{ asset('adminlte/dist/img/jalansehat.jpg') }}" class="img-fluid mb-2" alt="red sample" />
          </a>
        </div>
        <div class="gallery-item">
          <a href="{{ asset('adminlte/dist/img/tanamankeluarga.jpg') }}" data-toggle="lightbox" data-title="sample 5 - black">
            <img src="{{ asset('adminlte/dist/img/tanamankeluarga.jpg') }}" class="img-fluid mb-2" alt="black sample" />
          </a>
        </div>
        <div class="gallery-item">
          <a href="{{ asset('adminlte/dist/img/lapanganVoli.jpg') }}" data-toggle="lightbox" data-title="sample 6 - white">
            <img src="{{ asset('adminlte/dist/img/lapanganVoli.jpg') }}" class="img-fluid mb-2" alt="white sample" />
          </a>
        </div>
        <div class="gallery-item">
          <a href="{{ asset('adminlte/dist/img/jalanKesatrian.png') }}" data-toggle="lightbox" data-title="sample 7 - white">
            <img src="{{ asset('adminlte/dist/img/jalanKesatrian.png') }}" class="img-fluid mb-2" alt="white sample" />
          </a>
        </div>
        <div class="gallery-item">
          <a href="{{ asset('adminlte/dist/img/tanamankeluarga.jpg') }}" data-toggle="lightbox" data-title="sample 5 - black">
            <img src="{{ asset('adminlte/dist/img/tanamankeluarga.jpg') }}" class="img-fluid mb-2" alt="black sample" />
          </a>
        </div>
        <div class="gallery-item">
          <a href="{{ asset('adminlte/dist/img/kerjaBakti.jpg') }}" data-toggle="lightbox" data-title="Fasilitas - black">
            <img src="{{ asset('adminlte/dist/img/kerjaBakti.jpg') }}" alt="Fasilitas sample" />
          </a>
        </div>
        <div class="gallery-item">
          <a href="{{ asset('adminlte/dist/img/Fasilitas.jpg') }}" data-toggle="lightbox" data-title="sample 1 - Fasilitas">
            <img src="{{ asset('adminlte/dist/img/Fasilitas.jpg') }}" alt="Fasilitas sample" />
          </a>
        </div>
        <div class="gallery-item">
          <a href="{{ asset('adminlte/dist/img/lomba.jpg') }}" data-toggle="lightbox" data-title="sample 12 - black">
            <img src="{{ asset('adminlte/dist/img/lomba.jpg') }}" class="img-fluid mb-2" alt="black sample" />
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
