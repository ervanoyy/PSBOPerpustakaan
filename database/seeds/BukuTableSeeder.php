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
            'Kode_Buku' => '0020099',
            'Judul_Buku' => 'Pendidikan Aye',
            'Gambar' => '1589300251_gambarbuku.jpg',
            'Kategori' => 'Fiksi',
            'Pengarang' => 'Ervanoyy',
            'Stok' => '10',
			'Status' => 'Tersedia',
        ]);

        \App\Buku::create([
            'Kode_Buku' => '0002',
            'Judul_Buku' => 'Judul 02',
            'Gambar' => '1589286027_CoverBuuk1.png',
            'Kategori' => 'Non_Fiksi',
            'Pengarang' => 'Pengarang 02',
            'Stok' => '11',
			'Status' => 'Tersedia',
        ]);

        \App\Buku::create([
            'Kode_Buku' => '0003',
            'Judul_Buku' => 'Judul 03',
            'Gambar' => '1589280069_CoverBuuk.png',
            'Kategori' => 'Non_Fiksi',
            'Pengarang' => 'Pengarang 01',
            'Stok' => '0',
			'Status' => 'Tidak Tersedia',
        ]);
    }
}
