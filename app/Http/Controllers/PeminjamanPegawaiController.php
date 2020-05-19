<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\PeminjamanPegawai;
use App\Buku;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class PeminjamanPegawaiController extends Controller
{
    //
    public function index() {
        $peminjaman = \App\PeminjamanPegawai::all();
        return view('Peminjaman/pegawai', ['peminjaman' => $peminjaman]);
    }

    public function proses_tambah(Request $request){
        $cari_s =  Pegawai::where('NIP', $request->NIP)->first()->id ?? 0;
        $cari_b =  Buku::where('Kode_BukuInventaris', $request->Kode_BukuInventaris)->first()->id ?? 0;
        if (($cari_s==0) and ($cari_b==0)) {
        return redirect('/tambahpeminjamanpegawai')->with('error','Data tidak ditemukan');
        }
        else{ 
        \App\PeminjamanPegawai::create([
            'ppegawai_id' => $cari_s,
            'book_id' => $cari_b,
        ]);
        return redirect('/peminjamanpegawai')->with('success','Data Kunjungan berhasil ditambahkan!');    
        }

    }
}
