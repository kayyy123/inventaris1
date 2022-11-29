<?php

use App\Http\Controllers\AdminController;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LayoutsController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;

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

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout','logout');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekUserLogin:1']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cekUserLogin:2']], function () {
        Route::resource('kasir', KasirController::class);
    });
});

// barang
Route::get('/barang/tabel_barang', [AdminController::class, 'tabel_barang'])->name('tabel_barang');
Route::get('/barang/create', [AdminController::class, 'create'])->name('create');
Route::post('/barang/store', [AdminController::class, 'store'])->name('store');
Route::get('/barang/{id_barang}/edit', [AdminController::class, 'edit'])->name('edit');
Route::post('/barang/{id_barang}/', [AdminController::class, 'update'])->name('update');
Route::get('/delete/{id_barang}', [AdminController::class, 'delete'])->name('delete');

  


// peminjaman 
Route::get('/peminjaman/search', [AdminController::class, 'search'])->name('search');
Route::get('/peminjaman/{id_barang}/pilih', [AdminController::class, 'pilih'])->name('pilih');
Route::post('/peminjaman/{id_barang}/progres', [AdminController::class, 'progres'])->name('progres');
Route::get('/peminjaman/agremeent', [AdminController::class, 'agreement'])->name('agreement');

Route::get('/pengembalian/return', [AdminController::class, 'return'])->name('return');

Route::get('/laporan', [AdminController::class, 'laporan'])->name('laporan');
