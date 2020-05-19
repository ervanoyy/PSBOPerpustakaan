<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    //
    protected $table = "santri";

    protected $fillable = ['NIST', 'Nama', 'Jenis_Kelamin'];

    public function PeminjamanSantri(){
        $this->hasOne('App\PeminjamanSantri');
    }
}

