@extends('layouts.master')

@section('content')

<div class="search">
    <div class="search-box">
        <form action="/peminjaman/search" method="GET">
            <i class="cari"></i>
            <input type="search" name="search" placeholder="Cari Bedasarkan Nama Barang Atau Katagori">
        </form>
    </div>
    <div class="table">
        <table border="2">

            <tr>
                <th>Nama Barang</th>
                <th>Katagori</th>
                <th>Quantity</th>
                <th>AKSI</th>
            </tr>
            @foreach($barang as $b)
            <tr>
                <td>{{$b->nama_barang}}</td>
                <td>{{$b->katagori}}</td>
                <td>{{$b->quantity}} unit</td>
                <td>
                    <div class="button-edit">
                        <a href="/peminjaman/{{$b->id_barang}}/pilih">PILIH</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
        {{ $barang->links() }}
    </div>
</div>

</div>



@endsection