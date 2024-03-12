<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorApiController extends Controller
{
    public function getByAuthor($author_id)
    {
        $articles = Article::where('author_id', $author_id)->get();

        return response()->json($articles);
    }

    public function getTopAuthors()
    {
        $topAuthors = Author::selectRaw('authors.id, authors.name')
            ->leftJoin('articles', 'authors.id', '=', 'articles.author_id')
            ->where('articles.created_at', '>=', now()->subWeek())
            ->groupBy('authors.id', 'authors.name')
            ->orderByDesc(DB::raw('COUNT(articles.id)'))
            ->take(3)
            ->get();

        return response()->json($topAuthors);
    }
}
