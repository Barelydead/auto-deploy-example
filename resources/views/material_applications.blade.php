@extends('layouts.standard')

@section('title', 'Products')

@section('flash_title', "Materials for application")
@section('flash_text', "RDC products can be applied to virtually any substrate/surface material known to man on Planet Earth, usually without the need of any primers, including steel alloys, like titanium, aluminum, stainless steel, galvanized steel and others, along with fiberglass, carbon fiber, and on and on.")


@section('content')
<div class="container">
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
</div>

    <div class="container-flex">
        <div class="container">
            <h3 class="text-danger">MATERIALS</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="info-card">
                        <h4><?= $wood[0]->title ?></h4>
                        <img src="{{asset("img/materials/material_wood.png")}}" alt="material wood" class="contained-img img-rounded">
                        <!-- <div class="pillow-10"></div> -->
                        <p>
                            @markdown($wood[0]->content)
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <h4><?= $asphalt[0]->title ?></h4>
                        <img src="{{asset("img/materials/material_asphalt.png")}}" alt="material ashpalt" class="contained-img img-rounded">

                        <p>
                            @markdown($asphalt[0]->content)
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <h4><?= $glass[0]->title ?></h4>
                        <img src="{{asset("img/materials/material_glass.png")}}" alt="material glass" class="contained-img img-rounded">

                        <p>
                            @markdown($glass[0]->content)
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <h4><?= $concrete[0]->title ?></h4>
                        <img src="{{asset("img/materials/material_concrete2.png")}}" alt="material concrete" class="contained-img img-rounded">

                        <p>
                            @markdown($concrete[0]->content)
                        </p>
                    </div>
                </div>
            </div>

            <div class="pillow-50"></div>

            <div class="row">
                <div class="col-md-3">
                    <div class="info-card">
                        <h4><?= $vinyl[0]->title ?></h4>
                        <img src="{{asset("img/materials/material_vinyl.png")}}" alt="material vinyl" class="contained-img img-rounded">

                        <p>
                            @markdown($vinyl[0]->content)
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <h4><?= $steel[0]->title ?></h4>
                        <img src="{{asset("img/materials/material_steel.png")}}" alt="material steel" class="contained-img img-rounded">

                        <p>
                            @markdown($steel[0]->content)
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <h4><?= $plastic[0]->title ?></h4>
                        <img src="{{asset("img/materials/material_plastic.png")}}" alt="material plastic" class="contained-img img-rounded">

                        <p>
                            @markdown($plastic[0]->content)
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <h4><?= $masonry[0]->title ?></h4>
                        <img src="{{asset("img/materials/material_masonry.png")}}" alt="material masonry" class="contained-img img-rounded">

                        <p>
                            @markdown($masonry[0]->content)
                        </p>
                    </div>
                </div>
            </div>
            <div class="pillow-30"></div>
        </div>
    </div>
    <div class="container-flex rdc rdcseablue rdcwhite-text">
        <div class="container">
            <h3>COMMERCIAL APPLICATIONS</h3>

            <div class="row">
                <div class="col-md-3">
                    <div class="info-card">
                        <h4><?= $houses[0]->title ?></h4>
                        <img src="{{asset("img/commercials/commercial_houses.png")}}" alt="commericals houses" class="contained-img img-rounded">
                        <div class="pillow-10"></div>
                        <p>
                            @markdown($houses[0]->content)
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <h4><?= $bridges[0]->title ?></h4>
                        <img src="{{asset("img/commercials/commercial_bridges.png")}}" alt="commericals bridges" class="contained-img img-rounded">
                        <div class="pillow-10"></div>
                        <p>
                            @markdown($bridges[0]->content)
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <h4><?= $military[0]->title ?></h4>
                        <img src="{{asset("img/commercials/commercial_military.png")}}" alt="commericals military" class="contained-img img-rounded">
                        <div class="pillow-10"></div>
                        <p>
                            @markdown($military[0]->content)
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <h4><?= $stripings[0]->title ?></h4>
                            <img src="{{asset("img/commercials/commercial_roads.png")}}" alt="commericals roads" class="contained-img img-rounded">
                        <div class="pillow-10"></div>
                        <p>
                            @markdown($stripings[0]->content)
                        </p>
                    </div>
                </div>
            </div>
            <!-- /first commercial row -->
            <!-- second commercial row -->
            <div class="row">
                <div class="col-md-3">
                    <div class="info-card">
                        <h4><?= $turbines[0]->title ?></h4>
                        <img src="{{asset("img/commercials/commercial_wind_turbines.png")}}" alt="commericals houses" class="contained-img img-rounded">
                        <div class="pillow-10"></div>
                        <p>
                            @markdown($turbines[0]->content)
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <h4><?= $roofs[0]->title ?></h4>
                        <img src="{{asset("img/commercials/commercial_roofs.png")}}" alt="commericals bridges" class="contained-img img-rounded">
                        <div class="pillow-10"></div>
                        <p>
                            @markdown($roofs[0]->content)
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <h4><?= $pipelines[0]->title ?></h4>
                        <img src="{{asset("img/commercials/commercial_pipelines.png")}}" alt="commericals military" class="contained-img img-rounded">
                        <div class="pillow-10"></div>
                        <p>
                            @markdown($pipelines[0]->content)
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-card">
                        <h4><?= $ports[0]->title ?></h4>
                            <img src="{{asset("img/commercials/commercial_ships_ports.png")}}" alt="commericals roads" class="contained-img img-rounded">
                        <div class="pillow-10"></div>
                        <p>
                            @markdown($ports[0]->content)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
