@extends('Admin.template')

@section('content')

<style>
  /* Style for the container holding agenda and berita sections */
  .content-container {
    display: flex;
    justify-content: space-between;
    gap: 20px;
  }

  /* Style for individual sections */
  .content-section {
    flex: 1;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
  }

  .content-section h2 {
    border-bottom: 2px solid #ccc;
    padding-bottom: 10px;
    margin-bottom: 20px;
  }

  .content-section ul {
    list-style: none;
    padding: 0;
  }

  .content-section li {
    padding: 10px 0;
    border-bottom: 1px solid #ccc;
  }

  .content-section li:last-child {
    border-bottom: none;
  }
</style>



<div class="content-container">
  <div class="content-section">
    <h2>AGENDA</h2>
    <ul>
      <li>Agenda1 - Tanggal1</li>
      <li>Agenda2 - Tanggal2</li>
      <li>Agenda3 - Tanggal3</li>
    </ul>
  </div>
  <div class="content-section">
    <h2>BERITA</h2>
    <ul>
      <li>
        <h3>Judul1</h3>
        <p>Tanggal1</p>
        <p>Deskripsi1</p>
      </li>
      <li>
        <h3>Judul2</h3>
        <p>Tanggal2</p>
        <p>Deskripsi2</p>
      </li>
      <li>
        <h3>Judul3</h3>
        <p>Tanggal3</p>
        <p>Deskripsi3</p>
      </li>
    </ul>
  </div>
</div>

@endsection