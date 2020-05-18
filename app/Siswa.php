<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table = "siswa";

    protected $fillable = ['NIS', 'Nama', 'Kelas'];
    
    public function KunjunganSiswa(){
        return $this->hasMany('App\KunjunganSiswa');
    }
}
