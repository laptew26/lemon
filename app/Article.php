<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';   //Подключение таблицы

    protected $fillable = [     //Разрешенные изменяемые поля
        'title', 'description', 'ingredients', 'user_id',
        'healthy', 'time', 'difficulty_id', 'photo',
    ];

    public function difficulty()    //Связь с сложностью
    {
        return $this->belongsTo(Difficulty::class);
    }

    public function user()  //Связь с пользователем
    {
        return $this->belongsTo(User::class);
    }

    public function tags()  //Связь с тегами
    {
        return $this->belongsToMany(Tag::class, 'article_tag', 'article_id', 'tag_id');
    }

    public function ingredients()  //Связь с игредиентами
    {
        return $this->belongsToMany(Ingredient::class, 'article_ingredient', 'article_id', 'ingredient_id');
    }
}
