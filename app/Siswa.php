<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    protected $table = "siswa";

    protected $fillable = ['NIS', 'Nama', 'Kelas'];
    
}
