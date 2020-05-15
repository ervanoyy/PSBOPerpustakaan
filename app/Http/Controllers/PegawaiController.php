<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

        $pegawai->save();
       return redirect('/pegawai');
    }

    public function hapus(Request $request){

        $pegawai = Pegawai::find($request->pegawai_id);
        $pegawai->delete();
        return redirect('/pegawai');

    }

}
