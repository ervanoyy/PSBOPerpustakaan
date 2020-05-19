<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //
    protected $table = "pegawai";

    protected $fillable = ['NIP', 'Nama', 'Alamat', 'Tanggal_Masuk'];

    public function PeminjamanPegawai(){
        $this->hasOne('App\PeminjamanPegawai');
    }
    
}
