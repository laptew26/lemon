<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    public function run()
    {
        //Генерация случайных тэгов
        factory(\App\Tag::class, 100)->create();

        //Присвоение этих тэгов статьям
        for($i = 0; $i<150; $i++){
            DB::table('article_tag')->insert([
                'article_id' => random_int(1, 100),
                'tag_id' => random_int(1, 100),
            ]);
        }
    }
}
