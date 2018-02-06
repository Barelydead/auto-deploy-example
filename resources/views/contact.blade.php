
@extends('layouts.standard')

@section('title', 'About page')

@section('content')
<div class="container">
    <div class="row">
        <div id="contact-form" class="col-md-8">
            <form>
                <div class="form-group col-md-6">
                    <label for="firstname">First Name</label>
                    <input type="firstname" class="form-control" id="firstname" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="lastname">Last Name</label>
                    <input type="lastname" class="form-control" id="lastname" placeholder="Last Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Email Address">
                </div>
                <div class="form-group col-md-6">
                    <label for="phonenumber">Phone Number</label>
                    <input type="phonenumber" class="form-control" id="phonenumber" placeholder="Phone Number">
                </div>
                <div class="form-group col-md-6">
                    <label for="companyname">Company Name</label>
                    <input type="companyname" class="form-control" id="companyname" placeholder="Company Number">
                </div>
                <div class="form-group col-md-6">
                    <label for="title">Your Title</label>
                    <input type="title" class="form-control" id="title" placeholder="Your Title">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="option1" id="option1" value="option1" checked>
                    <label class="form-check-label" for="option1">
                        Option1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="option2" id="option2" value="option2" checked>
                    <label class="form-check-label" for="option2">
                        Option2
                    </label>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div id="contact-form" class="col-md-4">
            <div>
                Address {{ $adress->street }}
            </div>
        </div>
    </div>
</div>
@endsection
