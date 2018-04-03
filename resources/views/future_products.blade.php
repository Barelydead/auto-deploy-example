<?php var_dump($images); ?>
@extends('layouts.standard')

@section('title', 'Future Products')

<!-- @section('flash_img', "future_products.jpg") -->
@section('flash_title', "Future Products")
@section('flash_text', "Our high quality products.")

@section('content')
@if(isset($content[0]))
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Future products</h1>
        </div>
        <div class="col-md-12">
            <h2>@markdown($content[0]->title)</h2>
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
@endif

@if(isset($content[1]))
<div class="rdc rdcseablue rdcwhite-text">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>@markdown($content[1]->title)</h2>
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
@endif

@if(isset($content[2]))
<div class="rdc rdcdeepred rdcwhite-text">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="pillow-30"></div>
                <img src="img/future_products/today1.jpg" class="contained-img full-width">
            </div>
            <div class="col-md-8">
                <h2>@markdown($content[2]->title)</h2>
                @markdown($content[2]->content)
            </div>
        </div>
        <div class="pillow-30"></div>
    </div>
</div>
@endif

@endsection
