<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Imports\PegawaiImport;
use Maatwebsite\Excel\Facades\Excel;

class PegawaiController extends Controller
{
    //
    public function index(){
        $pegawai = Pegawai::all();
        return view('/Pegawai/datapegawai', ['datapegawai' => $pegawai]);
    }

    
    public function index_edit(){
        $pegawai = Pegawai::all();
        return view('/Pegawai/pegawai', ['pegawai' => $pegawai]);
    }

    public function edit($pegawai_id){
        $pegawai = Pegawai::find($pegawai_id);
        return view('/Pegawai/editdatapegawai', ['pegawai' => $pegawai]);
    }

    public function proses_edit(Request $request, $pegawai_id){

        $pegawai = Pegawai::find($pegawai_id);
                
        $pegawai->NIP = $request->NIP;
        $pegawai->Nama = $request->Nama;
        $pegawai->Alamat = $request->Alamat;
        $pegawai->Tanggal_Masuk = $request->Tanggal_Masuk;

        $pegawai->save();
       return redirect('/pegawai');
    }

    public function hapus(Request $request){

        $pegawai = Pegawai::find($request->pegawai_id);
        $pegawai->delete();
        return redirect('/pegawai');

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
		$file->move('file_pegawai',$nama_file);
 
		// import data
		Excel::import(new PegawaiImport, public_path('/file_pegawai/'.$nama_file));
 
 
		// alihkan halaman kembali
		return redirect('/datapegawai');
    }

}
