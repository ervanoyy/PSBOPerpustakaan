<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeminjamanSantri extends Model
{
    //
    protected $table = "peminjaman_santri";

    protected $fillable = ['psantri_id','book_id','status'];

    public function Santri(){
        return $this->belongsTo('App\Santri', 'psantri_id');
    }

    public function Buku(){
        return $this->belongsTo('App\Buku', 'book_id');
    }
}
