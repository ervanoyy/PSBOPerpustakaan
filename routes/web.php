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

Route::get('/', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');



Route::group(['middleware' => 'auth'], function(){
            Route::get('/dashboard', 'DashboardController@index');

            /* ---------- User --------------  */

            Route::get('/admin', 'AdminController@index');
            Route::get('/admin/tambahadmin', 'AdminController@tambah');
            Route::post('/admin/tambahadmin/proses', 'AdminController@proses_tambah');
   
            Route::get('/datasiswa', function () {
                return view('User/datasiswa');
            });

            Route::get('/editdatasiswa', function () {
                return view('User/editdatasiswa');
            });

            Route::get('/siswa', function () {
                return view('User/siswa');
            });


            Route::get('/datapegawai', function () {
                return view('User/datapegawai');
            });

            Route::get('/pegawai', function () {
                return view('User/pegawai');
            });

            Route::get('/editdatapegawai', function () {
                return view('User/editdatapegawai');
            });


            /* ---------- Buku --------------  */

            Route::get('/buku', 'BukuController@index');

            Route::get('/buku/tambahbuku', 'BukuController@tambah');
            Route::post('/buku/tambahbuku/proses', 'BukuController@proses_tambah');

            Route::get('/buku/editbuku/{buku_id}', 'BukuController@edit');
            Route::put('/buku/editbuku/{buku_id}/proses', 'BukuController@proses_edit');

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

            Route::get('/kunjungantamu', 'KunjunganMasyarakatController@index');
            Route::get('/kunjungantamu/{tujuan}/{masyarakat_id}', 'KunjunganMasyarakatController@tambah');

            /* ---------- Buku Tamu --------------  */

            Route::get('/formsiswa', function () {
                return view('Bukutamu/formsiswa');
            });

            Route::get('/formtamu', 'MasyarakatController@berkunjung');
            Route::post('/formtamu/catat', 'MasyarakatController@pencatatan');  
            
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

});

