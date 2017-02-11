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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
