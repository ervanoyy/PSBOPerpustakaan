<?php

namespace App\Exports;
use Carbon\Carbon;
use App\PeminjamanSantri;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PeminjamanSantriExport implements FromCollection, WithMapping, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PeminjamanSantri::with('Santri','Buku')->get();
    }

    public function map($peminjaman) : array {
        return [
            $peminjaman->id,
            $peminjaman->Santri->NIST,
            $peminjaman->Santri->Nama,
            $peminjaman->Buku->Kode_BukuInventaris,
            $peminjaman->Buku->Judul_Buku,
            Carbon::parse($peminjaman->created_at)->toFormattedDateString(),
            Carbon::parse($peminjaman->update_at)->toFormattedDateString(),
            $peminjaman->status
        ] ;
 
    }

    public function headings() : array {
        return [
            '#',
            'NIST',
            'Nama',
            'Kode Buku',
            'Judul Buku',
            'Tanggal Peminjaman',
            'Tanggal Pengembalian',
            'Status'
        ] ;
    }
}


