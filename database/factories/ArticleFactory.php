<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->sentence(1,3),
        'ingredients' => $faker->paragraph(),
        'description' => $faker->paragraph(),
        'photo' => 'example.png',
        'user_id' => $faker->numberBetween(1,11),
        'healthy' => $faker->boolean(),
        'time' => $faker->numberBetween(10,300),
        'difficulty_id' => $faker->numberBetween(1,3),
        'created_at' => $faker->dateTimeThisDecade(),
    ];
});
