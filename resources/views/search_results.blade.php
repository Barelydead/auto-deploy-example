@extends('layouts.standard')

@section('title', 'Page Title')

@section('flash_title', "Found what you are looking for?")
@section('flash_text', "")


@section('content')
    <div class="container">

        <div class="row rdcseablue rdcwhite-text center">
            <div class="col-md-12">
                <h1>Search results</h1>
            </div>
        </div>

        @if (count($articles) == 0)
            <div class="row">
                <div class="col-md-12">
                    <h2>No matching content</h2>
                    <p>There was no content matching your search of '{{$query}}'</p>
                </div>
            </div>
        @endif

        <div class="row">
        @foreach ($articles as $article)

            <div class="col-md-10 col-md-offset-1">
                <h2><a href="{{ URL::to('/' . $article->path) }}">{{ $article->title }}</a></h2>
                <div class="content">
                    @markdown($article->content . "...")
                </div>
            <div class="pillow-30"></div>
            </div>

        @endforeach
        </div>
    </div>

@endsection
