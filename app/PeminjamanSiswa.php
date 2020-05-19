<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeminjamanSiswa extends Model
{
    //
    protected $table = "peminjaman_siswa";

    protected $fillable = ['psiswa_id','book_id'];

    public function Siswa(){
        return $this->belongsTo('App\Siswa', 'psiswa_id');
    }

    public function Buku(){
        return $this->belongsTo('App\Buku', 'book_id');
    }
        
}
