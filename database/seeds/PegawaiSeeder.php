<?php

use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Pegawai::create([
            'Nama' => 'Hedi sang wibu',
            'NIP' => '1111111111',
        ]);
    }
}
