<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleApiController extends Controller
{
    public function getById($id)
    {
        $article = Article::findOrFail($id);
        return response()->json($article);
    }
}
