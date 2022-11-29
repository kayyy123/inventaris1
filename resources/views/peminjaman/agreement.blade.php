@extends('layouts.master')

@section('content')

<div class="agree">
    <h2>PERSETUJUAN</h2>
    <div class="card">
        <div class="card-box">
            <div class="setuju">
                <h4>PERHATIAN!!!</h4>
                <p>
                    Jika anda telah menyetujui syarat-syarat tersebut pastikan tidak ada
                    data-data yang salah pada saat pengisiian forum!<br>
                    <br>
                    1.Perhatikan data-data yang ingin anda isi.<br>
                    <br>
                    2.Pastikan semuanya terisi agar tidak ada kesalahan pada saat
                    packing barang.<br>
                    <br>
                    3.Jika terjadi kerusakan pada saat pengiriman maka itu tanggung
                    jawab PT.<br>
                    <br>
                    4.Barang akan langsung dikirim apabila admin telah mengkonfirmasi pesanan yang telah anda buat.<br>
                    <br>
                    5.Apa bila ada kerusakan yang disebabkan oleh pihak yang memakai
                    pihak PT.Inventaris tidak akan bertanggung jawab terkecuali anda
                    ingin memperbaiki dan menerima persetujuannya.<br>
                </p>
                <div class="tombol">
                    <div class="kirim">
                        <a href="/peminjaman/search">SELANJUTNYA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection