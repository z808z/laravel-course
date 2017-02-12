<?php

namespace App\Http\Controllers\Backend\Article;

use DB;
use App\Http\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    private $request;

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



    public function editArticle($id)
    {
        $article = Article::find($id);
        return view('backend.layouts.primary', ['page' => 'backend.pages.editArticle', 'article' => $article]);

    }


    public function editArticlePost(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->description = $request->input('description');

        $article->save();

        $message = trans('messages.addArticle', ['title' => $article->title]);
        $mess = ['message' => $message];
        return redirect()->back()->with($mess);
    }


    public function deleteArticle($id)
    {
        $article = Article::find($id);
        return view('backend.layouts.primary', ['page' => 'backend.pages.deleteArticle', 'article' => $article]);

    }


    public function deleteArticlePost(Request $request, $id)
    {
        $this->request = $request;
        if ($this->request->input('cancel')) {
            $message = trans('messages.notDeletedArticle');
            $mess = ['message' => $message];
            return redirect()->route('admin.articles')->with($mess);
        }

        if ($this->request->input('confirm')){
            $article = Article::find($id)->delete();

            $message = trans('messages.deleteArticle');
            $mess = ['message' => $message];
            return redirect()->route('admin.articles')->with($mess);
        }
    }
}
