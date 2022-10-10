@extends('layouts.master')

@section('content')


<div class="tabel-barang">
    <h2>TABEL BARANG</h2>
    <div class="button">
        <a href="/barang/create">Tambah</a>
    </div>
    <div class="tabel">
        <table border="2">
            <tr>
                <th>Nama Barang</th>
                <th>Katagori</th>
                <th>Quantity</th>
                <th>Asal Barang</th>
                <th>Waktu</th>
                <th>AKSI</th>
            </tr>
            @foreach($barang as $b)
            <tr>
                <td>{{$b->nama_barang}}</td>
                <td>{{$b->katagori}}</td>
                <td>{{$b->quantity}} unit</td>
                <td>{{$b->asal_barang}}</td>
                <td>{{$b->waktu}}</td>
                <td>
                    <div class="button-edit">
                        <a href="/barang/{{$b->id_barang}}/edit">EDIT</a>
                    </div>
                    <form action="/barang/{{$b->id_barang}}/" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="HAPUS">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection