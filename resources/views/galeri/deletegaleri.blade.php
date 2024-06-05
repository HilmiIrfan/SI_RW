@extends('delete.template')

@section('content')
    <div class="container">
        <h2 class="mb-4">Hapus Gambar Galeri</h2>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('galeriadmin.delete') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                        <label for="image_id">Pilih Gambar Yang Ingin Dihapus</label>
                        <select class="form-control" id="image_id" name="image_id">
                            @foreach ($images as $image)
                                <option value="{{ $image->id }}">{{ $image->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
@endsection