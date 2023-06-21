@extends('layouts.app')

@section('title','Data Barang')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">  
        <h6 class="m-0 font-weight-bold text-primary"></h6>
    </div>
    <div class="card-body">
        @if (auth()->user()->level == 'Admin')
        <a href="{{ route('barang.tambah') }}" class="btn btn-dark mb-3">Tambah Barang</a>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Kategori Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Harga Barang</th>
                        @if(auth()->user()->level == 'Admin')
                        <th>Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($barang as $row)
                    <tr>
                        <th>{{  $no++ }}</th>
                        <td>{{ $row->kd_barang }}</td>
                        <td>{{ $row->nama_barang }}</td>
                        <td>{{ $row->kategori->nama}}</td>
                        <td>{{ $row->jumlah_barang }}</td>
                        <td>{{ $row->harga_barang }}</td>
                        @if(auth()->user()->level == 'Admin')
                        <td>
                            <a href="{{ route('barang.edit', $row->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('barang.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection