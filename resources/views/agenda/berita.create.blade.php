@extends('layouts.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('agenda') }}" class="form-horizontal">
                @csrf
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Tanggal Berita</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="tanggal_berita" name="tanggal_berita" value="{{ old('tanggal_agenda') }}"
                            placeholder="Tanggal Berita" required>
                        @error('tanggal_berita')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Nama Berita</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="nama_berita" name="nama_berita"
                            value="{{ old('nama_berita') }}" placeholder="Nama Berita" required>
                        @error('nama_berita')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Detail Berita</label>
                    <div class="col-11">
                        <textarea class="form-control" id="detail_berita" name="detail_berita" rows="3" required>{{ old('detail_berita') }}</textarea>
                        @error('detail_berita')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-11">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a class="btn btn-sm btn-default ml-1" href="{{ url('barang') }}">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
