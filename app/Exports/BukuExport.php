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
            $Buku->Kode_BukuInventaris,
            $Buku->Kode_BukuLemari,
            $Buku->Judul_Buku,
            $Buku->Kategori,
            $Buku->JenisPustaka,
            $Buku->Pengarang,
            $Buku->Stok,
            $Buku->Status,
            $Buku->Keterangan,
            Carbon::parse($Buku->created_at)->toFormattedDateString()
        ];

    }

    public function headings():array
    {
        return [
            'No',
            'Kode Buku Inventaris',
            'Kode Buku Lemari',
            'Judul Buku',
            'Kategori',
            'Jenis Pustaka',
            'Pengarang',
            'Stok',
            'Status',
            'Keterangan',
            'Tanggal Input',
        ];
    }
}
