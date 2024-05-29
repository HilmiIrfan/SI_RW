@extends('rt.template')

@section('content')
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
        </form>
    </div>
@endsection
