@extends('layouts.app')

@section('title', 'News Article System')

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success">
            <h1 class="text-xl text-green-600">{{ Session::get('success') }}</h1>
        </div>
    @endif

    <div class="mt-5">
        <div class="pb-3 text-xl">
            <a href="{{ route('articles.create') }}" class="text-blue-500 underline">Create</a>
        </div>


        <div class="pb-3 text-xl">
            <hr class="border-gray-500 my-2">
            <p class="font-bold">Edit</p>
        </div>

        <div>
            @foreach($articles as $article)
                <a href="{{ route('articles.edit', ['id' => $article->id]) }}" class="text-blue-500 underline">{{ $article->title }}</a><br>
            @endforeach
        </div>

    </div>
@endsection
