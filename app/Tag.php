<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    public function articles()  //Связь со статьями
    {
        return $this->belongsToMany(Article::class, 'article_tag', 'tag_id', 'article_id');
    }
}
