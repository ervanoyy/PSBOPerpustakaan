<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \App\User::create([
            'name'  => 'Admin',
            'email' => 'admin@gmail.com',
            'password'  => bcrypt('Admin')
        ]);

    }
}
