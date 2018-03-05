@extends('layouts.admin')

@section('title', 'View Messages')

@section('content')
<div class="container">
    <div class="row">
        <h1>View Messages</h1>
        <div class="table-responsive">          
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Message</th>
                <th>Created</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message['id'] }}</td>
                        <td>{{ $message['email'] }}</td>
                        <td>{{ $message['firstname'] }}</td>
                        <td>{{ $message['lastname'] }}</td>
                        <td>{{ substr($message['message'], 0, 50) }} ...</td>
                        <td>{{ $message['created_at'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection