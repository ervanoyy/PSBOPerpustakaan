<?php

namespace App\Exports;

use App\Buku;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithMapping;
class BukuExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Buku::all();
    }

    public function map($Buku) : array {
        return [
            $Buku->id,
            $Buku->Kode_Buku,
            $Buku->Judul_Buku,
            $Buku->Kategori,
            $Buku->Pengarang,
            $Buku->Stok,
            $Buku->Status,                              
            Carbon::parse($Buku->created_at)->toFormattedDateString()
        ];
 
    }

    public function headings():array
    {
        return [
            'No',
            'Kode Buku',
            'Judul Buku',
            'Kategori',
            'Pengarang',
            'Stok',
            'Status',
            'Tanggal Input',

        ];
    }
}