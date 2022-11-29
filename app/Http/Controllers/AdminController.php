<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('layouts.master');
    }
    
    public function tabel_barang(Request $request)
    {
        $barang = Barang::paginate(5);
        // dd($barang);
        $barang = Barang::where('nama_barang', 'LIKE', '%' . $request->search . '%')->paginate(5);
        return view('barang.tabel_barang', compact(['barang']));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        Barang::create($request->except(['_token', 'submit']));
        return redirect('barang/tabel_barang');
    }

    public function edit($id_barang)
    {
        //  dd($id_barang);
        $barang = Barang::find($id_barang);
        //  dd($barang);
        return view('barang.edit', compact('barang'));
    }

    public function update($id_barang, Request $request)
    {
        $barang = Barang::find($id_barang);
        $barang->update($request->except(['_token', 'submit']));
        return redirect()->route('tabel_barang')->with('success', "Data Berhasil Di Hapus");
    }

    public function delete($id_barang)
    {
        $barang = Barang::find($id_barang);
        $barang->delete();
        return redirect()->route('tabel_barang')->with('success', 'Data Berhasil Di Hapus');
    }
    public function search(Request $request)
    {
        $barang = Barang::where('nama_barang', 'LIKE', '%' . $request->search . '%')->paginate(5);

        $barang = Barang::paginate(5);
        return view('peminjaman.search', compact(['barang']));
    }

    public function pilih($id_barang)
    {
        //  dd($id_barang);
        $barang = Barang::find($id_barang);
        //  dd($barang);
        return view('peminjaman.pinjam', compact('barang'));
    }

    public function progres(Request $request)
    {
        Peminjaman::create($request->except(['_token', 'submit']));
        // dd($request);
        return redirect('peminjaman/agremeent');
    }

    public function agreement()
    {
        return view('peminjaman.agreement');
    }

    public function laporan()
    {
        return view('laporan.report');
    }

    public function return()
    {
        return view('pengembalian.return');
    }
}
