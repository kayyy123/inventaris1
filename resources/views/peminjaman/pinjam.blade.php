@extends('layouts.master')

@section('content')

<div class="pinjam">
<h2>PEMINJAMAN</h2>

<form action="/peminjaman/store1" method="POST">
    @csrf
    <div class="input-box">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" placeholder="Masukan Nama Barang">
    </div>
    <div class="input-box">
        <label>Divisi</label>
        <input type="text" name="divisi" placeholder="Masukan Nama Divisi">
    </div>
    <div class="select-box">
    <label>Katagori</label>
    <select name="katagori">
            <option value="">Pilih Katagori Barang</option>
            <option value="laptop">Laptop</option>
            <option value="led_tv">LED TV</option>
            <option value="infocus">Infocus</option>
            <option value="printer">Printer</option>
        </select>
    </div>
    <div class="input-box">
        <label>Quantity</label>
        <input type="text" name="quantity" placeholder="Masukan Quantity">
    </div>
    <div class="sumbit">
        <input type="submit" name="submit" value="kirim">
    </div>
</form>
</div>


@endsection