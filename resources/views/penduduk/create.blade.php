@extends('rt.template')

@section('content')
<style>
    .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
}

input[type="text"],
select {
    width: calc(100% - 10px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="text"]:focus,
select:focus {
    outline: none;
    border-color: #007bff;
}

.small {
    font-size: 12px;
}

.btn {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn:hover {
    background-color: #0056b3;
}

.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}

.alert-success {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}

.alert-success strong {
    font-weight: bold;
}
</style>
<div class="container">
    <h2>Form Data Input Penduduk</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('penduduk.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="no_kk">Nomor KK:</label>
            <select id="no_kk" name="no_kk">
                <option value="">Pilih Nomor KK</option>
                @foreach($existing_no_kk as $no_kk)
                    <option value="{{ $no_kk }}">{{ $no_kk }}</option>
                @endforeach
            </select>
            <small>atau</small>
            <input type="text" id="no_kk_manual" name="no_kk_manual" placeholder="Masukkan Nomor KK Manual">
        </div>
        <div class="form-group">
            <label for="nik">NIK:</label>
            <input type="text" id="nik" name="nik" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
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
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('penduduk.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
