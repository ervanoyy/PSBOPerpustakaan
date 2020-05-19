<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\PeminjamanSiswa;
use App\Buku;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use App\Exports\PeminjamanSiswaExport;

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
        $cari_stok =  Buku::where('Kode_BukuInventaris', $request->Kode_BukuInventaris)->first()->Stok ?? 0;
        if ($cari_s!=0){
            if ($cari_b!=0){
                if($cari_stok!=0){
                $buku=Buku::find($cari_b);
                $buku->Stok=$buku->Stok-1;
                $buku->save(); 
                $status = "Belum Dikembalikan";
                \App\PeminjamanSiswa::create([
                    'psiswa_id' => $cari_s,
                    'book_id' => $cari_b,
                    'status' => $status,
            ]);
            alert()->success('Sukses','Data peminjaman berhasil ditambahkan');
            return redirect('/peminjamansiswa'); 
            }else{
                alert()->error('Error','Stok buku habis');
                return redirect('/tambahpeminjamansiswa');
            }
        }
        else{  
            alert()->error('Error','Data buku tidak ditemukan');
            return redirect('/tambahpeminjamansiswa');
        }
    }
    else{
        alert()->error('Error','Data NIS tidak ditemukan');  
        return redirect('/tambahpeminjamansiswa');
    }}

    public function kembalikan(Request $request){
        $pinjam = PeminjamanSiswa::find($request->pinjam_id);
        $pinjam->status = "Sudah Dikembalikan";
        $pinjam->save();

        $bukupinjam = $pinjam->book_id;
        $buku=Buku::find($bukupinjam);
        $buku->Stok=$buku->Stok+1;
        $buku->save();
        alert()->success('Sukses','Buku sudah dikembalikan!');
        return redirect('/peminjamansiswa');
    }

    public function deleteall(){
        \App\PeminjamanSiswa::truncate();
        alert()->success('Sukses','Seluruh data berhasil dihapus!');       
        return redirect('/peminjamansiswa');
        
    }
        
     public function export_excel()
    {
        return Excel::download(new PeminjamanSiswaExport, 'PeminjamanSiswa.xlsx');
    }

}
