<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class LayoutsController extends Controller
{
    public function index()
    {
        return view('layouts.master');
    }
    
    public function tabel_barang()
    {
        $barang = Barang::all();
        // dd($barang);
        return view('barang.tabel_barang', compact(['barang']));
    }
}
