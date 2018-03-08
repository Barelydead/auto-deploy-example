@extends('layouts.standard')

@section('title', 'Products')

@section('flash_img', "floor.jpg")
@section('flash_title', "Product Overview")
@section('flash_text', "Our highly advanced coating products are arguably the most enduring, highest tested paint or coating products on the global market today.")


@section('content')
<div class="row">
    {{-- vertical spacer --}}
    <div class="pillow-50">
    </div>
    <div class="col-md-12 col-md-offset-3">
        <p class="rdcorange-text bold">This information provides a brief overview of Red Diamond Coatings’ (RDC’s)
revolutionary, highly innovative coating products</p>
    </div>
</div>

    <div class="row">
        <div class="pillow-50">

        </div>
        <div class="col-md-10 col-md-offset-1">
            @foreach ($thumbnails as $thumbnail)
                <div class="col-md-2">
                    <div class="thumbnail info-text">
                        <img class='thumbnailimg' src='{{$thumbnail->imgurl}}' alt="prodamuimage1">
                        <div class="caption">
                            <h5 class="text-danger">@markdown($thumbnail->title)</h5>
                            @markdown($thumbnail->content)
                        </div>
                    </div>
                </div>
            @endforeach

        </div> <!-- /col-md-8 col-md-offset-2 -->
    </div> <!-- /row -->

    <div class="row">

            <div class="col-md-4 col-md-offset-2">
                <h2 class="rdcred-text">AEROSPACE GRADE THERMAL BARRIER</h2>
                <p style='color:black'>
                    We use the same ceramic technology within our formulations that was
                    developed by NASA to protect the Space Shuttle and
                    Apollo Spacecraft from extreme heat during re-entry…
                </p>
            </div>
            <div class="col-md-4">
                <div class="pillow-10">

                </div>
                <h4 class="rdcred-text">THIS CERAMIC TECHNOLOGY CONTRIBUTES GREATLY TO RDC'S:</h4>
                <ul style='list-style-type: square; color:black'>
                    <li>A1 Fire Rating</li>
                    <li>Thermal Barrier</li>
                    <li>Energy Savings</li>
                    <li>Lifetime Performance</li>
                </ul>
            </div>


        <!-- <div class="parallax-shuttle"></div> -->

    </div>
    <div class="pillow-50">

    </div>

        <!-- <div class="pillow-20">

        </div>

        <div class="row rdcwhite">
            <div class="col-md-3 col-md-offset-1 col-xs-3-col-xs-offset-3">
                <h4 class='bold text-danger'>THIS CERAMIC TECHNOLOGY CONTRIBUTES GREATLY TO RDC'S:</h4>
                <ul style='color:black; font-weight: bold; font-size: 16px; text-decoration: underline'>
                    <li>A1 Fire Rating</li>
                    <li>Thermal Barrier</li>
                    <li>Energy Savings</li>
                    <li>Lifetime Performance</li>
                </ul>
            </div>
        </div>
    </div> -->
    <!-- <div class="pillow-50">

    </div> -->
    <div class="row rdc rdcseablue">
        <div class="pillow-20">

        </div>
        <div class="col-md-2 col-md-offset-2 rdcwhite-text">
            <h4 class="rdcorange-text">HIGH FLEXIBILITY</h4>
            <p>
                RDC will withstand normal building expansion and contraction by stretching and recovering (like a rubber band) and will span most cracks under 1/8 th of an inch in width.
            </p>
            <p>
                In addition, RDC has great flexibility without cracking. Lack of sufficient elongation or flexibility will most assuredly lead to early chipping, cracking, and flaking.
            </p>
        </div>
        <div class="col-md-2 rdcwhite-text">
            <h4 class="rdcorange-text">MOISTURE MANAGEMENT</h4>
            <p>
                RDC was formulated with a precise perm rating of 12 which provides a water-proof quality, but also offers the perfect high breathability rating, which allows water vapor to escape, helping in the prevention of unhealthful mold and mildew inside wall structures, etc. This also greatly extends the life of both the coating and the substrate.
            </p>
        </div>
        <div class="col-md-2 rdcwhite-text">
            <h4 class="rdcorange-text">LASTS FOR DECADES - SAVES MONEY</h4>
            <p>
                RDC has a significantly higher spread rate, a substantially longer life with fewer repaints and will drastically reduce labor and energy costs. RDC will endure without failure for decades, providing consumers a Lifetime Warranty. This superior two-coat system offers a high degree of protection, resulting in a much lower life cycle cost, providing considerable savings to consumers.
            </p>
        </div>
        <div class="col-md-2 rdcwhite-text">
            <h4 class="rdcorange-text">THERMAL BARRIER - SAVES ENERGY</h4>
            <p>
                Due to RDC’s NASA grade ceramic and reflective technology, RDC augments existing insulation systems to significantly reduce energy costs, which tested at up to 52% savings in energy costs during summer months.
            </p>
            <p>
                RDC reflects back heat and slows heat conductivity to keep structures cooler in summer months.
            </p>
        </div>
    </div>

@endsection
