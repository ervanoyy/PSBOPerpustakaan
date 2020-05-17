<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Santri;
use Carbon\Carbon;

class SantriController extends Controller
{
    //
    public function index(){
        $santri = Santri::all();
        return view('/Siswa/datasiswa', ['santri' => $santri]);
    }

    
    public function index_edit(){
        $santri = Santri::all();
        return view('/Siswa/siswa', ['santri' => $santri]);
    }

    public function edit($santri_id){
        $santri = Santri::find($santri_id);
        return view('/Siswa/editdatasiswa', ['santri' => $santri]);
    }

    public function proses_edit(Request $request, $santri_id){

        $santri = Santri::find($santri_id);
                
        $santri->NIST = $request->NIST;
        $ssantri->Nama = $request->Nama;
        $santri->Jenis_Kelamin = $request->Jenis_Kelamin;

        $siswa->save();
       return redirect('/siswa');
    }

    public function hapus(Request $request){

        $santri = Santri::find($request->santri_id);
        $santri->delete();
        return redirect('/siswa');
}
