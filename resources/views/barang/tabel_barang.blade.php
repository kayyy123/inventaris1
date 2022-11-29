@extends('layouts.master')

@section('content')

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

<div class="tabel-barang">
    <h2>TABEL BARANG</h2>
    <div class="cari">
        <form action="/barang/tabel_barang" method="GET">
            <label for="">Cari</label>
            <input type="search" name="search">
        </form>
        <div class="button">
            <a href="/barang/create">Tambah Data +</a>
        </div>
    </div>


    <div class="table">
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
                <td>{{$b->created_at->format('d M Y')}}</td>
                <td>
                    <div class="aksi">
                        <div class="button-edit">
                            <a href="/barang/{{$b->id_barang}}/edit">EDIT</a>
                        </div>
                        <div class="button-hapus">
                            <a href="/delete/{{$b->id_barang}}">HAPUS</a>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>     
    </div>
    <div class="paginate">
        {{ $barang->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>

@endsection