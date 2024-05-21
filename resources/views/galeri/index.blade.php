@extends('layout.template')

@section('content')
    <div class="container">
        <h2>Dahsboard</h2>
        {{-- <h1>Create Gallery</h1>
        <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form> --}}
    </div>
@endsection
