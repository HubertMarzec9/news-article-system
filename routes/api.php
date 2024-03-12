<?php

use App\Http\Controllers\ArticleApiController;
use App\Http\Controllers\AuthorApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/articles/{id}', [ArticleApiController::class, 'getById']);
Route::get('/articles/author/{authorId}', [AuthorApiController::class, 'getByAuthor']);
Route::get('/top-authors', [AuthorApiController::class, 'getTopAuthors']);



