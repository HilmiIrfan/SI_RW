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
                    <label class="col-1 control-label col-form-label">No KK</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="noKK" name="noKK" value="{{ old('noKK') }}"
                            placeholder="No KK" required>
                        @error('noKK')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">NIK</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="NIK" name="NIK" value="{{ old('NIK') }}"
                            placeholder="NIK" required>
                        @error('NIK')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Nama</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}"
                            placeholder="Nama" required>
                        @error('nama')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Alamat</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}"
                            placeholder="Alamat" required>
                        @error('alamat')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Nomor Telepon</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="no_telepon" name="no_telepon"
                            value="{{ old('no_telepon') }}" placeholder="Nomor Telepon" required>
                        @error('no_telepon')
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
