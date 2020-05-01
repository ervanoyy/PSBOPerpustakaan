<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/buku', function () {
    return view('buku');
});

Route::get('/peminjaman', function () {
    return view('peminjaman');
});

Route::get('/kunjungan', function () {
    return view('kunjungan');
});

Route::get('/datasiswa', function () {
    return view('datasiswa');
});

Route::get('/tambahbuku', function () {
    return view('tambahbuku');
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/datapegawai', function () {
    return view('datapegawai');
});

Route::get('/bukutamusiswa', function () {
    return view('bukutamusiswa');
});

Route::get('/editbuku', function () {
    return view('editbuku');
});




