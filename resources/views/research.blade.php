@extends('layouts.standard')

@section('title', 'Page Title')

@section('flash_title', "Research")
@section('flash_text', "research at red diamond coatings")


@section('content')
    <div class="container-flex">
        <div class="container">
            <article class="article">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-success">Environmental efforts</h1>
                        <p class="text-success">We strive to make the most cost effective and clean paint and coatings possible. </p>
                    </div>
                </div>
                <div class="row">
                    @foreach ($articles as $article)
                        <div class="col-md-3">
                            <h4>{{ $article->title }}</h4>
                            <p>{{ $article->content }}</p>
                        </div>
                    @endforeach
                </div>
            </article>
        </div>
    </div>
@endsection
