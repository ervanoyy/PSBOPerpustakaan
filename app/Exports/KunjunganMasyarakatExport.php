<?php

namespace App\Exports;

use App\KunjunganMasyarakat;
use Maatwebsite\Excel\Concerns\FromCollection;

class KunjunganMasyarakatExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KunjunganMasyarakat::all();
    }
}
