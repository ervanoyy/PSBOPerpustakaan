<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    protected $table = "buku";

    protected $fillable = ['Kode_BukuInventaris', 'Kode_BukuLemari', 'Judul_Buku', 'Gambar', 'Kategori', 'JenisPustaka', 'Pengarang', 'Tanggal_Input', 'Stok', 'Status', 'Keterangan'];

    public function PeminjamanSiswa(){
        return $this->hasMany('App\PeminjamanSiswa');
    }
    
    public function PeminjamanSantri(){
        return $this->hasMany('App\PeminjamanSantri');
    }
    
    public function PeminjamanPegawai(){
        return $this->hasMany('App\PeminjamanPegawai');
    }
}
