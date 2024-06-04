@extends('layout.template')

@section('content')

<style>
  /* Style for the container holding agenda and berita sections */
  .content-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
    margin-top: 20px;
  }

  /* Style for individual sections */
  .content-section {
    flex: 1;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
  }

  .content-section h2 {
    border-bottom: 3px solid #3498db;
    padding-bottom: 10px;
    margin-bottom: 20px;
    color: #3498db;
    font-family: 'Arial', sans-serif;
    font-weight: bold;
  }

  .content-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .content-section li {
    padding: 10px 0;
    border-bottom: 1px solid #ddd;
  }

  .content-section li:last-child {
    border-bottom: none;
  }

  .content-section li h3 {
    font-size: 1.2em;
    margin: 0;
    color: #333;
  }

  .content-section li p {
    margin: 5px 0;
    color: #555;
  }

  /* Button styles */
  .btn-more {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 20px;
    background-color: #3498db;
    color: #fff;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s;
  }

  .btn-more:hover {
    background-color: #2980b9;
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
    <a href="#" class="btn-more">Lihat Selengkapnya</a>
  </div>
  <div class="content-section">
    <h2>BERITA</h2>
    <ul>
      <li>
        <h3>Judul1</h3>
        <p><small>Tanggal1</small></p>
        <p>Deskripsi1</p>
      </li>
      <li>
        <h3>Judul2</h3>
        <p><small>Tanggal2</small></p>
        <p>Deskripsi2</p>
      </li>
      <li>
        <h3>Judul3</h3>
        <p><small>Tanggal3</small></p>
        <p>Deskripsi3</p>
      </li>
    </ul>
    <a href="#" class="btn-more">Lihat Selengkapnya</a>
  </div>
</div>

@endsection
