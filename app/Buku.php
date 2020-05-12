<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    protected $table = "buku";

    protected $fillable = ['Kode_Buku', 'Judul_Buku', 'Gambar', 'Kategori', 'Pengarang', 'Tanggal_Input', 'Stok', 'Status'];
    
}
