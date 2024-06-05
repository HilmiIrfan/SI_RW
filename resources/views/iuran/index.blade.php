@extends('Admin.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Iuran Warga</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover table-sm">
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
                    @foreach($iuran as $dues)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dues->user->nama ?? $dues->nama_warga }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal_iuran)->format('d F Y') }}</td>
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
        </div>
        <a href="{{ route('iuran.create') }}" class="btn btn-primary">Tambah Iuran Warga</a>
    </div>
@endsection

<style>
    /* Container Styles */
    .container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      overflow-x: auto; /* Enable horizontal scrolling if needed */
    }
    
    .container h1 {
    text-align: center; /* Center the heading text */
    }
  
    /* Heading Styles */
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
  
    /* Alert Styles */
    .alert {
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid transparent;
      border-radius: 4px;
      color: #155724;
      background-color: #d4edda;
      border-color: #c3e6cb;
      text-align: center;
    }
  
    /* Table Styles */
    .table-responsive {
      overflow-x: auto; /* Enable horizontal scrolling for the table */
    }
  
    .table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
  
    .table th,
    .table td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
  
    .table th {
      background-color: #f2f2f2;
      text-align: center;
    }
  
    .table tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }
  
    .table tbody tr:hover {
      background-color: #f1f1f1;
    }
  
    /* Button Styles */
    .btn {
      padding: 5px 10px;
      background-color: #28a745;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
      display: inline-block;
    }
  
    .btn:hover {
      background-color: #218838;
    }
  </style>