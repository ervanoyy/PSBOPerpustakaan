<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeminjamanPegawai extends Model
{
    //
    protected $table = "peminjaman_pegawai";

    protected $fillable = ['ppegawai_id','book_id'];

    public function Pegawai(){
        return $this->belongsTo('App\Pegawai', 'ppegawai_id');
    }

    public function Buku(){
        return $this->belongsTo('App\Buku', 'book_id');
    }
}
