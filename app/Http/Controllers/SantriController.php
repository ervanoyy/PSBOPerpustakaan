<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Santri;
use Carbon\Carbon;
use App\Imports\SantriImport;
use Maatwebsite\Excel\Facades\Excel;

class SantriController extends Controller
{
    //
    public function index(){
        $santri = Santri::all();
        return view('/Tahfidz/datasantri', ['santri' => $santri]);
    }

    
    public function index_edit(){
        $santri = Santri::all();
        return view('/Tahfidz/Tahfidz', ['santri' => $santri]);
    }

    public function edit($santri_id){
        $santri = Santri::find($santri_id);
        return view('/Tahfidz/editdatatahfidz', ['santri' => $santri]);
    }

    public function proses_edit(Request $request, $santri_id){

        $santri = Santri::find($santri_id);
                
        $santri->NIST = $request->NIST;
        $santri->Nama = $request->Nama;
        $santri->Jenis_Kelamin = $request->Jenis_Kelamin;

        $editsantri = $santri->save();
        if($editsantri){
            alert()->success('Sukses','Data berhasil diupdate!');
            return redirect('/tahfidz');
        }
        else{
            alert()->error('Error','Data gagal diupdate!');
            return redirect('/tahfidz');
        }
    }

    public function hapus(Request $request){
        $santri = Santri::find($request->santri_id);
        $deletesantri = $santri->delete();
        if($deletesantri){
            alert()->success('Sukses','Data berhasil dihapus!');
            return redirect('/tahfidz');
        }
        else{
            alert()->error('Error','Data gagal dihapus!');
            return redirect('/tahfidz');
        }
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
		$file->move('file_santri',$nama_file);
 
		// import data
		Excel::import(new SantriImport, public_path('/file_santri/'.$nama_file));
 
 
        // alihkan halaman kembali
        alert()->success('Sukses','Data berhasil diimport!');
		return redirect('/datasantri');
    }


}