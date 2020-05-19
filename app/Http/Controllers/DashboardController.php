<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $total_buku = \App\Buku::all()->count();
        $total_kunjungan = \App\KunjunganMasyarakat::all()->count();
        $total_siswa = \App\Siswa::all()->count();
        $total_pegawai = \App\Pegawai::all()->count();
        $total_santri = \App\Santri::all()->count();
        $total_ksiswa = \App\KunjunganSiswa::all()->count();

        $peminjamansiswa = \App\PeminjamanSiswa::where('status', 'Belum Dikembalikan')->get()->count();
        $peminjamanpegawai = \App\PeminjamanPegawai::where('status', 'Belum Dikembalikan')->get()->count();
        $peminjamansantri = \App\PeminjamanSantri::where('status', 'Belum Dikembalikan')->get()->count();
        $total_peminjaman = $peminjamansiswa+$peminjamanpegawai+$peminjamansantri; 

        return view('dashboard', compact('total_buku', 'total_kunjungan', 'total_siswa', 'total_pegawai', 'total_santri', 'total_ksiswa', 'total_peminjaman'));
    }
}

