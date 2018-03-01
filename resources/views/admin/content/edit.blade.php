@extends('layouts.admin')

@section('title', 'Admin | Products')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit</h1>

            @foreach ($content as $row)
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class='form-control' type="text" name="title" value="{{$row->title}}">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea id="form-element-data" class='form-control md-input' name="content" rows="8" cols="80" data-provide='markdown' style="resize: none;">{{$row->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <input class='btn btn-default' type="submint" name="editbtn" value="Edit">
                    </div>
                </form>
            @endforeach

        </div>
    </div>

</div>

@endsection
