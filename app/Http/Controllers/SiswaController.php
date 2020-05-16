<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;

use App\Siswa;

use Carbon\Carbon;

class SiswaController extends Controller
{
    //
    public function index(){
        $siswa = Siswa::all();
        return view('/Siswa/datasiswa', ['datasiswa' => $siswa]);
    }

    
    public function index_edit(){
        $siswa = Siswa::all();
        return view('/Siswa/siswa', ['siswa' => $siswa]);
    }

    public function edit($siswa_id){
        $siswa = Siswa::find($siswa_id);
        return view('/Siswa/editdatasiswa', ['siswa' => $siswa]);
    }

    public function proses_edit(Request $request, $siswa_id){

        $siswa = Siswa::find($siswa_id);
                
        $siswa->NIS = $request->NIS;
        $siswa->Nama = $request->Nama;
        $siswa->Kelas = $request->Kelas;

        $siswa->save();
       return redirect('/siswa');
    }

    public function hapus(Request $request){

        $siswa = Siswa::find($request->siswa_id);
        $siswa->delete();
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
