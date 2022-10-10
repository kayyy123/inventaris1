@extends('layouts.master')

@section('content')

<div class="create">
    <h2>TAMBAH BARANG</h2>

    <form action="/barang/store" method="POST">
        @csrf
        <input type="text" name="nama_barang" placeholder="Masukan Nama Barang"><br>
        <select name="katagori">
            <option value="">Pilih Katagori Barang</option>
            <option value="laptop">Laptop</option>
            <option value="led_tv">LED TV</option>
            <option value="infocus">Infocus</option>
            <option value="printer">Printer</option>
        </select><br>
        <input type="text" name="quantity" placeholder="Masukan Quantity"><br>
        <input type="text" name="asal_barang" placeholder="Masukan Asal Barang"><br>
        <input type="text" name="waktu" placeholder="Masukan Waktu"><br>
        <button type="submit" name="submit">SIMPAN</button>
    </form>
</div>

@endsection