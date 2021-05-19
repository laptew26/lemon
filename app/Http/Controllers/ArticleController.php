<?php

namespace App\Http\Controllers;

use App\Article_Tag;
use App\Difficulty;
use App\Article;
use App\Ingredient;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    public function index() //Вывод всех статей
    {
        $articles = Article::paginate(15);    //По 15 статей на 1 страницу
        return view('article.index', [
            'articles' => $articles,
        ]);
    }

    public function create()    //Вывод страницы создания статьи
    {
        return view('article.create', [
            'difficulties' => Difficulty::all(),
        ]);
    }

    public function store(Request $request) //POST запрос на создание статьи
    {
        $file_input = $request->file('photo');  //Запись в переменную file_input информацию из этого input
        $file_name = time() . '_' . $file_input->getClientOriginalName();  //Запись в переменную file_name названия файла
        $path = public_path('/img');    //Запись в переменную path путь где лежат фотографии
        $file_input->move($path, $file_name);   //Перемещение файла из переменной file input в путь(path) и название его из переменной file_name

        $article = Article::create([
            'title' => $request->title,
            'ingredients' => $request->ingredients,
            'description' => $request->description,
            'user_id' => Auth::id(),
            'category_id' => 1,
            'time' => $request->time,
            'difficulty_id' => $request->difficulty,
            'photo' => $file_name,
        ]);

        // Запись связанной таблицы тэгов
        foreach ($request->tags as $tag) {
            $tagEntry = Tag::where(['name' => $tag])->first();  //Поиск такой записи тэга
            if (!$tagEntry) {   //Если такой записи нет
                $tagEntry = Tag::create([   //Тэг создается
                    'name' => $tag,
                ]);
            }
            $tagEntry->articles()->attach($article->id, [    //Добавление тэга к статье в связанной таблице
                'article_id' => $article->id,
                'tag_id' => $tagEntry->id,
            ]);
        }

        // Запись связанной таблицы ингредиентов
//        $countIng = -1;
//        foreach ($request->ingredients as $ingredient) {
//            $countIng++;
//            $ingredientEntry = Ingredient::where(['name' => $ingredient])->first();    //Поиск такой записи ингредиента
//            if (!$ingredientEntry) {    //Если такой записи нет
//                $ingredientEntry = Ingredient::create([    //Ингредиент создается
//                    'name' => $ingredient,
//                ]);
//            }
//            $quantity = $request->quantity[$countIng];
//            $ingredientEntry->articles()->attach($article->id,[     //Добавление ингредиента к статье в связанной таблице
//                'article_id' => $article->id,
//                'ingredient_id' => $ingredientEntry->id,
//                'quantity' => $quantity,
//            ]);
//        }

        return redirect(route('article_show', $article->id));    //Переход на только что созданную статью
    }

    public function show($id)   //Вывод статьи
    {
        $article = Article::find($id);  //Поиск статьи
        return view('article.show', [
            'article' => $article,
        ]);
    }

    public function edit($id)   //Вывод формы обновления статьи
    {
        return view('article.edit', [
            'article' => Article::find($id),
            'difficulties' => Difficulty::all(),
        ]);
    }

    public function update($id, Request $request)   //Post запрос на обновление статьи
    {
        $article = Article::find($id);  //Поиск статьи
        $article->update([      //Обновление записи
            'title' => $request->title,
            'ingredients' => $request->ingredients,
            'description' => $request->description,
            'category_id' => 1,
            'time' => $request->time,
            'difficulty_id' => $request->difficulty,
        ]);

        if ($request->hasFile('photo')) {   //Если фотография изменялась
            File::delete(public_path('img/' . $article->photo));  //Удаление старой записи файла
            $file_input = $request->file('photo');  //Запись в переменную file_input информацию из этого input
            $file_name = time() . '_' . $file_input->getClientOriginalName();  //Запись в переменную file_name названия файла
            $path = public_path('/img');    //Запись в переменную path путь где лежат фотографии
            $file_input->move($path, $file_name);   //Перемещение файла из переменной file input в путь(path) и название его из переменной file_name

            $article->update([   //Обновление файла фотографии
                'photo' => $file_name,
            ]);
        }

        return redirect(route('article_show', $id));
    }

    public function destroy($id)    //Удаление рецепта
    {
        $article = Article::find($id);    //Поиск этой статьи
        if (Auth::user()->id == $article->user_id || Auth::user()->admin == 1) {
            $article->delete();  //Если пользователь - владелец статьи или администратор, то происходит удаление
            return redirect(route('article_index')); //Возврат на страницу со статьями
        }
    }
}
