<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Siswa;

use Carbon\Carbon;

class SiswaController extends Controller
{
    //
    // public function index(){
    //     $siswa_datasiswa = Siswa::all();
    //     return view('/Siswa/datasiswa', ['siswa_datasiswa' => $siswa]);
    // }

    // public function edit($siswa_NIS){
    //     $siswa = Siswa::find($siswa_NIS);
    //     return view('/Siswa/editdatasiswa', ['siswa' => $siswa]);
    // }

    // public function proses_edit(Request $request, $siswa_NIS){

    //     $siswa = Siswa::find($siswa_NIS);
                
    //     $siswa->NIS = $request->NIS;
    //     $siswa->Nama = $request->Nama;
    //     $siswa->Kelas = $request->Kelas;
        
    //     $siswa->save();

    //     return redirect('/siswa');
    // }

    // public function hapus(Request $request){

    //     $siswa = Siswa::find($request->siswa_NIS);
    //     $siswa->delete();
    //     return redirect('/siswa');

    // }

}
