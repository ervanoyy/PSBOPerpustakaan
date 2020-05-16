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
            'Pengarang'=> $row[5], 
            'Stok'=> $row[6],
            'Status'=> $row[7],
        ]);
    }
}
