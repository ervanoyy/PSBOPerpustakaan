<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KunjunganSiswa extends Model
{
    //
    protected $table = "kunjungan_siswa";

    protected $fillable = ['ksiswa_id'];

    public function Siswa(){
    	return $this->belongsTo('App\Siswa', 'ksiswa_id');
    }
}
