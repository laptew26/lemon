<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    public function run()
    {
        //Генерация случайных ингредиентов
        factory(\App\Ingredient::class, 100)->create();

        //Присвоение этих ингредиентов статьям
        for($i = 0; $i<150; $i++){
            DB::table('article_ingredient')->insert([
                'article_id' => random_int(1, 100),
                'ingredient_id' => random_int(1, 100),
                'quantity' => \Illuminate\Support\Str::random('10'),
            ]);
        }
    }
}
