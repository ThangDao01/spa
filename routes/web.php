
<?php
// Route::get('/', function () {
//     return view('welcome');
// });


use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/test', [MailController::class,'test']);
Route::get('/list', [ArticleController::class,'listArticle']);

Route::post('/export-csv',[ArticleController::class,'export_csv']);
Route::post('/import-csv',[ArticleController::class,'import_csv']);
Route::get(
    '{uri}',
    '\\'.Pallares\LaravelNuxt\Controllers\NuxtController::class
)->where('uri', '.*');

