<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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

Route::get('hello', function () {
    return 'Hello World';
});

Route::get('belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::get('mahasiswa/fasilkom/anto', function () {
    echo '<h2 style="text-align:center">Welcome Anto</h2>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Tampilkan data mahasiswa yang bernama $nama";
});

Route::get(
    '/produk/{merk?}/{tipe?}',
    function ($merk = 'sharp', $tipe = '4T-C50CK1I') {
        return "Cek Sisa stok barang $merk $tipe";
    }
);
