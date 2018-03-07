@extends('layouts.standard')

@section('title', 'performance')


@section('flash_img', "dumper-truck.jpg")
@section('flash_title', "Research and Development")
@section('flash_text', "To date, there have been ZERO cases of any
paint/coating failure of any kind on any item
being tested, some dating back to 2005, and
counting.")


@section('content')
<div class="container">

    @foreach ($articles as $article)
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $article->title }}</h1>
                <div class="article-text">
                    @markdown({{ $article->content }})
                </div>

            </div>
        </div>
    @endforeach

</div>
@endsection
