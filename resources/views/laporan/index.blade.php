@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('laporan/create') }}">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <table class="table table-bordered table-striped table-hover table-sm" id="table_laporan">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID Laporan</th>
                        <th>Nama Pelapor</th>
                        <th>No HP</th>
                        <th>Subject</th>
                        <th>Domisili RT</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('css')
@endpush
@push('js')
    <script>
        $(document).ready(function() {
            var dataLaporan = $('#table_laporan').DataTable({
                serverSide: true,
                ajax: {
                    "url": "{{ url('laporan/list') }}",
                    "dataType": "json",
                    "type": "POST",
                },
                columns: [{
                    data: "DT_RowIndex",
                    className: "text-center",
                    orderable: false,
                    searchable: false
                }, {
                    data: "id_laporan",
                    className: "",
                    orderable: true,
                    searchable: true
                }, {
                    data: "nama_pelapor",
                    className: "",
                    orderable: true,
                    searchable: true
                }, {
                    data: "no_hp",
                    className: "",
                    orderable: true,
                    searchable: true
                }, {
                    data: "subject",
                    className: "",
                    orderable: true,
                    searchable: true
                }, {
                    data: "domisili_rt",
                    className: "",
                    orderable: true,
                    searchable: true
                }, {
                    data: "pesan",
                    className: "",
                    orderable: true,
                    searchable: true
                }, {
                    data: "aksi",
                    className: "",
                    orderable: false,
                    searchable: false
                }]
            });
        });
    </script>
@endpush
