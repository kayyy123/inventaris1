<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function kembali()
    {
        return view('pengembalian.kembali');
    }
}
