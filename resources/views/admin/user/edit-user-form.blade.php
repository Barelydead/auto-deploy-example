@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="pillow-30"></div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update information</div>
                <div class="panel-body">
                    <form class="" action="{{ URL::to("/admin/user/edit/edituserprocess") }}" method="post">
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" name="email" value="{{ $user->email }}" class="form-control">

                        </div>

                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" name="" value="update info" class="btn btn-primary">
                    </form>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Update Password</div>
                <div class="panel-body">
                    <form class="" action="{{ URL::to("/admin/user/edit/edituserpassword") }}" method="post">
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" name="password" value="" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="re-password">New Password again</label>
                            <input type="password" name="re-password" value="" class="form-control">

                        </div>

                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" name="" value="change password" class="btn btn-primary">
                    </form>
                </div>
            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>


@endsection
