@extends('layouts.standard')

@section('title', 'Page Title')

@section('flash_title', "Found what you are looking for?")
@section('flash_text', "")


@section('content')
    <div class="container">

        <h1>Search results</h1>
        @if (count($articles) == 0)
            <div class="row">
                <div class="col-md-12">
                    <h2>No matching content</h2>
                    <p>There was no content matching your search of '{{$query}}'</p>
                </div>
            </div>
        @endif

        @foreach ($articles as $article)
            <div class="row">
                <div class="col-md-12">
                    <h2>{{ $article->title }}</h2>
                    <div class="content">
                        {{ $article->content }}
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection
