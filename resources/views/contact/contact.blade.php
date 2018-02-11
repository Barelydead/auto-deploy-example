
@extends('layouts.standard')

@section('title', 'About page')

@section('content')
<div class="container">
    <div class="row">
        <div id="contact-form" class="col-md-8">
            <!-- <form method="post"> -->
            {!! Form::open(['route' => 'contact.post']) !!}
                <div class="form-group col-md-6">
                    {!! Form::label('firstname', 'First Name') !!}
                    {!! Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('lastname', 'Last Name') !!}
                    {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('email', 'Email Address') !!}
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('phonenumber', 'Phone Number') !!}
                    {!! Form::text('phonenumber', null, ['class' => 'form-control', 'placeholder' => 'Phone Number']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('companyname', 'Company Name') !!}
                    {!! Form::text('companyname', null, ['class' => 'form-control', 'placeholder' => 'Company Name']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('title', 'Your Title') !!}
                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Your Title']) !!}
                </div>
                <div class="form-check">
                    <!-- <input class="form-check-input" type="radio" name="option1" id="option1" value="option1">
                    <label class="form-check-label" for="option1">
                        Option1
                    </label> -->
                </div>
                <div class="form-check">
                    <!-- <input class="form-check-input" type="radio" name="option2" id="option2" value="option2">
                    <label class="form-check-label" for="option2">
                        Option2
                    </label> -->
                </div>
                <div class="form-group">
                    <!-- <label for="message">Message</label> -->
                    <!-- <textarea class="form-control" name="message" id="message" rows="3" placeholder="Message"></textarea> -->
                    {!! Form::label('message', 'Message') !!}
                    {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message']) !!}
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
            <!-- </form> -->
            {!! Form::close() !!}
        </div>
        <div id="contact-form" class="col-md-4">
            <div>
                Address {{ $adress->street }}
            </div>
        </div>
    </div>
</div>
@endsection
