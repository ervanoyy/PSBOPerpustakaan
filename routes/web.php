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
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

/* ---------- User --------------  */

Route::get('/datasiswa', function () {
    return view('User/datasiswa');
});

Route::get('/datapegawai', function () {
    return view('User/datapegawai');
});


/* ---------- Buku --------------  */

Route::get('/buku', function () {
    return view('Buku/buku');
});

Route::get('/tambahbuku', function () {
    return view('Buku/tambahbuku');
});

Route::get('/editbuku', function () {
    return view('Buku/editbuku');
});

/* ---------- Peminjaman --------------  */

Route::get('/peminjaman', function () {
    return view('Peminjaman/peminjaman');
});

Route::get('/tambahpeminjaman', function () {
    return view('Peminjaman/tambahpeminjaman');
});

Route::get('/confirmpeminjaman', function () {
    return view('Peminjaman/confirmpeminjaman');
});

/* ---------- Kunjungan --------------  */

Route::get('/kunjungansiswa', function () {
    return view('Kunjungan/kunjungansiswa');
});

Route::get('/kunjungantamu', function () {
    return view('Kunjungan/kunjungantamu');
});

/* ---------- Buku Tamu --------------  */

Route::get('/formsiswa', function () {
    return view('Bukutamu/formsiswa');
});

Route::get('/formtamu', function () {
    return view('Bukutamu/formtamu');
});

Route::get('/bukutamu', function () {
    return view('Bukutamu/bukutamu');
});

/* ------------------------------------  */

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/template', function () {
    return view('template');
});


