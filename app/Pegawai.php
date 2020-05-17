<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //
    protected $table = "pegawai";

    protected $fillable = ['NIP', 'Nama', 'Tanggal_Bergabung'];
    
}
