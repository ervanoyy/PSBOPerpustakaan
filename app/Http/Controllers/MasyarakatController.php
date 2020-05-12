<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\RedirectResponse;

class MasyarakatController extends Controller
{
    //
    public function berkunjung(){
        return view('Bukutamu/formtamu');
    }

    public function pencatatan(Request $request){

        try
        {
            $masyarakat = \App\Masyarakat::where('Nama', $request->Nama)
                                        ->where('Alamat', $request->Alamat)
                                        ->where('Umur', $request->Umur)
                                        ->where('NoTelp', $request->NoTelp)
                                        ->firstOrFail();

        }

        catch(ModelNotFoundException $e)
        {
            
            \App\Masyarakat::create([
                'Nama' => $request->Nama,
                'Alamat' => $request->Alamat,
                'Umur' => $request->Umur,
                'NoTelp' => $request->NoTelp,
            ]);

            $masyarakat = \App\Masyarakat::latest('id')->first();

        }
        
        return redirect()->action(
            'KunjunganMasyarakatController@tambah', ['tujuan' => $request->Tujuan,
            'masyarakat_id' => $masyarakat->id]
        );
        
    }

}
