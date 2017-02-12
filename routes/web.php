<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['namespace' => 'Article'], function()
{
    /* Блог (Вывод всех новостей) */
    Route::get('/', 'ArticleController@allArticle');

    /* Просмотр одной новости */
    Route::get('/{id}', 'ArticleController@oneArticle')
        ->where('id', '[0-9]+');
});

Route::group(['middleware' => 'auth', 'namespace' => 'Backend\Article'], function () {

    Route::get('/home/articles', 'ArticleController@allArticle')
        ->name('admin.articles');

    Route::get('/home/article/add', 'ArticleController@addArticle');

    Route::post('/home/article/add', 'ArticleController@addArticlePost');

    Route::get('/home/article/edit/{id}', 'ArticleController@editArticle')
        ->where('id', '[0-9]+');

    Route::post('/home/article/edit/{id}', 'ArticleController@editArticlePost')
        ->where('id', '[0-9]+');

    Route::get('/home/article/delete/{id}', 'ArticleController@deleteArticle')
        ->where('id', '[0-9]+');

    Route::post('/home/article/delete/{id}', 'ArticleController@deleteArticlePost')
        ->where('id', '[0-9]+');

    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
