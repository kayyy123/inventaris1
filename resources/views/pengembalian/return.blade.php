@extends('layouts.master')

@section('content')


<div class="create">
    <h2>Pengembalian</h2>

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
        <input type="number" name="quantity" placeholder="Masukan Quantity"><br>
        <button type="submit" name="submit">SIMPAN</button>
    </form>
</div>



@endsection