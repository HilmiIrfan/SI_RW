@extends('layout.template')

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
  <div class="card-body">
      <div class="container">
          <div class="image-container">
              <img src="adminlte/dist/img/image 6.png" alt="Street sign">
              <img src="adminlte/dist/img/image 7.png" alt="Street sign">
              <img src="adminlte/dist/img/image 8.png" alt="Street sign">
          </div>
          <div class="text-container">
            <h1>BERITA RW 01 KELURAHAN KESATRIAN</h1>
            <table class="table table-bordered table-stiped table-hover table-sm" id="table_agenda">
              <thead>
                <tr><th>Berita 1</th><th>Tanggal</th><th>Deskripsi</th></tr>
              </thead>
              <thead>
                <tr><th>Berita 2</th><th>Tanggal</th><th>Deskripsi</th></tr>
              </thead>
              <thead>
                <tr><th>Berita 3</th><th>Tanggal</th><th>Deskripsi</th></tr>
              </thead>
              <thead>
                <tr><th>Berita 4</th><th>Tanggal</th><th>Deskripsi</th></tr>
              </thead>
            </table>
          </div>
          <div class="text-container">
            <h1>AGENDA KEGIATAN RW 01 KELURAHAN KESATRIAN</h1>
            <table class="table table-bordered table-stiped table-hover table-sm" id="table_agenda">
              <thead>
                <tr><th>Agenda Kegiatan 1</th><th>Tanggal</th></tr>
              </thead>
              <thead>
                <tr><th>Agenda Kegiatan 2</th><th>Tanggal</th></tr>
              </thead>
              <thead>
                <tr><th>Agenda Kegiatan 3</th><th>Tanggal</th></tr>
              </thead>
              <thead>
                <tr><th>Agenda Kegiatan 4</th><th>Tanggal</th></tr>
              </thead>
            </table>
          </div>
      </div>
  </div>
</div>

@endsection
