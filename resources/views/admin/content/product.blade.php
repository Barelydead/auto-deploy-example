@extends('layouts.admin')

@section('title', 'Admin | Products')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Product page</h1>
            <table class='table'>
                <thead>
                    <tr>
                        <th>id</th>

                        <th>type</th>

                        <th>category</th>

                        <th>title</th>

                        <th>content</th>
                    </tr>
                </thead>
                <tbody>

                        @foreach ($content as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->type }}</td>
                                <td>{{ $row->category }}</td>
                                <td>
                                    <div id='firstname_{{$row->id}}_id' onclick="toForm('firstname_{{$row->id}}_id', '{{$row->id}}', '{{$row->title}}', 'title')">
                                        {{ $row->title }}
                                    </div>
                                </td>
                                <td>
                                    {{ $row->content }}
                                </td>
                            </tr>
                        @endforeach


                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection
