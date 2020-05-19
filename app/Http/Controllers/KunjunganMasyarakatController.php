<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Exports\KunjunganMasyarakatExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

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
        alert()->success('Sukses','Data kunjungan berhasil ditambahkan!');
        return redirect('/kunjungantamu');
                
    }

    public function deleteall(){
        \App\KunjunganMasyarakat::truncate();    
        alert()->success('Sukses','Seluruh data berhasil dihapus!');   
        return redirect('/kunjungantamu');

    }

    public function export_excel()
	{
        return Excel::download(new KunjunganMasyarakatExport, 'KunjunganTamu.xlsx');
	}


}
