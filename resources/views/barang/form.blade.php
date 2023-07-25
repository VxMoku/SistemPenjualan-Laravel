@extends('layouts.app')

@section('title','Form Tambah Barang')

@section('content')
<form action="{{ isset($barang) ?route('barang.tambah.update', $barang->id): route('barang.tambah.simpan') }}" method="post">
    @csrf
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="kd_barang">Kode Barang</label>
                    <input type="text" class="form-control" id="kd_barang" name="kd_barang" value="{{ isset($barang) ? $barang->kd_barang : '' }}">
            </div>
                <div class="form-group">
                    <label for="kd_barang">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ isset($barang) ? $barang->nama_barang : '' }}">
                </div>
                <div class="form-group">
                    <label for="id_kategori">Kategori Barang</label>
                    <select name="id_kategori" id="id_kategori" class="custom-select">
                        <option value="a" selected="selected" disabled hidden> Pilih Kategori </option>
                        @foreach($kategori as $row)
                            <option value="{{ $row->id }}" {{ isset($barang) ? ($barang->id_kategori == $row->id ? 'selected' : '') : ''}}>{{ $row->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="kd_barang">Jumlah Barang</label>
                    <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang" value="{{ isset($barang) ? $barang->jumlah_barang : '' }}">
                </div>
                <div class="form-group">
                    <label for="kd_barang">Harga Barang</label>
                    <input type="text" class="form-control" id="harga_barang" name="harga_barang" value="{{ isset($barang) ? $barang->harga_barang : '' }}">
                </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-dark">Simpan</button>
            </div>
        </div>
    </div>
</div> 
</form>

@endsection