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
            Route::post('/admin/hapus', 'AdminController@hapus');
            
            /* ---------- Siswa --------------  */

            Route::get('/datasiswa', 'SiswaController@index');
            Route::post('/datasiswa/import_excel', 'SiswaController@import_excel');
            Route::get('/siswa', 'SiswaController@index_edit');

            Route::get('/Siswa/editdatasiswa/{siswa_id}', 'SiswaController@edit');
            Route::put('/Siswa/editdatasiswa/{siswa_id}/proses', 'SiswaController@proses_edit');

            Route::post('/siswa/hapussiswa', 'SiswaController@hapus');

            /* ---------- Pegawai --------------  */

            Route::get('/datapegawai', 'PegawaiController@index');
            Route::post('/datapegawai/import_excel', 'PegawaiController@import_excel');
            Route::get('/pegawai', 'PegawaiController@index_edit');

            Route::get('/Pegawai/editdatapegawai/{pegawai_id}', 'PegawaiController@edit');
            Route::put('/Pegawai/editdatapegawai/{pegawai_id}/proses', 'PegawaiController@proses_edit');

            Route::post('/pegawai/hapuspegawai', 'PegawaiController@hapus');



             /* ---------- Siswa Tahfidz --------------  */
            Route::get('/datasantri', 'SantriController@index');
            Route::post('/datasantri/import_excel', 'SantriController@import_excel');
            Route::get('/tahfidz', 'SantriController@index_edit');
            
            Route::get('/Tahfidz/editdatatahfidz/{santri_id}', 'SantriController@edit');
            Route::put('/Tahfidz/editdatatahfidz/{santri_id}/proses', 'SantriController@proses_edit');

            Route::post('/tahfidz/hapussiswatahfidz', 'SantriController@hapus');

            /* ---------- Masyarakat (Anggota) --------------  */

            Route::get('/datamasyarakat', function() {
                return view('Masyarakat.datamasyarakat') ;
            }) ;

            Route::get('/masyarakat', function() {
                return view('Masyarakat.masyarakat') ;
            }) ;

            Route::get('/Masyarakat/editdatamasyarakat', function() {
                return view('Masyarakat.editdatamasyarakat') ;
            }) ;


            
            /* ---------- Buku --------------  */

            Route::get('/buku', 'BukuController@bukuview');
            Route::get('/modul', 'BukuController@modulview');
            Route::get('/jurnal', 'BukuController@jurnalview');

            Route::get('/buku/tambahbuku', 'BukuController@tambah');
            Route::post('/buku/tambahbuku/proses', 'BukuController@proses_tambah');

            Route::get('/buku/editbuku/{buku_id}', 'BukuController@edit');
            Route::put('/buku/editbuku/{buku_id}/proses', 'BukuController@proses_edit');

            Route::get('/buku/pengaturan', function () {
                return view('Buku/pengaturan');
            });

            Route::get('/buku/deleteall', 'BukuController@deleteall');
            Route::post('/buku/import_excel', 'BukuController@import_excel');

            Route::get('/buku/export_excel', 'BukuController@export_excel');
            Route::get('/buku/deleteinfo', function () {
                return view('Buku/deleteinfo');
            });

            Route::post('/buku/hapusbuku', 'BukuController@hapus');

            /* ---------- Peminjaman Siswa --------------  */

            Route::get('/peminjamansiswa', 'PeminjamanSiswaController@index');

            Route::get('/peminjamansiswa/deletesiswa', function () {
                return view('Peminjaman/deletesiswa');
            });

            Route::get('/tambahpeminjamansiswa', function () {
                return view('Peminjaman/tambahpeminjamansiswa');
            });

            Route::post('Peminjaman/tambahpeminjamansiswa/proses', 'PeminjamanSiswaController@proses_tambah');

            Route::get('/confirmpeminjamansiswa', function () {
                return view('Peminjaman/confirmpeminjamansiswa');
            });

            
            Route::get('/peminjamansiswa/deleteall', 'PeminjamanSiswaController@deleteall');
            Route::get('/peminjamansiswa/export_excel', 'PeminjamanSiswaController@export_excel');

            


            /* ---------- Peminjaman Pegawai--------------  */

            Route::get('/peminjamanpegawai', 'PeminjamanPegawaiController@index');

            Route::get('/peminjamanpegawai/deletepegawai', function () {
                return view('Peminjaman/deletepegawai');
            });

            Route::get('/tambahpeminjamanpegawai', function () {
                return view('Peminjaman/tambahpeminjamanpegawai');
            });

            Route::post('Peminjaman/tambahpeminjamanpegawai/proses', 'PeminjamanPegawaiController@proses_tambah');

            Route::get('/confirmpeminjamanpegawai', function () {
                return view('Peminjaman/confirmpeminjamanpegawai');
            });

            Route::get('/peminjamanpegawai/deleteall', 'PeminjamanPegawaiController@deleteall');
            Route::get('/peminjamanpegawai/export_excel', 'PeminjamanPegawaiController@export_excel');


            /* ---------- Peminjaman Santri--------------  */
            Route::get('/peminjamansantri', 'PeminjamanSantriController@index');


            Route::get('/peminjamansantri/deletesantri', function () {
                return view('Peminjaman/deletesantri');
            });

            Route::get('/tambahpeminjamansantri', function () {
                return view('Peminjaman/tambahpeminjamansantri');
            });

            Route::post('Peminjaman/tambahpeminjamansantri/proses', 'PeminjamanSantriController@proses_tambah');

            Route::get('/confirmpeminjamansantri', function () {
                return view('Peminjaman/confirmpeminjamansantri');
            });

            Route::get('/peminjamansantri/deleteall', 'PeminjamanSantriController@deleteall');
            Route::get('/peminjamansantri/export_excel', 'PeminjamanSantriController@export_excel');

            /* ---------- Kunjungan --------------  */

            Route::get('/kunjungansiswa', 'KunjunganSiswaController@index');
            Route::get('/kunjungantamu', 'KunjunganMasyarakatController@index');

            Route::get('/kunjungantamu/deletetamu', function () {
                return view('Kunjungan/deletetamu');
            });

            Route::get('/kunjungansiswa/deletesiswa', function () {
                return view('Kunjungan/deletesiswa');
            });

            Route::post('/kunjungansiswa/cari/proses', 'KunjunganSiswaController@proses_cari');
            
            Route::get('/kunjungantamu/deleteall', 'KunjunganMasyarakatController@deleteall');
            Route::get('/kunjungansiswa/deleteall', 'KunjunganSiswaController@deleteall');
            Route::get('/kunjungantamu/export_excel', 'KunjunganMasyarakatController@export_excel');
            Route::get('/kunjungansiswa/export_excel', 'KunjunganSiswaController@export_excel');
            Route::get('/kunjungansiswa', 'KunjunganSiswaController@index');
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

