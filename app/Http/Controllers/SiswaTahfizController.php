<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaTahfizController extends Controller
{
    //
    public function index(){
        $siswatahfiz = SiswaTahfiz::all();
        return view('/SiswaTahfiz/datasiswa', ['datasiswa' => $siswatahfiz]);
    }

    
    public function index_edit(){
        $siswatahfiz = SiswaTahfiz::all();
        return view('/SiswaTahfiz/siswa', ['siswa' => $siswatahfiz]);
    }

    public function edit($siswatahfiz_id){
        $siswatahfiz = SiswaTahfiz::find($siswatahfiz_id);
        return view('/Siswatahfiz/editdatasiswa', ['siswa' => $siswatahfiz]);
    }

    public function proses_edit(Request $request, $siswatahfiz_id){

        $siswatahfiz = SiswaTahfizfind($siswatahfiz_id);
                
        $siswatahfiz->NIS = $request->NIST;
        $siswatahfiz->Nama = $request->Nama;
        

        $siswa->save();
       return redirect('/siswa');
    }

    public function hapus(Request $request){

        $siswatahfiz = SiswaTahfiz::find($request->siswatahfiz_id);
        $siswatahfiz->delete();
        return redirect('/siswa');

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
		$file->move('file_siswa',$nama_file);
 
		// import data
		Excel::import(new SiswaImport, public_path('/file_siswa/'.$nama_file));
 
 
		// alihkan halaman kembali
		return redirect('/datasiswa');
    }
}
