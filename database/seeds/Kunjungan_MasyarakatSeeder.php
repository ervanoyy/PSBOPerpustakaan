<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class Kunjungan_MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\KunjunganMasyarakat::create([
            'Tujuan' => 'Membaca',
            'masyarakat_id' => 1,
        ]);

        \App\KunjunganMasyarakat::create([
            'Tujuan' => 'Belajar',
            'masyarakat_id' => 2,
        ]);
        
        \App\KunjunganMasyarakat::create([
            'Tujuan' => 'Membaca dan Belajar',
            'masyarakat_id' => 3,
        ]);

        \App\KunjunganMasyarakat::create([
            'Tujuan' => 'Membaca Buku',
            'masyarakat_id' => 4,
        ]);

        \App\KunjunganMasyarakat::create([
            'Tujuan' => 'belajar',
            'masyarakat_id' => 5,
        ]);

        \App\KunjunganMasyarakat::create([
            'Tujuan' => 'membaca',
            'masyarakat_id' => 6,
        ]);

        \App\KunjunganMasyarakat::create([
            'Tujuan' => 'membaca',
            'masyarakat_id' => 7,
        ]);

        \App\KunjunganMasyarakat::create([
            'Tujuan' => 'membaca',
            'masyarakat_id' => 8,
        ]);

        \App\KunjunganMasyarakat::create([
            'Tujuan' => 'membaca dan belajar',
            'masyarakat_id' => 9,
        ]);

        \App\KunjunganMasyarakat::create([
            'Tujuan' => 'Tidur',
            'masyarakat_id' => 10,
        ]);

        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++){
 
            \App\KunjunganMasyarakat::create([
                'Tujuan' => $faker->word,
                'masyarakat_id' => $i + 10,
            ]);

        }

    }
}
