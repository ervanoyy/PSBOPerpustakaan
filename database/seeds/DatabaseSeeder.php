<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(UserSeeder::class);
        $this->call(BukuTableSeeder::class);
        $this->call(MasyarakatSeeder::class);
        $this->call(Kunjungan_MasyarakatSeeder::class);
        $this->call(SiswaSeeder::class);
        $this->call(PegawaiSeeder::class);
        $this->call(SantriSeeder::class);

    }
}
