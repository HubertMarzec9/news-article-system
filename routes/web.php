<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorApiController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $articles = Article::all();
    return view('welcome', compact( 'articles'));
});

Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update');

