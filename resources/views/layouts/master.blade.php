<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. INVENTARIS GELORA GEMILANG</title>
    <link rel="stylesheet" href="/assets\css/dashboard.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

</head>

<body>
    <div class="fContainer">
        <nav class="wrapper">
            <div class="logo">

            </div>
            <div class="brand">
                <div class="name">PT INVENTARIS GELORA GEMILANG</div>
            </div>
            <ul class="navigation">
                <li><a href="body.html"><img src="/assets/icon/settings.png" alt=""></a></li>
            </ul>
        </nav>
        <div class="kotak">
            <div class="sidebar">
                <ul>
                    <div class="list">
                        <i class="barang"></i>
                        <li><a href="/barang/tabel_barang">BARANG</a></li>
                    </div>
                    <div class="list">
                        <i class="pinjam"></i>
                        <li><a href="/peminjaman/agremeent">PEMINJAMAN</a></li>
                    </div>
                    <div class="list">
                        <i class="return"></i>
                        <li><a href="/pengembalian/return">PENGEMBALIAN</a></li>
                    </div>
                    <div class="list">
                        <i class="laporan"></i>
                        <li><a href="/laporan">LAPORAN</a></li>
                    </div>
                </ul>
                <div class="logout">
                    <i class="logout"></i>
                    <li><a href="/logout">LOGOUT</a></li>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</body>

</html>