<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\KunjunganSiswa;

class KunjunganSiswa extends Controller
{
    //
    public function index() {
        $kunjungan = \App\KunjunganSiswa::all();
        return view('Kunjungan/kunjungansiswa', ['kunjungan' => $kunjungan]);
    }
}
