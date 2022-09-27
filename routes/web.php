<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PeminjamanController;
use App\Models\Peminjaman;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// barang
Route::get('/barang/tabel_barang', [BarangController::class, 'tabel_barang']);
Route::get('/barang/create', [BarangController::class, 'create']);
Route::post('/barang/store', [BarangController::class, 'store']);
Route::get('/barang/{id_barang}/edit', [BarangController::class, 'edit']);
Route::put('/barang/{id_barang}/', [BarangController::class, 'update']);
Route::delete('/barang/{id_barang}/', [BarangController::class, 'destroy']);

Route::get('/', function (){
    return view('layouts.master');      
});     

// peminjaman 
Route::get('/peminjaman/pinjam', [PeminjamanController::class, 'pinjam']);