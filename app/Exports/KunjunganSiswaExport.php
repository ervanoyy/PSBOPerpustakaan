<?php

namespace App\Exports;
use Carbon\Carbon;
use App\KunjunganSiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KunjunganSiswaExport implements FromCollection, WithMapping, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KunjunganSiswa::with('Siswa')->get();
    }

    public function map($kunjungan) : array {
        return [
            $kunjungan->id,
            $kunjungan->Siswa->NIS,
            $kunjungan->Siswa->Nama,
            $kunjungan->Siswa->Kelas,
            Carbon::parse($kunjungan->created_at)->toFormattedDateString()
        ] ;
 
    }

    public function headings() : array {
        return [
            '#',
            'NIS',
            'Nama',
            'Kelas',
            'Tanggal'
        ] ;
    }
}


