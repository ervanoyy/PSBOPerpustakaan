<?php

namespace App\Imports;

use App\Santri;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
class SantriImport implements ToModel, WithStartRow
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
        return new Santri([
            'NIST'=> $row[1], 
            'Nama'=> $row[2], 
            'Jenis_Kelamin'=> $row[3], 
        ]);
    }
}
