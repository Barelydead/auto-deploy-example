@extends('layouts.admin')

@section('content')

<div class="container">
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>name</th>
                <th>mail</th>
                <th>created</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                    <td> {{ $user->created_at }} </td>
                    <td> <a href="{{ URL::to("/admin/user/edit/$user->id") }}">Edit</a> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
