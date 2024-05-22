@extends('layout.template')

@section('content')

<style>
  /* Hide image container */
  .card-header .image-container {
    display: none;
  }

  /* Adjust spacing for text container */
  .card-body .text-container {
    flex: 1;
  }

  /* Grid layout for agenda and berita sections */
  .card-body .container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(50%, 1fr));
    gap: 20px;
  }

  /* Style for individual berita section */
  .card-body .text-container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }

  .card-body .text-container img {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
  }

  .card-body .text-container table {
    width: 100%;
  }
</style>


<div class="card">
  <div class="card-body">
      <div class="container">
          <div class="text-container">
            <h1>BERITA RW 01 KELURAHAN KESATRIAN</h1>
            <table class="table table-bordered table-stiped table-hover table-sm" id="table_agenda">
              <thead>
                <tr>
                  <th>Berita 1</th>
                  <th>Tanggal</th>
                  <th>Deskripsi</th>
                </tr>
              </thead>
              <thead>
                <tr>
                  <th>Berita 2</th>
                  <th>Tanggal</th>
                  <th>Deskripsi</th>
                </tr>
              </thead>
              <thead>
                <tr>
                  <th>Berita 3</th>
                  <th>Tanggal</th>
                  <th>Deskripsi</th>
                </tr>
              </thead>
              <thead>
                <tr>
                  <th>Berita 4</th>
                  <th>Tanggal</th>
                  <th>Deskripsi</th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="text-container">
            <h1>AGENDA KEGIATAN RW 01 KELURAHAN KESATRIAN</h1>
            <table class="table table-bordered table-stiped table-hover table-sm" id="table_agenda">
              <thead>
                <tr>
                  <th>Agenda Kegiatan 1</th>
                  <th>Tanggal</th>
                </tr>
              </thead>
              <thead>
                <tr>
                  <th>Agenda Kegiatan 2</th>
                  <th>Tanggal</th>
                </tr>
              </thead>
              <thead>
                <tr>
                  <th>Agenda Kegiatan 3</th>
                  <th>Tanggal</th>
                </tr>
              </thead>
              <thead>
                <tr>
                  <th>Agenda Kegiatan 4</th>
                  <th>Tanggal</th>
                </tr>
              </thead>
            </table>
          </div>
      </div>
  </div>
</div>

@endsection
