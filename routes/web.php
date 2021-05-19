<?php

use Illuminate\Support\Facades\Route;

/*Главная*/
Route::get('/', 'PageController@home')->name('home');

/*Авторизованный пользователь*/
Route::group(['middleware' => 'auth'], function (){
    Route::get('/logout', 'AuthController@logout')->name('logout');
    Route::get('/articles/create', 'ArticleController@create')->name('article_create');
    Route::post('/articles/store', 'ArticleController@store')->name('article_store');

    /*Управление рецептами/файлами*/
    Route::group(['middleware' => 'owner'], function (){
        Route::get('/articles/{id}/edit', 'ArticleController@edit')->name('article_edit');
        Route::post('/articles/{id}/update', 'ArticleController@update')->name('article_update');
        Route::get('/articles/{id}/destroy', 'ArticleController@destroy')->name('article_destroy');
    });
});

/*Рецепты*/
Route::get('/articles', 'ArticleController@index')->name('article_index');
Route::get('/articles/{id}', 'ArticleController@show')->name('article_show');

/*Теги*/
Route::get('/tags', 'TagController@index')->name('tag_index');
Route::get('/tags/{id}', 'TagController@show')->name('tag_show');

/*Пользователи*/
Route::get('/users', 'UserController@index')->name('user_index');
Route::get('/users/{id}', 'UserController@show')->name('user_show');

/*Авторизация/Регистрация*/

Route::group(['middleware' => 'guest'], function(){
    Route::get('/registration', 'AuthController@showRegister')->name('showRegister');
    Route::post('/registration', 'AuthController@doRegister')->name('doRegister');
    Route::get('/login', 'AuthController@showLogin')->name('showLogin');
    Route::post('/login', 'AuthController@doLogin')->name('doLogin');
});


/*Администратор            Пока что бесполезен */
Route::group(['prefix' => 'admin'], function (){
    Route::get('/', 'Admin\PageController@index')->name('admin');
    Route::get('/users', 'Admin\UserController@index')->name('admin.user_index');
    Route::get('/articles', 'Admin\ArticleController@index')->name('admin.article_index');
});
