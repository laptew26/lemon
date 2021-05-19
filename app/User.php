<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users'; //Подключение таблицы

    protected $fillable = [ //Разрешенные изменяемые поля
        'name', 'email', 'password', 'status_id', 'photo',
    ];

    protected $hidden = [   //Скрытые поля
        'password', 'remember_token',
    ];

    public function articles()   //Связь с рецептами
    {
        return $this->hasMany(Article::class);
    }
}
