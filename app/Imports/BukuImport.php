<?php

namespace App\Imports;

use App\Buku;
use Maatwebsite\Excel\Concerns\ToModel;


class BukuImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Buku([
            'Kode_BukuInventaris'=> $row[1],
            'Kode_BukuLemari'=> $row[2],
            'Judul_Buku'=> $row[3],
            'Gambar'=> $row[4],
            'Kategori'=> $row[5],
            'JenisPustaka'=> $row[6],
            'Pengarang'=> $row[7],
            'Stok'=> $row[8],
            'Status'=> $row[9],
            'Keterangan'=> $row[10],
        ]);
    }
}


