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
        $cari_stok =  Buku::where('Kode_BukuInventaris', $request->Kode_BukuInventaris)->first()->Stok ?? 0;
        if ($cari_s!=0){
            if ($cari_b!=0){
                if($cari_stok!=0){
                    $buku=Buku::find($cari_b);
                    $buku->Stok=$buku->Stok-1;
                    $buku->save(); 
                $status = "Belum Dikembalikan";
                \App\PeminjamanSantri::create([
                    'psantri_id' => $cari_s,
                    'book_id' => $cari_b,
                    'status' => $status,
                    ]);
                    alert()->success('Sukses','Data peminjaman berhasil ditambahkan');
                    return redirect('/peminjamansantri'); 
                }else {
                alert()->error('Error','Stok buku habis');
                return redirect('/tambahpeminjamansantri');
            }
            }
            else{
                alert()->error('Error','Data buku tidak ditemukan');
                return redirect('/tambahpeminjamansantri')->with('error','Data tidak ditemukan');
            }
        }
        else{
            alert()->error('Error','Data NIST tidak ditemukan');    
            return redirect('/tambahpeminjamansantri')->with('error','Data tidak ditemukan');
        }
    }

    public function kembalikan(Request $request){
        $pinjam = PeminjamanSantri::find($request->pinjam_id);
        $pinjam->status = "Sudah Dikembalikan";
        $pinjam->save();

        $bukupinjam = $pinjam->book_id;
        $buku=Buku::find($bukupinjam);
        $buku->Stok=$buku->Stok+1;
        $buku->save();
        alert()->success('Sukses','Buku sudah dikembalikan!');
        return redirect('/peminjamansantri');
    }

    public function deleteall(){
        \App\PeminjamanSantri::truncate();
        alert()->success('Sukses','Seluruh data berhasil dihapus!');       
        return redirect('/peminjamansantri');
        
    }
        
     public function export_excel()
    {
        return Excel::download(new PeminjamanSantriExport, 'PeminjamanSantri.xlsx');
    }
}
