
@extends('layouts.standard')

@section('title', 'Contact Us')

@section('flash_title', "Contact Us")
@section('flash_text', "For more information contact us.")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>@yield('title')</h1>
        </div>
        <div id="contact-form" class="col-md-8">
            {!! Form::open(['route' => 'contact.post']) !!}
                <div class="form-group col-md-6 hidden">
                    {!! Form::email('emailtest', null, ['class' => 'form-control', 'placeholder' => 'Email Address']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => 'First Name*', 'required' => '']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Last Name*', 'required' => '']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address*', 'required' => '']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('phoneNumber', null, ['class' => 'form-control', 'placeholder' => 'Phone Number']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('companyName', null, ['class' => 'form-control', 'placeholder' => 'Company Name']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Your Title']) !!}
                </div>
                <div class="form-group col-md-12">
                    {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message*', 'required' => '']) !!}
                </div>
                <div class="form-group col-md-12">
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
        <div id="contact-address" class="col-md-4">
            <b>Address:</b><br>
            {{ $address["companyName"] }}<br>
            {{ $address["street1"] }}<br>
            {{ $address["street2"] }}<br>
            {{ $address["city"] }}, {{ $address["state"] }} {{ $address["postalcode"] }}, {{ $address["country"] }}<br>
            <b>Telephone:</b><br>
            {{ $address["telephone"] }}<br>
            <b>Email:</b><br>
            <a href="mailto:{{ $address["email"] }}">{{ $address["email"] }}</a><br>
        </div>
    </div>
</div>
@endsection
