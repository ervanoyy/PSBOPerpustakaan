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

        $messages = [
            'required' => ':attribute wajib diisi ya',
            'numeric' => ':attribute tolong diisi angka saja ya!',
            'alpha_num' => ':attribute tolong diisi dengan tepat ya!',
            'gte' => ':attribute tolong diisi lebih besar dari 0 ya!'
        ];

        $this->validate($request, [
            'Nama' => 'required',
            'Alamat' => 'required',
            'Umur' => 'required|numeric|gte:0',
            'NoTelp' => 'required|alpha_num',
            'Tujuan' => 'required'
		], $messages);

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
