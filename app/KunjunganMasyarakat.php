<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KunjunganMasyarakat extends Model
{
    
    protected $table = "kunjungan_masyarakat";

    protected $fillable = ['Tujuan', 'masyarakat_id', 'Umur', 'NoTelp'];

    public function Masyarakat(){
    	return $this->belongsTo('App\Masyarakat');
    }
}
