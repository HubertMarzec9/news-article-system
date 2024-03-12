@extends('layouts.app')

@section('title', 'News Article System')

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success">
            <h1 class="text-xl text-green-600">{{ Session::get('success') }}</h1>
        </div>
    @endif

    <div class="max-w-md mx-auto">
        <h1 class="text-3xl font-bold mb-6">Add News Articles</h1>

        <form method="POST" action="{{ route('articles.store') }}" class="space-y-4">
            @csrf
            <div>
                <label for="title" class="block font-semibold mb-2">Title:</label>
                <input type="text" id="title" name="title" class="border rounded-md px-3 py-2 w-full mb-4"
                       value="{{ old('title') }}">
                @error('title')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="text" class="block font-semibold mb-2">Text:</label>
                <textarea id="text" name="text" rows="6"
                          class="border rounded-md px-3 py-2 w-full mb-4">{{ old('text') }}</textarea>
                @error('text')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="author_id" class="block font-semibold mb-2">Author:</label>
                <select id="author_id" name="author_id" class="border rounded-md px-3 py-2 w-full mb-4">
                    @foreach($authors as $author)
                        <option
                            value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
                    @endforeach
                </select>
                @error('author_id')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md">Add Article</button>
            </div>
        </form>
    </div>

@endsection
