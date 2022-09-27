<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function tabel_barang()
    {
        $barang = Barang::all();
        // dd($barang);
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
        return redirect('barang/tabel_barang');
    }

    public function destroy($id_barang)
    {
        $barang = Barang::find($id_barang);
        $barang->delete();
        return redirect('barang/tabel_barang');
    }
}
