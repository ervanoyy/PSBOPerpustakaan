<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Masyarakat::create([
            'Nama' => 'Fathiya',
            'Alamat' => 'Jl.Babakan Raya',
            'Umur' => '20',
            'NoTelp' => '081123123356',
        ]);

        \App\Masyarakat::create([
            'Nama' => 'Dina Fadila',
            'Alamat' => 'Jl.Babakan tengah',
            'Umur' => '20',
            'NoTelp' => '081134127864',
        ]);

        \App\Masyarakat::create([
            'Nama' => 'Siti Nur Hasanah',
            'Alamat' => 'Jl.Meranti',
            'Umur' => '21',
            'NoTelp' => '083167600017',
        ]);
        
        \App\Masyarakat::create([
            'Nama' => 'Ryvan',
            'Alamat' => 'Jl.Perwira',
            'Umur' => '19',
            'NoTelp' => '089976543218',
        ]);
        
        \App\Masyarakat::create([
            'Nama' => 'Ervan',
            'Alamat' => 'Jl.Merdeka',
            'Umur' => '23',
            'NoTelp' => '086543789654',
        ]);

        \App\Masyarakat::create([
            'Nama' => 'Dhanu',
            'Alamat' => 'Jl.Bababakan',
            'Umur' => '25',
            'NoTelp' => '096543567890',
        ]);

        \App\Masyarakat::create([
            'Nama' => 'Zakky',
            'Alamat' => 'Jl.Merdeka',
            'Umur' => '22',
            'NoTelp' => '081234123465',
        ]);

        \App\Masyarakat::create([
            'Nama' => 'Hedi',
            'Alamat' => 'Jl.Perwira',
            'Umur' => '20',
            'NoTelp' => '081165453212',
        ]);
        \App\Masyarakat::create([
            'Nama' => 'Hanum Salsabila',
            'Alamat' => 'Jl.Merdeka',
            'Umur' => '25',
            'NoTelp' => '081123456789',
        ]);

        \App\Masyarakat::create([
            'Nama' => 'Rangga Almahendra',
            'Alamat' => 'Jl.Babakan',
            'Umur' => '18',
            'NoTelp' => '081712345678',
        ]);

        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++){
 
            \App\Masyarakat::create([
                'Nama' => $faker->name,
                'Alamat' => $faker->address,
                'Umur' => $faker->numberBetween(25,40),
                'NoTelp' => $faker->phoneNumber,
            ]);

        }

    }
}
