@extends('layouts.standard')

@section('title', 'Location')

@section('flash_title', "Location")
@section('flash_text', "Find your way.")


@section('content')
<div class="container">
    <div class="pillow-50"></div>
    <div class="row">
        <div class="col-md-12">
            <p class="rdcorange-text bold">RDC is currently housed at NDSU’s (North Dakota State University) Research & Technology Park located in Fargo, North Dakota.  We are working with NDSU’s (highly acclaimed) Coatings & Polymers Research chemists, in conjunction with other leading private coatings and polymers top chemists/laboratories, specializing in advanced fire/thermal barriers, waterproofing, nano-technology and aerospace grade paint/coatings product research, development and testing.</p>
        </div>
    </div>
    <div class="pillow-30"></div>
    <div class="row">
        <div class="col-md-3">
            <h2>Adress</h2>
            <ul class="nav">
                <li>{{ $address["companyName"] }}</li>
                <li>{{ $address["street1"] }}</li>
                <li>{{ $address["street2"] }}</li>
                <li>{{ $address["city"] }}, {{ $address["state"] }} {{ $address["postalcode"] }}, {{ $address["country"] }}</li>
            </ul>
            <div class="pillow-30"></div>
            <a href="{{ URL::to('/contact') }}" class="btn btn-primary btn-block">Contact us</a>
        </div>
        <div class="col-md-9">
            <div id="map"></div>
        </div>
    </div>
    <div class="pillow-50"></div>
</div>
@endsection


<script src="{{asset("js/maps.js")}}"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApLmcCATzFtYdnERmYwp8On90Jae-J1PM&callback=initMap">
</script>
