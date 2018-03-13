@extends('layouts.standard')

@section('title', 'Future Products')

<!-- @section('flash_img', "future_products.jpg") -->
@section('flash_title', "Future Products")
@section('flash_text', "Our high quality products.")


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Future products</h1>
        </div>
        <div class="col-md-12">
            @markdown($content[0]->title)
            @markdown($content[0]->content)
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 p-0">
            <div class="col-md-12">
                <h3>Today...</h3>
            </div>

            <div class="col-md-6">
                <img src="img/future_products/today1.jpg" class="contained-img full-width">
            </div>
            <div class="col-md-6">
                <img src="img/future_products/today2.jpg" class="contained-img full-width">
            </div>
        </div>
        <div class="col-md-4">
            <div class="col-md-12">
                <h3>Tomorrow...</h3>
            </div>
            <img src="img/future_products/tomorrow.jpg" class="contained-img full-width">
        </div>
    </div>
    <div class="pillow-30"></div>
</div>



<div class="rdc rdcseablue rdcwhite-text">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @markdown($content[1]->title)
                @markdown($content[1]->content)
            </div>
            <div class="col-md-4">
                <div class="pillow-30"></div>
                <img src="img/future_products/today1.jpg" class="contained-img full-width">
            </div>
        </div>
        <div class="pillow-30"></div>
    </div>
</div>


<div class="rdc rdcdeepred rdcwhite-text">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="pillow-30"></div>
                <img src="img/future_products/today1.jpg" class="contained-img full-width">
            </div>
            <div class="col-md-8">
                @markdown($content[2]->title)
                @markdown($content[2]->content)
            </div>
        </div>
        <div class="pillow-30"></div>
    </div>
</div>
@endsection
