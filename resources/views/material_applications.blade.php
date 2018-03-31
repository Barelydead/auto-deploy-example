@extends('layouts.standard')

@section('title', 'Products')

@section('flash_title', "Materials for application")
@section('flash_text', "RDC products can be applied to virtually any substrate/surface material known to man on Planet Earth, usually without the need of any primers, including steel alloys, like titanium, aluminum, stainless steel, galvanized steel and others, along with fiberglass, carbon fiber, and on and on.")


@section('content')
<div class="row">
    {{-- vertical spacer --}}
    <div class="pillow-50">
    </div>
    <div class="col-md-12 col-md-offset-3">
        <p class="rdcorange-text bold">
            Highlighted below are the more common construction materials that can be coated/painted with RDC products, again, without primers.
        </p>
    </div>

</div>
<div class="row">
    <div class="container-flex">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="info-card">
                        <h4>WOOD</h4>
                        <img src="{{asset("img/materials/material_wood.png")}}" alt="material wood" class="contained-img img-rounded">
                        <div class="pillow-10"></div>
                        <p>

                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <h4>ASPHALT</h4>
                        <img src="{{asset("img/materials/material_asphalt.png")}}" alt="material ashpalt" class="contained-img img-rounded">
                        <div class="pillow-10"></div>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <h4>GLASS</h4>
                        <img src="{{asset("img/materials/material_glass.png")}}" alt="material glass" class="contained-img img-rounded">
                        <div class="pillow-10"></div>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <h4>CONCRETE</h4>
                        <img src="{{asset("img/materials/material_concrete2.png")}}" alt="material concrete" class="contained-img img-rounded">
                        <div class="pillow-10"></div>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="pillow-50"></div>

            <div class="row">
                <div class="col-md-3">
                    <div class="info-card">
                        <h4>VINYL</h4>
                        <img src="{{asset("img/materials/material_vinyl.png")}}" alt="material vinyl" class="contained-img img-rounded">
                        <div class="pillow-10"></div>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <h4>STEEL</h4>
                        <img src="{{asset("img/materials/material_steel.png")}}" alt="material steel" class="contained-img img-rounded">
                        <div class="pillow-10"></div>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <h4>PLASTIC</h4>
                        <img src="{{asset("img/materials/material_plastic.png")}}" alt="material plastic" class="contained-img img-rounded">
                        <div class="pillow-10"></div>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <h4>MASONRY</h4>
                        <img src="{{asset("img/materials/material_masonry.png")}}" alt="material masonry" class="contained-img img-rounded">
                        <div class="pillow-10"></div>
                        <p></p>
                    </div>
                </div>

            </div>
            <div class="pillow-30"></div>

        </div>
    </div>
</div>


@endsection
