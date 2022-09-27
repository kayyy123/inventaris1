@extends('layouts.master')

@section('content')
<h2>PEMINJAMAN</h2>

<form action="#" method="POST">
    @csrf
    <input type="text" name="nama_barang" placeholder="Masukan Nama Barang"><br>
    <input type="text" name="divis" placeholder="Masukan Nama Divisi"><br>
    <select name="katagori">
        <option value="">Pilih Katagori Barang</option>
        <option value="laptop">Laptop</option>
        <option value="led_tv">LED TV</option>
        <option value="infocus">Infocus</option>
        <option value="printer">Printer</option>
    </select><br>
    <input type="text" name="quantity" placeholder="Masukan Quantity"><br>
    <input type="submit" name="submit" value="kirim">
</form>

@endsection