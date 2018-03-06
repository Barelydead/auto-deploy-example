@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="pillow-30"></div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Change Password</div>
                <div class="panel-body">
                    <form class="" action="{{ URL::to("/admin/user/changepasswordproccess") }}" method="post">
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" name="password" value="" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="re-password">New Password again</label>
                            <input type="password" name="re-password" value="" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="re-password">Old password</label>
                            <input type="password" name="old-password" value="" class="form-control">
                        </div>

                        <input type="hidden" name="id" value="{{ $id }}">
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
