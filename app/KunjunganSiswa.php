<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KunjunganSiswa extends Model
{
    //
    protected $table = "kunjungan_siswa";

    public function Masyarakat(){
    	return $this->belongsTo('App\Siswa', 'NIS');
    }
}
