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

Route::get('/mahasiswa', function () {
    $name =
        [
            "Ari Safari",
            "Syaefiatul Arfah",
            "Arsya Kalani Ibrahim",
            "Arsya Bilfaqih Ismail",
            "Wahyu Pangesti Utami"
        ];
    return view('universitas.mahasiswa', ['family' => $name]);
});

Route::get('/mahasiswa/{nama}/{umur}/{kota}', function ($nama, $umur, $kota) {
    return view('universitas.datasiswa')
        ->with("vnama", $nama)
        ->with("vumur", $umur)
        ->with("vkota", $kota);
});
