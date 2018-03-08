@extends('layouts.admin')

@section('title', 'Edit Contact Form Config')

@section('content')
<div class="container">
    <div class="pillow-30"></div>
    <div class="row">
        <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Configure contact form</div>
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
                    {!! Form::open(['route' => 'admin.contact.contact-form.post']) !!}
                        <div class="form-group col-md-6">
                            {!! Form::label('reciever', 'Reciever Email*') !!}
                            {!! Form::email('reciever', $mailConfig->reciever, ['class' => 'form-control', 'placeholder' => 'Reciever*', 'required' => '']) !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('sender', 'Sender Email*') !!}
                            {!! Form::email('sender', $mailConfig->sender, ['class' => 'form-control', 'placeholder' => 'Sender*', 'required' => '']) !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('sendername', 'From Name*') !!}
                            {!! Form::text('sendername', $mailConfig->sendername, ['class' => 'form-control', 'placeholder' => 'From Name*', 'required' => '']) !!}
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('subject', 'Subject') !!}
                            {!! Form::text('subject', $mailConfig->subject, ['class' => 'form-control', 'placeholder' => 'Subject*', 'required']) !!}
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