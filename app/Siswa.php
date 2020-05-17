<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table = "siswa";

    protected $fillable = ['NIS', 'Nama', 'Kelas'];
    
    public function KunjunganMasyarakat(){
        return $this->hasMany('App\KunjunganMasyarakat');
    }
}
