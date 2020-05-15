<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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

}
