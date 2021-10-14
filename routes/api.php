<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('me', function () {
    // Let's return fake information.
    return [
        'data' => Article::all(),
    ];
});
Route::get('news/{id}',function ($id){
    return Article::find($id);
});
Route::post('create/article',[ArticleController::class,'createArticle']);
Route::post('article/update/{id}', [ArticleController::class,'update']);
