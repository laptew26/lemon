<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Article::class, 100)->create();
    }
}
