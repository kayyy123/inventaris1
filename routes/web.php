<?php

use App\Models\Peminjaman;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LayoutsController;
use App\Http\Controllers\PeminjamanController;

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
        Route::resource('beranda', LayoutsController::class);
    });
    Route::group(['middleware' => ['cekUserLogin:2']], function () {
        Route::resource('kasir', KasirController::class);
    });
});

// layouts
// Route::get('/barang/tabel_barang', [LayoutsController::class, 'tabel_barang']);

// barang
Route::get('/barang/tabel_barang', [BarangController::class, 'tabel_barang']);
Route::get('/barang/create', [BarangController::class, 'create']);
Route::post('/barang/store', [BarangController::class, 'store']);
Route::get('/barang/{id_barang}/edit', [BarangController::class, 'edit']);
Route::put('/barang/{id_barang}/', [BarangController::class, 'update']);
Route::delete('/barang/{id_barang}/', [BarangController::class, 'destroy']);

Route::get('/dashboard', function (){
    return view('layouts.master');      
});     
// Route::get('/dashboard/barang', function (){
//     return view('barang.tabel_barang');      
// });     
// Route::get('/dashboard', function (){
//     return view('layouts.master');      
// });     
// Route::get('/', function (){
//     return view('layouts.master');      
// });     

// peminjaman 
Route::get('/peminjaman/pinjam', [PeminjamanController::class, 'pinjam']);
Route::post('/barang/store1', [BarangController::class, 'store1']);