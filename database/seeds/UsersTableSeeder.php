<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Octavio Oyanedel',
            'email' => 'octavio.oyanedel@gmail.com',
            'password' => Hash::make('kapete_198@'),
        ]);
    }
}
