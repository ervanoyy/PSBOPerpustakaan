<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class KunjunganMasyarakatController extends Controller
{
    
    public function index() {
        $kunjungan = \App\KunjunganMasyarakat::all();
        return view('Kunjungan/kunjungantamu', ['kunjungan' => $kunjungan]);
    }

    public function tambah($tujuan, $masyarakat_id){
        
        \App\KunjunganMasyarakat::create([
            'Tujuan' => $tujuan,
            'masyarakat_id' => $masyarakat_id,
        ]);
        
        return redirect('/kunjungantamu');
        
        
    }

}
