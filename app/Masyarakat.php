<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $table = "masyarakat";

    protected $fillable = ['Nama', 'Alamat', 'Umur', 'NoTelp'];

    public function KunjunganMasyarakat(){
        return $this->hasMany('App\KunjunganMasyarakat');
    }
}
