@extends('layouts.admin')

@section('content')

<div class="container">
    <form class="" action="" method="post">
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control">

        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" value="{{ $user->email }}" class="form-control">

        </div>
        <input type="submit" name="" value="update info" class="btn btn-primary">
    </form>

    <form class="" action="" method="post">
        <div class="form-group">
            <label for="password">password</label>
            <input type="text" name="password" value="" class="form-control">

        </div>
        <div class="form-group">
            <label for="re-password">re-password</label>
            <input type="text" name="re-password" value="" class="form-control">

        </div>
        <input type="submit" name="" value="save changes" class="btn btn-primary">
    </form>
</div>

@endsection
