<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Santri;
use App\PeminjamanSantri;
use App\Buku;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class PeminjamanSantriController extends Controller
{
    //
    public function index() {
        $peminjaman = \App\PeminjamanSantri::all();
        return view('Peminjaman/santri', ['peminjaman' => $peminjaman]);
    }

    public function proses_tambah(Request $request){
        $cari_s =  Santri::where('NIST', $request->NIST)->first()->id ?? 0;
        $cari_b =  Buku::where('Kode_BukuInventaris', $request->Kode_BukuInventaris)->first()->id ?? 0;
        if ($cari_s!=0){
            if ($cari_b!=0){ 
                $status = "Belum Dikembalikan";
                \App\PeminjamanSantri::create([
                    'psantri_id' => $cari_s,
                    'book_id' => $cari_b,
                    'status' => $status,
            ]);
            return redirect('/peminjamansantri')->with('success','Data Kunjungan berhasil ditambahkan!');  
            }
            else{
                return redirect('/tambahpeminjamansantri')->with('error','Data tidak ditemukan');
            }
        }
        else{  
            return redirect('/tambahpeminjamansantri')->with('error','Data tidak ditemukan');
        }
    }

    public function kembalikan(Request $request){
        $pinjam = PeminjamanSantri::find($request->pinjam_id);
        $pinjam->status = "Sudah Dikembalikan";
        $pinjam->save();
        return redirect('/peminjamansantri');
    }

    public function deleteall(){
        \App\PeminjamanSantri::truncate();       
        return redirect('/peminjamansantri')->with('warning','Seluruh data berhasil dihapus!');
        
    }
        
     public function export_excel()
    {
        return Excel::download(new PeminjamanSantriExport, 'PeminjamanSantri.xlsx');
    }
}
