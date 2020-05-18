<?php

use Illuminate\Database\Seeder;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Buku::create([
            'Kode_BukuInventaris' => '0020099',
            'Kode_BukuLemari' => 'F0001',
            'Judul_Buku' => 'Pendidikan Aye',
            'Gambar' => '1589300251_gambarbuku.jpg',
            'Kategori' => 'Fiksi',
            'JenisPustaka' => 'Buku',
            'Pengarang' => 'Ervanoyy',
            'Stok' => '10',
            'Status' => 'Tersedia',
            'Keterangan' => 'Baik',
        ]);

        \App\Buku::create([
            'Kode_BukuInventaris' => '0002',
            'Kode_BukuLemari' => 'N0001',
            'Judul_Buku' => 'Judul 02',
            'Gambar' => '1589286027_CoverBuuk1.png',
            'Kategori' => 'Non_Fiksi',
            'JenisPustaka' => 'Modul',
            'Pengarang' => 'Pengarang 02',
            'Stok' => '11',
            'Status' => 'Tersedia',
            'Keterangan' => 'Baik',
        ]);

        \App\Buku::create([
            'Kode_BukuInventaris' => '0003',
            'Kode_BukuLemari' => 'N0003',
            'Judul_Buku' => 'Judul 03',
            'Gambar' => '1589280069_CoverBuuk.png',
            'Kategori' => 'Non_Fiksi',
            'JenisPustaka' => 'Jurnal',
            'Pengarang' => 'Pengarang 01',
            'Stok' => '0',
            'Status' => 'Tidak Tersedia',
            'Keterangan' => 'Baik',
        ]);

        \App\Buku::create([
            'Kode_BukuInventaris' => 'ISBN-3443-2-34',
            'Kode_BukuLemari' => 'P0001',
            'Judul_Buku' => 'Seri Pengetahuan : Marxisme',
            'Gambar' => '1589343406_Buku.jpg',
            'Kategori' => 'Pendidikan',
            'JenisPustaka' => 'Buku',
            'Pengarang' => 'A.Arum Candra',
            'Stok' => '100',
            'Status' => 'Tersedia',
            'Keterangan' => 'Baik',
        ]);
    }
}
