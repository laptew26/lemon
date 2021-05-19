<?php

namespace App\Http\Controllers;

use App\Article;

class PageController extends Controller
{
    public function home(){
        return view('home', [
            'articles' => Article::query()->latest()
            ->take(6)->get()
        ]);
    }
}
