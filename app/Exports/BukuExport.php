<?php

namespace App\Exports;

use App\Buku;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class BukuExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Buku::all();
    }

    public function headings():array
    {
        return [
            'No',
            'Kode Buku',
            'Judul Buku',
            'Gambar',
            'Kategori',
            'Pengarang',
            'Stok',
            'Status',
            'Create',
            'Update',
        ];
    }
}
