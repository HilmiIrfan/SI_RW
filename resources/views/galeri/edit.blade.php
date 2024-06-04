@extends('layout.template')

@section('content')

<div class="container">
    <h2>Edit Gambar Galeri</h2>

    <form action="{{ route('galeriadmin.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@endsection
