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
                    <label class="col-1 control-label col-form-label">Tanggal Agenda</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="tanggal_agenda" name="tanggal_agenda" value="{{ old('tanggal_agenda') }}"
                            placeholder="Tanggal Agenda" required>
                        @error('tanggal_agenda')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Nama Agenda</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="nama_agenda" name="nama_agenda"
                            value="{{ old('nama_agenda') }}" placeholder="Nama Agenda" required>
                        @error('nama_agenda')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Detail Agenda</label>
                    <div class="col-11">
                        <textarea class="form-control" id="detail_agenda" name="detail_agenda" rows="3" required>{{ old('detail_agenda') }}</textarea>
                        @error('detail_agenda')
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
