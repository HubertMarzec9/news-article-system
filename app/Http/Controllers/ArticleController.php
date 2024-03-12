<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Author;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        $authors = Author::all();
        return view('articles.create', compact( 'authors'));
    }

    public function store(ArticleRequest $request)
    {
        $validatedData = $request->validated();

        Article::create($validatedData);

        return redirect('/')->with('success', 'Article has been added successfully.');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $authors = Author::all();

        return view('articles.edit', compact('article', 'authors'));
    }

    public function update(ArticleRequest $request, $id)
    {
        $validatedData = $request->validated();

        Article::whereId($id)->update($validatedData);

        return redirect('/')->with('success', 'Article has been updated successfully.');
    }
}
