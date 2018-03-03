@extends('layouts.admin')

@section('title', 'Edit Contact Us')

@section('content')
<div class="container">
    <div class="row">
        <h1>Edit Contact Info</h1>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#contact-form">Contact Form</a></li>
            <li><a data-toggle="tab" href="#edit-address">Address</a></li>
            <li><a data-toggle="tab" href="#messages">Messages</a></li>

        </ul>

        <div class="tab-content">
            <div id="contact-form" class="tab-pane fade in active">
                <h3>Contact Form</h3>
                <p>Form to come,</p>
            </div>
            <div id="edit-address" class="tab-pane fade">
                <h3>Address</h3>
                <p>Form for address.</p>
            </div>
            <div id="messages" class="tab-pane fade">
                <h3>Messages</h3>
                <p>List submitted messages.</p>
            </div>
        </div>
    </div>
</div>
@endsection