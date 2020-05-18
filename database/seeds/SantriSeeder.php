<?php

use Illuminate\Database\Seeder;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Santri::create([
            'Nama' => 'Jekii',
            'NIST' => '123445678',
            'Jenis_Kelamin' => 'Ikhwan',
        ]);

        
        \App\Santri::create([
            'Nama' => 'Fathiya',
            'NIST' => '123445668',
            'Jenis_Kelamin' => 'Akhwat',
        ]);
    }
}
