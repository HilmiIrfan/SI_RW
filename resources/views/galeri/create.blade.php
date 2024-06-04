@extends('layout.template')

@section('content')

<div class="container">
    <h2 class="mb-4">Tambah Gambar Galeri</h2>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('galeriadmin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Pilih Gambar</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" onchange="updateFileName(this)">
                        <label class="custom-file-label" for="image">Pilih file gambar...</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>
</div>

<script>
    // Fungsi untuk memperbarui label input file dengan nama file yang dipilih
    function updateFileName(input) {
        var fileName = input.files[0].name;
        var label = input.nextElementSibling;
        label.innerHTML = fileName;
    }
</script>

@endsection
