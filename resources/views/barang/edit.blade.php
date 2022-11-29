@extends('layouts.master')

@section('content')

<div class="edit">
    <h2>EDIT BARANG</h2>
    <form action="/barang/{{$barang->id_barang}}" method="POST">
        @csrf
        <div class="edit-box">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" placeholder="Masukan Nama Barang" value="{{$barang->nama_barang}}">
        </div>
        <div class="edit-box">
            <label>Katagori Barang</label>
            <select name="katagori">
                <option value="">Pilih Katagori Barang</option>
                <option value="laptop" @if($barang->katagori == "laptop") selected @endif>Laptop</option>
                <option value="led_tv" @if($barang->katagori == "led_tv") selected @endif>LED TV</option>
                <option value="infocus" @if($barang->katagori == "infocus") selected @endif>Infocus</option>
                <option value="printer" @if($barang->katagori == "printer") selected @endif>Printer</option>
            </select>
        </div>
        <div class="edit-box">
            <label>Jumlah Barang</label>
            <input type="text" name="quantity" placeholder="Masukan Quantity" value="{{$barang->quantity}}"><br>
        </div>
        <div class="edit-box">
            <label>Asal Barang</label>
            <input type="text" name="asal_barang" placeholder="Masukan Asal Barang" value="{{$barang->asal_barang}}"><br>
        </div>
        <div class="edit-button">
            <div class="save-button">
                <input type="submit" name="submit" value="SIMPAN">
            </div>
            <div class="back-button">
                <a href="/barang/tabel_barang">Kembali</a>
            </div>
        </div>
    </form>

</div>

@endsection