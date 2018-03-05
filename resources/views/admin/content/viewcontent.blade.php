@extends('layouts.admin')

@section('title', 'Admin | Products')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="pillow-20"></div>
                <div class="col-md-3">
                    <h4><?= ucfirst($category) ?> page</h4>
                </div>
                <div class="col-md-1 col-md-offset-8">
                    <a class='btn btn-primary' href="{{ URL::to('/admin/content/add') }}">+ Add</a>
                </div>
            </div>
            <!-- headline row -->

            <div class="row">
                <div class="col-md-12">

                    <table class='table'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>TYPE</th>
                                <th>CATEGORY</th>
                                <th>TITLE</th>
                                <th>CONTENT</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($tableHTML['tableres'] as $row)
                                    <?php
                                    $editurl = url('/admin/content/edit/'.$row->id);
                                    ?>
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
                                        <td>
                                            <a href="{{$editurl}}">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <?= $tableHTML['pgnctrl'] ?>
                </div>
            </div>
            <!-- table row -->

        </div>
    </div>
</div>

@endsection
