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
                @foreach ($tableHTML['tableres'] as $row)
                    <tr>
                        <td><a href="<?= url('admin/contact/message', ['id' => $row->id]); ?>">{{ $row->id }}</a></td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->firstname }}</td>
                        <td>{{ $row->lastname }}</td>
                        <td>{{ substr($row->message, 0, 50) }} ...</td>
                        <td>{{ $row->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <center>
                <?= $tableHTML['pgnctrl'] ?>
            </center>
        </div>
    </div>
</div>
@endsection