<?php

namespace App\Http\Controllers\Article;

use DB;
use App\Http\Models\Article;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HelperController;
use Illuminate\Http\Request;


class ArticleController extends Controller
{

    public function allArticle()
    {
        $articles = Article::all();

        return view('frontend.layouts.primary', ['articles' => $articles, 'page' => 'frontend.pages.posts']);
    }

    public function oneArticle($id)
    {
        $article = Article::find($id);
        if($article) {
            return view('frontend.layouts.primary', ['title' => $article->title, 'article' => $article, 'page' => 'frontend.pages.post']);
        }
        else {
            abort(404);
        }
    }

}
