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
            <h2>WeatherSEAL&#8482; UnderCoat</h2>
            RDC is very confident we can replace most,
            if not all existing applications/installations of
            today’s required construction tar-paper,
            which is used primarily as a water barrier
            during the construction of just about all
            roofs and most exterior wall systems.
            Today’s construction tar-paper is harmful to
            the environment, rips and tears during
            installation, is compromised when nailed
            through, is much more labor intensive to
            apply and most of all—it is highly
            flammable.
            On the other hand, RDC’s future
            WeatherSEAL&#8482; UnderCoat:
            Tomorrow...
            <ul>
                <li>carries an A1 Fire Retardant Rating</li>
                <li>is water-based/Green & protects the environment</li>
                <li>is waterproof, yet breathable</li>
                <li>has a zero percent chance of water
                intrusion through the coating for the life
                of the roof/structure</li>
                <li>holds thermal properties that save
                energy</li>
                <li>can be quickly applied by standard paint
                sprayer, roller or brush</li>
                <li>self-seals around nails/punctures</li>
                <li>will bridge over spaces up to 1/8” wide
                between plywood boards</li>
                <li>will not crack, blister or delaminate and
                will last and protect for the life of the
                roof/structure</li>
            </ul>
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
    <div class="pillow-50"></div>
</div>
@endsection
