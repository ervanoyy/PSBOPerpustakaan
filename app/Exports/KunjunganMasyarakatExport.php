<?php

namespace App\Exports;
use Carbon\Carbon;
use App\KunjunganMasyarakat;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KunjunganMasyarakatExport implements FromCollection, WithMapping, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KunjunganMasyarakat::with('Masyarakat')->get();
    }

    public function map($kunjungan) : array {
        return [
            $kunjungan->id,
            $kunjungan->Masyarakat->Nama,
            $kunjungan->Masyarakat->Umur,
            $kunjungan->Masyarakat->Alamat,
            $kunjungan->Masyarakat->NoTelp,
            $kunjungan->Tujuan,
            Carbon::parse($kunjungan->created_at)->toFormattedDateString()
        ] ;
 
    }

    public function headings() : array {
        return [
            '#',
            'Nama',
            'Umur',
            'Alamat',
            'No Telpon',
            'Tujuan',
            'Tanggal'
        ] ;
    }
}


