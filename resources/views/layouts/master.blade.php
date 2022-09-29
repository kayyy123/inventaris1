<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets\css/dashboard.css">
    
    
</head>

<body>
    <div class="fContainer">
        <nav class="wrapper">
            <ul>
                <h2>PT INVENTARIS GELORA GEMILANG</h2>
            </ul>
        </nav>
        <div class="kotak">
            <div class="sidebar">
                <div class="logo">
                    
                </div>
                <ul>
                    <li><a href="/barang/tabel_barang">Barang</a></li>
                    <li><a href="/peminjaman/pinjam">Peminjaman</a></li>
                    <li><a href="/barang/table_barang">Pengembalian</a></li>
                    <li><a href="/barang/table_barang">Masukkan Barang</a></li>
                </ul>
            </div>
            
            @yield('content')
        </div>
    </div>
</body>

</html>