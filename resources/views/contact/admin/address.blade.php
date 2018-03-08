@extends('layouts.admin')

@section('title', 'Edit Address')

@section('content')
<div class="container">
    <div class="pillow-30"></div>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Edit address</div>
            <div class="panel-body">

                <div class="col-md-12">
                    @if ($result === true)
                        <div class="alert alert-success">
                            {!! $resultMsg !!}
                        </div>
                    @endif
                </div>
                <div id="contact-form" class="col-md-8">
                    <!-- <form method="post"> -->
                    {!! Form::open(['route' => 'admin.contact.address.post']) !!}
                        <div class="form-group col-md-6">
                            {!! Form::label('companyName', 'Company Name') !!}
                            {{ Form::text('companyName', $address['companyName'], ['class' => 'form-control', 'placeholder' => 'Company Name']) }}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('street1', 'Street1') !!}
                            {{ Form::text('street1', $address['street1'], ['class' => 'form-control', 'placeholder' => 'Street1']) }}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('street2', 'Street2') !!}
                            {{ Form::text('street2', $address['street2'], ['class' => 'form-control', 'placeholder' => 'Street2']) }}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('postalcode', 'Postalcode') !!}
                            {{ Form::text('postalcode', $address['postalcode'], ['class' => 'form-control', 'placeholder' => 'Postalcode']) }}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('city', 'City') !!}
                            {{ Form::text('city', $address['city'], ['class' => 'form-control', 'placeholder' => 'City']) }}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('state', 'State') !!}
                            {{ Form::text('state', $address['state'], ['class' => 'form-control', 'placeholder' => 'State']) }}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('country', 'Country') !!}
                            {{ Form::text('country', $address['country'], ['class' => 'form-control', 'placeholder' => 'Country']) }}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('telephone', 'Telephone') !!}
                            {{ Form::text('telephone', $address['telephone'], ['class' => 'form-control', 'placeholder' => 'Telephone']) }}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('email', 'Email') !!}
                            {{ Form::text('email', $address['email'], ['class' => 'form-control', 'placeholder' => 'Email']) }}
                        </div>
                        <div class="form-group col-md-12">
                            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                        </div>
                    <!-- </form> -->
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection