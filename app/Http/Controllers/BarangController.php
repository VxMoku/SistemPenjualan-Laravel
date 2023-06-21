<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::get();
        return view('barang.index', ['barang'=>$barang]);
    }

    public function tambah()
    {
        $kategori = Kategori::get();
        return view('barang.form',['kategori'=>$kategori]);
    }

    public function simpan(Request $request)
    {
        $barang = [
            'kd_barang'=>$request->kd_barang,
            'nama_barang'=>$request->nama_barang,
            'id_kategori'=>$request->id_kategori,
            'jumlah_barang'=>$request->jumlah_barang,
            'harga_barang'=>$request->harga_barang,
        ];

        Barang::create($barang);
        return redirect()->route('barang');
    }
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        $kategori = Kategori::get();
        return view('barang.form',['barang' => $barang, 'kategori' => $kategori]);
    }
    public function update($id, Request $request)
    {
        $barang = [
            'kd_barang'=>$request->kd_barang,
            'nama_barang'=>$request->nama_barang,
            'id_kategori'=>$request->id_kategori,
            'jumlah_barang'=>$request->jumlah_barang,
            'harga_barang'=>$request->harga_barang,
        ];

        Barang::find($id)->update($barang);
        return redirect()->route('barang');
    }
    public function hapus($id)
    {
        Barang::find($id)->delete();
        return redirect()->route('barang');
    }
}