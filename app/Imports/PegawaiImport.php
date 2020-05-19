<?php

namespace App\Imports;

use App\Pegawai;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PegawaiImport implements ToModel, WithStartRow
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
        return new Pegawai([
            'NIP'=> $row[1], 
            'Nama'=> $row[2], 
            'Alamat'=> $row[3], 
            'Tanggal_Masuk'=> $row[4], 
        ]);
    }
}
