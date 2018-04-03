@extends('layouts.standard')

@section('title', 'performance')


@section('flash_img', "dumper-truck.jpg")
@section('flash_title', "Research and Development")
@section('flash_text', "To date, there have been ZERO cases of any
paint/coating failure of any kind on any item
being tested, some dating back to 2005, and
counting.")

<?php $i = 0; ?>

@section('content')
    @foreach ($content as $article)
        <div class="container-flex {{$colors[$i]}}">
            <div class="container">

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1>{{ $article->title }}</h1>
                        <div class="article-text">
                            @markdown( $article->content )
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="article-thumb-wrap">
                            @foreach ($images as $img)
                                @if ($img->content_id == $article->id)
                                    <div class="thumb-holder">
                                        <img src="{{asset("img/upload/" . $img->filename)}}" class="img-responsive img-thumbnail">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
            <div class="pillow-30">

            </div>
        </div>

        {{-- Count up i to loop colorscheme --}}
        <?php
            $i += 1;

            if ($i == count($colors)) {
                $i = 0;
            }
        ?>
    @endforeach
@endsection
