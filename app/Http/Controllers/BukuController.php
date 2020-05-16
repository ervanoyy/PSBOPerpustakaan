<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Buku;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use App\Exports\BukuExport;
use App\Imports\BukuImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{
    //
    public function index(){
        //$buku_buku = Buku::all();
        $buku_buku = Buku::where('Kategori', 'Pendidikan')->get(); 
        return view('/Buku/buku', ['buku_buku' => $buku_buku]);
    }

    public function tambah(){
        return view('/Buku/tambahbuku');
    }

    public function proses_tambah(Request $request){
        
        $messages = [
            'required' => ':attribute wajib diisi ya',
            'mimes' => ':attribute -nya tolong pilih salah satu dari jpeg,png,jpg ya!',
            'max' => ':attribute maksimal sebesar 2048 ya!',
            'file' => ':attribute -nya tolong pilih salah satu dari jpeg,png,jpg ya!',
            'image' => ':attribute -nya tolong pilih salah satu dari jpeg,png,jpg ya!',
            'numeric' => ':attribute tolong diisi dengan angka saja ya!',
            'gte' => ':attribute diisi paling kecil 0 ya!'
        ];

        $this->validate($request, [
            'Kode_Buku' => 'required',
            'Judul_Buku' => 'required',
            'Gambar' => 'nullable|file|image|mimes:jpeg,png,jpg|max:2048',
            'Kategori' => 'required',
            'Pengarang' => 'required',
            'Jumlah_Buku' => 'required|numeric|gte:0'
		], $messages);

        $file = $request->file('Gambar');

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
        
        return redirect('/buku')->with('info','Data buku berhasil ditambahkan!');
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

    
    public function export_excel()
	{
        return Excel::download(new BukuExport, 'DataBuku.xlsx');
    }
    

    public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_buku',$nama_file);
 
		// import data
		Excel::import(new BukuImport, public_path('/file_buku/'.$nama_file));
 
 
		// alihkan halaman kembali
		return redirect('/buku');
    }

    public function deleteall(){
        Buku::truncate();     
        return redirect('/buku');

    }
    
}
