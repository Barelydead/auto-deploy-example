@extends('layouts.standard')

@section('title', 'Page Title')

@section('flash_title', "Welcome to RDC")
@section('flash_text', "Hi, this is the flash text. This can be changes on every route on your command.")


@section('content')
    <div class="container-flex rdc rdcseablue rdcwhite-text">
        <div class="container">
            <article class="article">

                <div class="row">
                    <div class="col-md-12">
                        <h1>Welcome</h1>
                        <div class="pillow-20"></div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>

            </article>
        </div>
    </div>

    <div class="pillow-50">

    </div>

    <div class="container-flex">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="info-card">
                        <img src="{{asset("img/placeholder.png")}}" alt="picture" class="contained-img img-rounded">
                        <h4><a href="#">This is a small heading, but this one is special becouse it is extra long</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <img src="{{asset("img/placeholder.png")}}" alt="picture" class="contained-img img-rounded">
                        <h4><a href="#">This is a small heading</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <img src="{{asset("img/placeholder.png")}}" alt="picture" class="contained-img img-rounded">
                        <h4><a href="#">This is a small heading</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <img src="{{asset("img/placeholder.png")}}" alt="picture" class="contained-img img-rounded">
                        <h4><a href="#">This is a small heading</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>

            <div class="pillow-50"></div>

            <div class="row">
                <div class="col-md-3">
                    <div class="info-card">
                        <img src="{{asset("img/placeholder.png")}}" alt="picture" class="contained-img img-rounded">
                        <h4><a href="#">This is a small heading</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <img src="{{asset("img/placeholder.png")}}" alt="picture" class="contained-img img-rounded">
                        <h4><a href="#">This is a small heading</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <img src="{{asset("img/placeholder.png")}}" alt="picture" class="contained-img img-rounded">
                        <h4><a href="#">This is a small heading</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <img src="{{asset("img/placeholder.png")}}" alt="picture" class="contained-img img-rounded">
                        <h4><a href="#">This is a small heading</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>

            </div>
            <div class="pillow-30"></div>
        </div>
    </div>


    <div class="container-flex rdc rdcdeepred rdcwhite-text">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h1>Stories</h1>
                    <div class="pillow-20"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="info-card-big">
                        <img src="{{asset("img/placeholder.png")}}" alt="picture" class="contained-img img-rounded">
                        <h4><a href="#">This is a small heading</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card-big">
                        <img src="{{asset("img/placeholder.png")}}" alt="picture" class="contained-img img-rounded">
                        <h4><a href="#">This is a small heading</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card-big">
                        <img src="{{asset("img/placeholder.png")}}" alt="picture" class="contained-img img-rounded">
                        <h4><a href="#">This is a small heading</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>


            </div>
            <div class="pillow-30"></div>
        </div>
    </div>
@endsection
