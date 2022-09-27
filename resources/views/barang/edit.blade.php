@extends('layouts.master')

@section('content')

<div class="container">
    
</div>
<h2>EDIT BARANG</h2>
<form action="/barang/{{$barang->id_barang}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="nama_barang" placeholder="Masukan Nama Barang" value="{{$barang->nama_barang}}"><br>
    <select name="katagori">
        <option value="">Pilih Katagori Barang</option>
        <option value="laptop" @if($barang->katagori == "laptop") selected @endif>Laptop</option>
        <option value="led_tv" @if($barang->katagori == "led_tv") selected @endif>LED TV</option>
        <option value="infocus" @if($barang->katagori == "infocus") selected @endif>Infocus</option>
        <option value="printer" @if($barang->katagori == "printer") selected @endif>Printer</option>
    </select><br>
    <input type="text" name="quantity" placeholder="Masukan Quantity" value="{{$barang->quantity}}"><br>
    <input type="text" name="asal_barang" placeholder="Masukan Asal Barang" value="{{$barang->asal_barang}}"><br>
    <input type="text" name="waktu" placeholder="Masukan Waktu" value="{{$barang->waktu}}"><br>
    <input type="submit" name="submit" value="simpan">
</form>

@endsection