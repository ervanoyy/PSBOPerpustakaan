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
        $cari_stok =  Buku::where('Kode_BukuInventaris', $request->Kode_BukuInventaris)->first()->Stok ?? 0;
        if ($cari_s!=0){
            if ($cari_b!=0){ 
                    if($cari_stok!=0){
                    $buku=Buku::find($cari_b);
                    $buku->Stok=$buku->Stok-1;
                    $buku->save();
                    $status = "Belum Dikembalikan";
                    
                    \App\PeminjamanPegawai::create([
                        'ppegawai_id' => $cari_s,
                        'book_id' => $cari_b,
                        'status' => $status,
                    ]);
                    alert()->success('Sukses','Data peminjaman berhasil ditambahkan');
                    return redirect('/peminjamanpegawai'); 
                }else {
                alert()->error('Error','Stok buku habis');
                return redirect('/tambahpeminjamanpegawai');
            }
            }

            else{
                alert()->error('Error','Data buku tidak ditemukan');
                return redirect('/tambahpeminjamanpegawai');
            }
        }
        else{
            alert()->error('Error','Data NIP tidak ditemukan');  
            return redirect('/tambahpeminjamanpegawai');
        }}

        public function kembalikan(Request $request){
            $pinjam = PeminjamanPegawai::find($request->pinjam_id);
            $pinjam->status = "Sudah Dikembalikan";
            $pinjam->save();

            $bukupinjam = $pinjam->book_id;
            $buku=Buku::find($bukupinjam);
            $buku->Stok=$buku->Stok+1;
            $buku->save();
            return redirect('/peminjamanpegawai');
        }

        public function deleteall(){
            \App\PeminjamanPegawai::truncate();       
            return redirect('/kunjungansiswa')->with('warning','Seluruh data berhasil dihapus!');
    
        }
    
        public function export_excel()
        {
            return Excel::download(new PeminjamanPegawaiExport, 'PeminjamanPegawai.xlsx');
        }
}
