<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    protected $table = "buku";

    protected $fillable = ['Kode_BukuInventaris', 'Kode_BukuLemari', 'Judul_Buku', 'Gambar', 'Kategori', 'JenisPustaka', 'Pengarang', 'Tanggal_Input', 'Stok', 'Status', 'Keterangan'];

}
