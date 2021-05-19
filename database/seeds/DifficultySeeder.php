<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DifficultySeeder extends Seeder
{
    public function run()
    {
        DB::table('difficulties')->insert([
            'name' => 'Легко'
        ]);
        DB::table('difficulties')->insert([
            'name' => 'Средняя сложность'
        ]);
        DB::table('difficulties')->insert([
            'name' => 'Сложно'
        ]);
    }
}
