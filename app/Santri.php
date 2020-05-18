<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    //
    protected $table = "santris";

    protected $fillable = ['NIST', 'Nama', 'Jenis_Kelamin'];
}
