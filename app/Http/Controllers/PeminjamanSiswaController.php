<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\PeminjamanSiswa;
use App\Buku;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


class PeminjamanSiswaController extends Controller
{
    //
    public function index() {
        $peminjaman = \App\PeminjamanSiswa::all();
        return view('Peminjaman/siswa', ['peminjaman' => $peminjaman]);
    }

    public function proses_tambah(Request $request){
        $cari_s =  Siswa::where('NIS', $request->NIS)->first()->id ?? 0;
        $cari_b =  Buku::where('Kode_BukuInventaris', $request->Kode_BukuInventaris)->first()->id ?? 0;
        if (($cari_s==0) and ($cari_b==0)) {
        return redirect('/tambahpeminjamansiswa')->with('error','Data tidak ditemukan');
        }
        else{ 
        \App\PeminjamanSiswa::create([
            'psiswa_id' => $cari_s,
            'book_id' => $cari_b,
        ]);
        return redirect('/peminjamansiswa')->with('success','Data Kunjungan berhasil ditambahkan!');    
        }

    }
}
