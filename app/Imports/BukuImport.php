<?php

namespace App\Imports;

use App\Buku;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class BukuImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function startRow(): int
    {
        return 2;
    }
    public function model(array $row)
    {
        return new Buku([
            'Kode_BukuInventaris'=> $row[1],
            'Kode_BukuLemari'=> $row[2],
            'Judul_Buku'=> $row[3],
            'Kategori'=> $row[4],
            'JenisPustaka'=> $row[5],
            'Pengarang'=> $row[6],
            'Stok'=> $row[7],   
            'Keterangan'=> $row[8],
            'Status'=> 'Tersedia',
        ]);
    }
}


