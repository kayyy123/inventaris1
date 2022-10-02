<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function pinjam()
    {
        return view('peminjaman.pinjam');
    }

    public function store1(Request $request)
    {
        // dd($request->except(['_token','submit']));
        Peminjaman::create($request->except(['_token', 'submit']));
        return redirect('/peminjaman/store1');
    }

}
