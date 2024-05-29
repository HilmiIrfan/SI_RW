@extends('layouts.app')

@section('content')
<h1>Iuran Warga</h1>

@if (session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Warga</th>
            <th>Tanggal Iuran</th>
            <th>Nominal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($iuran as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->user->nama ?? $item->nama_warga }}</td>  <td>{{ $item->tanggal_iuran->format('d F Y') }}</td>
            <td>{{ number_format($item->nominal, 2) }}</td>
            <td>
                <a href="{{ route('iuran.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('iuran.destroy', $item->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this iuran?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('iuran.create') }}" class="btn btn-primary">Tambah Iuran Warga</a>

@endsection
