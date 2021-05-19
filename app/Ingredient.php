<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredients';   //Связанная таблица с моделью

    protected $fillable = [
        'name',
    ];

    public $timestamps = false;

    public function articles()  //Связь со статьями
    {
        return $this->belongsToMany(Article::class, 'article_ingredient', 'ingredient_id', 'article_id');
    }
}
