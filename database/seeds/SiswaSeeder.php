<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Siswa::create([
            'Nama' => 'Fathiya',
            'NIS' => '123445678',
            'Kelas' => 'VII A',
        ]);
    }
}
