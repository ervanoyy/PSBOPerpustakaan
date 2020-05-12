<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Buku;

use Carbon\Carbon;

class BukuController extends Controller
{
    //
    public function index(){
        $buku_buku = Buku::all();
        return view('/Buku/buku', ['buku_buku' => $buku_buku]);
    }

    public function tambah(){
        return view('/Buku/tambahbuku');
    }

    public function proses_tambah(Request $request){
        
        $this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		]);

        $file = $request->file('file');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'dist/img';

        $file->move($tujuan_upload,$nama_file);
        
        $status = $request->Jumlah_Buku >= 1? "Tersedia":"Tidak Tersedia";

        Buku::create([
            'Kode_Buku' => $request->Kode_Buku,
            'Judul_Buku' => $request->Judul_Buku,
            'Gambar' => $nama_file,
            'Kategori' => $request->Kategori,
            'Pengarang' => $request->Pengarang,
            'Stok' => $request->Jumlah_Buku,
			'Status' => $status,
        ]);
        
        return redirect('/buku');
    }

    public function edit($buku_id){
        $buku = Buku::find($buku_id);
        return view('/Buku/editbuku', ['buku' => $buku]);
    }

    public function proses_edit(Request $request, $buku_id){

        $buku = Buku::find($buku_id);
        
        if($request->hasFile('file')){

            $file = $request->file('file');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'dist/img';
            $file->move($tujuan_upload,$nama_file);
            $buku->Gambar = $nama_file;

        }
        
        $buku->Kode_Buku = $request->Kode_Buku;
        $buku->Judul_Buku = $request->Judul_Buku;
        $buku->Kategori = $request->Kategori;
        $buku->Pengarang = $request->Pengarang;
        $buku->Stok = $request->Jumlah_Buku;
        $buku->status = $request->Jumlah_Buku >= 1? "Tersedia":"Tidak Tersedia";

        $buku->save();

        return redirect('/buku');

    }

    public function hapus(Request $request){

        $buku = Buku::find($request->buku_id);
        $buku->delete();
        return redirect('/buku');

    }
}
