@extends('layouts.standard')

@section('title', 'About Us')

@section('flash_title', "About Us")
@section('flash_text', "Welcome to Red Diamond Coatings, Inc.  I am Bradley J. Kubela, the Founder, President & CEO.   I truly appreciate you taking time to visit our website.  ")

@section('content')
    <div class="row">
        {{-- vertical spacer --}}
        <div class="pillow-50">
        </div>
        <div class="col-md-12 col-md-offset-3">
            <p class="rdcorange-text bold">Information about Red Diamond Coating; who we are, the product, where we come from and where we are heading.</p>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class='text-danger'>WHO WE ARE</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <p>Welcome to Red Diamond Coatings, Inc. I am Bradley J. Kubela, the Founder, President & CEO. I truly appreciate you taking time to visit our website.</p>
                </div>
                <div class="col-md-1" style='padding: 0 10px 20px 10px'>
                </div>
            </div>
            @foreach ($content as $about)
                <div class="row">
                    <div class="col-md-12">
                        <h4 class='text-danger'>{{ $about->title }}</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8" style='padding-left:25px'>
                        @markdown($about->content)
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="pillow-20">

                </div>
                <div class="col-md-1" style='padding: 0 10px 20px 10px'>
                    <img width='100%' src="img/about/hollywoodsign.jpg" alt="Hollywood sign with RDC coating">
                </div>
                <div class="col-md-1">
                    <img width='100%' src="img/about/global_entrepreneurship_summit.jpg" alt="Global Entreprenaurship Summit">
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="pillow-50">

        </div>
    </div>
@endsection
