<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'a@a',
            'admin' => 1,
            'photo' => 'example.png',
            'password' => Hash::make('a'),
        ]);
        factory(\App\User::class, 10)->create();
    }
}
