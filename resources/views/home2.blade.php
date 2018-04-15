@extends('layouts.standard')

@section('title', 'Home')

@section('flash_title', "RED DIAMOND COATINGS (RDC)")
@section('flash_text', "Welcome and thank you for visiting Red Diamond Coatings.")


@section('content')
    <div class="container-flex rdc rdcseablue rdcwhite-text">
        <div class="container">
            <article class="article">

                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <h2>Perfection Through Innovation with Endless Applications...</h2>
                        </center>
                    </div>
                </div>

            </article>
        </div>
    </div>

    <div class="container-flex">
        <div class="masonry">
            <div id="image-viewer" class="gallery-overlay">
            </div>
            {!! $gallery !!}
        </div>
    </div>


@endsection
