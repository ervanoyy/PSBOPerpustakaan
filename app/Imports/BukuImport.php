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
            'Kode_Buku'=> $row[1],
            'Judul_Buku'=> $row[2],
            'Gambar'=> $row[3],
            'Kategori'=> $row[4],
            'JenisPustaka'=> $row[5],
            'Pengarang'=> $row[6],
            'Stok'=> $row[7],
            'Status'=> $row[8],
        ]);
    }
}
