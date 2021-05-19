<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view('admin.articles', [
            'articles' => Article::paginate(50),
        ]);
    }
}
