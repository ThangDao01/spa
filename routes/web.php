
<?php
// Route::get('/', function () {
//     return view('welcome');
// });


use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/test', [MailController::class,'test']);


Route::get(
    '{uri}',
    '\\'.Pallares\LaravelNuxt\Controllers\NuxtController::class
)->where('uri', '.*');

