@extends('layouts.admin')

@section('title', 'View Messages')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>View Message #{{ $message['id'] }}</h1>
        </div>
        <div class="col-md-12">
            <strong>Firstname: </strong>{{ $message['firstname'] }}<br>
            <strong>Lastname: </strong>{{ $message['lastnamename'] }}<br>
            <strong>Email: </strong>{{ $message['email'] }}</br>
            <strong>Title: </strong>{{ $message['title'] }}</br>
            <strong>Phonenumber: </strong>{{ $message['phoneNumber'] }}</br>
            <strong>Company Name: </strong>{{ $message['companyName'] }}</br>
            <strong>Message: </strong>{{ $message['message'] }}</br>
            <strong>Created: </strong>{{ $message['created_at'] }}</br>
        </div>
        <div class="form-group col-md-12">
            <a href="{{ url('admin/contact/messages') }}" type="button" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
@endsection