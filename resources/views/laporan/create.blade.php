@extends('layouts.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('laporan') }}" class="form-horizontal">
                @csrf
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Nama Pelapor</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor"
                            value="{{ old('nama_pelapor') }}" placeholder="Nama Pelapor" required>
                        @error('nama_pelapor')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Nomor HP</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp') }}"
                            placeholder="Nomor HP" required>
                        @error('no_hp')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Subjek</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="subject" name="subject"
                            value="{{ old('subject') }}" placeholder="Subjek" required>
                        @error('subject')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Domisili RT</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="domisili_rt" name="domisili_rt"
                            value="{{ old('domisili_rt') }}" placeholder="Domisili RT" required>
                        @error('domisili_rt')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Pesan</label>
                    <div class="col-11">
                        <textarea class="form-control" id="pesan" name="pesan" rows="3" required>{{ old('pesan') }}</textarea>
                        @error('pesan')
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
