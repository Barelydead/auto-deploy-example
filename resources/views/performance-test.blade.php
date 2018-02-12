@extends('layouts.standard')

@section('title', 'Page Title')

@section('flash_title', "Research and Development")
@section('flash_text', "To date, there have been ZERO cases of any
paint/coating failure of any kind on any item
being tested, some dating back to 2005, and
counting.")


@section('content')
    <div class="container">
        {{-- vertical spacer --}}
        <div class="pillow-50">
        </div>

        <div class="row">
            <div class="col-md-12">
                <p class="rdcorange-text">This presentation covers several ongoing, practical application performance tests of RDC’s two signature Advanced, High-Performance, Aerospace Grade, Acrylic, Ceramic Coatings. Primers were NEVER applied on any item tested. In most cases, two coats of RDC product were applied to achieve RDC’s optimum cured thickness of 10-12 dry mils. All dry weather test samples were gently cleaned with dish soap and warm water prior to being photographed.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h1>12+ Year (In-Can) Liquid A2 Product Shelf-Life Test  </h1>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <h4>Re-opened After 12 Years.</h4>
                <p>The two images (RIGHT) depict one of six original 1-quart containers of RDC Formula A2 as they appeared when they were reopened in August 2017, with what appears to be some resin (in good condition) floating on the top. This product was originally manufactured and canned in August 2005—12 years prior. These containers had been opened several times over time and were stored indoors under extreme hot and cold environments, with ambient room temperatures ranging from 18°f-160°f for all of the 12 years. </p>
            </div>
            <div class="col-md-4">
                <img src="img/performance/paint.jpg" class="contained-img-width">
            </div>
            <div class="col-md-4">
                <img src="img/performance/dry_paint.jpg" class="contained-img-width">
            </div>
        </div>

        <div class="pillow-30">

        </div>

        <div class="row">
            <div class="col-md-4">
                <img src="img/performance/rehydrated_paint.jpg" class="contained-img-width">
            </div>
            <div class="col-md-4">
                <img src="img/performance/rehydrated_paint2.jpg" class="contained-img-width">
            </div>
            <div class="col-md-4">
                <h4>After water added and shaken.</h4>
                <p>The two images (LEFT) depict (above shown) 12 year old RDC Formula A2 after the product was transferred to a new 1-quart paint can, then a small amount of tap water was added and the can was shaken at a local paint outlet. Amazingly all product remained fully usable after 12 years of storage, all of which was actually used in 2017 to create additional test samples now in progress and shown in this presentation. This is unarguably an AMAZING, unmatched discovery. RDC is not aware of any paint or coating company on this planet that can claim (and prove) a 12+ year shelf-life. </p>
            </div>
        </div>
    {{-- container close --}}
    </div>
@endsection
