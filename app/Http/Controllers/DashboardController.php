<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $total_buku = \App\Buku::all()->count();
        $total_kunjungan = \App\KunjunganMasyarakat::all()->count();

        return view('dashboard', compact('total_buku', 'total_kunjungan'));
    }
}

