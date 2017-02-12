<?php

namespace App\Http\Controllers\Backend\Article;

use DB;
use App\Http\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function allArticle()
    {
        $articles = Article::all();
        return view('backend.layouts.primary', ['articles' => $articles, 'page' => 'backend.pages.allArticles']);
    }

    public function addArticle()
    {
        return view('backend.layouts.primary', ['page' => 'backend.pages.addArticle']);

    }

    public function addArticlePost(Request $request)
    {
        $article = new Article();
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->description = $request->input('description');

        $article->save();

        $message = trans('messages.addArticle', ['title' => $article->title]);
        $mess = ['message' => $message];
        return redirect()->back()->with($mess);
    }
}
