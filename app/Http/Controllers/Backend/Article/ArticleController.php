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
        $this->request = $request;

        $this->validate($this->request, [
            'title' => 'required|min:5|max:150|',
            'description' => 'required|min:5|max:255|',
            'content' => 'required|min:10',
        ]);

        $article = Article::create([
            'title' => $this->request->input('title'),
            'description' => $this->request->input('description'),
            'content' => $this->request->input('content'),
        ]);
        $id = $article->id;

        if ($id) {
            $message = trans('messages.addArticle', ['title' => $article->title]);
            $mess = ['message' => $message, 'colorMessage' => 'success'];
            return redirect()->route('admin.articles')->with($mess);
        }
        else {
            $message = trans('messages.notAddArticle', ['title' => $article->title]);
            $mess = ['message' => $message, 'colorMessage' => 'warning'];
            return redirect()->back()->with($mess);
        }
    }



    public function editArticle($id)
    {
        $article = Article::find($id);
        return view('backend.layouts.primary', ['page' => 'backend.pages.editArticle', 'article' => $article]);

    }


    public function editArticlePost(Request $request, $id)
    {
        $this->request = $request;

        $article = Article::find($id);

        $this->validate($this->request, [
            'title' => 'required|min:5|max:150|',
            'description' => 'required|min:5|max:255|',
            'content' => 'required|min:10',
        ]);

        $article->title = $request->input('title');
        $article->description = $request->input('description');
        $article->content = $request->input('content');

        $article->save();
        $id = $article->id;


        if ($id) {
            $message = trans('messages.editArticle', ['title' => $article->title]);
            $mess = ['message' => $message, 'colorMessage' => 'success'];
            return redirect()->back()->with($mess);
        }
        else {
            $message = trans('messages.notEditArticle', ['title' => $article->title]);
            $mess = ['message' => $message, 'colorMessage' => 'danger'];
            return redirect()->back()->with($mess);
        }
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
            $mess = ['message' => $message, 'colorMessage' => 'danger'];
            return redirect()->route('admin.articles')->with($mess);
        }

        if ($this->request->input('confirm')){
            $article = Article::find($id)->delete();

            $message = trans('messages.deleteArticle');
            $mess = ['message' => $message, 'colorMessage' => 'success'];
            return redirect()->route('admin.articles')->with($mess);
        }
    }
}
