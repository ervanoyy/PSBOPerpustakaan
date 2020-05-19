<?php

namespace App\Exports;
use Carbon\Carbon;
use App\PeminjamanSiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PeminjamanSiswaExport implements FromCollection, WithMapping, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PeminjamanSiswa::with('Siswa','Buku')->get();
    }

    public function map($peminjaman) : array {
        if($peminjaman->status == 'Belum Dikembalikan'){
            $tanggal=$peminjaman->status;
        }elseif($peminjaman->status == 'Sudah Dikembalikan'){
            $tanggal=Carbon::parse($peminjaman->update_at)->toFormattedDateString();
        }
        $batas=Carbon::parse($peminjaman->created_at)->addDays(7)->toFormattedDateString();
        return [
            $peminjaman->id,
            $peminjaman->Siswa->NIS,
            $peminjaman->Siswa->Nama,
            $peminjaman->Buku->Kode_BukuInventaris,
            $peminjaman->Buku->Judul_Buku,
            Carbon::parse($peminjaman->created_at)->toFormattedDateString(),
            $batas,
            $tanggal,
            $peminjaman->status
        ] ;
 
    }

    public function headings() : array {
        return [
            '#',
            'NIS',
            'Nama',
            'Kode Buku',
            'Judul Buku',
            'Tanggal Peminjaman',
            'Batas Pengembalian',
            'Tanggal Pengembalian',
            'Status'
        ] ;
    }
}


