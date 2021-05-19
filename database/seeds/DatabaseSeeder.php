<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            DifficultySeeder::class,
            UserSeeder::class,
            ArticleSeeder::class,
            TagSeeder::class,
//            IngredientSeeder::class,
        ]);
    }
}
