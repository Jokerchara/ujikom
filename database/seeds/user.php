<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Nur Yachya',
            'email' => 'Nuryachya@gmail.com',
            'password' => bcrypt('einshearth1111')
        ]);
    }
}
