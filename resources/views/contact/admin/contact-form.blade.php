@extends('layouts.admin')

@section('title', 'Edit Contact Form')

@section('content')
<div class="container">
    <div class="row">
        <h1>Edit Contact Form</h1>
        <div id="contact-form" class="col-md-8">
            <!-- <form method="post"> -->
            {!! Form::open(['route' => 'contact.post']) !!}
                <div class="form-group col-md-6">
                    {!! Form::email('reciever', $conf->reciever, ['class' => 'form-control', 'placeholder' => 'Reciever*', 'required' => '']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::email('sender', $conf->sender, ['class' => 'form-control', 'placeholder' => 'Sender*', 'required' => '']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('sendername', $conf->sendername, ['class' => 'form-control', 'placeholder' => 'From Name*', 'required' => '']) !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::text('subject', $conf->subject, ['class' => 'form-control', 'placeholder' => 'Subject*', 'required']) !!}
                </div>
                <div class="form-group col-md-12">
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                </div>
            <!-- </form> -->
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection