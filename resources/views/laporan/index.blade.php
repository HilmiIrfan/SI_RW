@extends('Admin.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Halo</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>ID Laporan</th>
                        <th>Nama Pelapor</th>
                        <th>No HP</th>
                        <th>Subject</th>
                        <th>Domisili RT</th>
                        <th>Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($laporan as $lap)
                        <tr>
                            <td>{{ $lap->id_laporan }}</td>
                            <td>{{ $lap->nama_pelapor }}</td>
                            <td>{{ $lap->no_hp }}</td>
                            <td>{{ $lap->subject }}</td>
                            <td>{{ $lap->domisili_rt }}</td>
                            <td>{{ $lap->pesan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
