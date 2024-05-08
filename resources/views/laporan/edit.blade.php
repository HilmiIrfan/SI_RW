@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            @empty($laporan)
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5> Data yang Anda cari tidak ditemukan.
                </div>
                <a href="{{ url('/laporan') }}" class="btn btn-sm btn-default mt- 2">Kembali</a>
            @else
                <form method="POST" action="{{ url('/laporan/' . $laporan->laporan_id) }}" class="form-horizontal">
                    @csrf
                    {!! method_field('PUT') !!}
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">ID Laporan</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="id_laporan" name="id_laporan"
                                value="{{ old('id_laporan', $laporan->id_laporan) }}" required>
                            @error('id_laporan')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Nama Pelapor</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor"
                                value="{{ old('nama_pelapor', $laporan->nama_pelapor) }}" required>
                            @error('nama_pelapor')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">No HP</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="no_hp" name="no_hp"
                                value="{{ old('no_hp', $laporan->no_hp) }}" required>
                            @error('no_hp')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Subject</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="subject" name="subject"
                                value="{{ old('subject', $laporan->subject) }}" required>
                            @error('subject')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Domisili RT</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="domisili_rt" name="domisili_rt"
                                value="{{ old('domisili_rt', $laporan->domisili_rt) }}" required>
                            @error('domisili_rt')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label"></label>
                        <div class="col-11">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <a class="btn btn-sm btn-default ml-1" href="{{ url('laporan') }}">Kembali</a>
                        </div>
                    </div>
                </form>
            @endempty
        </div>
    </div>
@endsection

@push('css')
@endpush
@push('js')
@endpush
