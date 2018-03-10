@extends('layouts.admin')

@section('title', 'Admin | Products')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit</h1>

            @foreach ($content as $row)
                <form action="{{ URL::to('/admin/content/editcontentprocess') }}" method="post">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class='form-control' type="text" name="title" value="{{$row->title}}">
                    </div>
                    <div class="form-group">
                        <label for="imgurl">imgurl</label>
                        <input class='form-control' type="text" name="imgurl" value="{{$row->imgurl}}">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea id="form-element-data" class='form-control md-input' name="content" rows="8" cols="80" data-provide='markdown' style="resize: none;">{{$row->content}}</textarea>
                    </div>
                    <input type="hidden" name="id" value="{{$row->id}}">
                    <input type="hidden" name="category" value="{{$row->category}}">
                    <div class="form-group">
                        <input class='btn btn-primary' type="submit" name="editbtn" value="Edit">
                        <input class='btn btn-default' type="submit" name="cancelbtn" value="Cancel">
                    </div>
                </form>
            @endforeach

        </div>
    </div>

</div>

@endsection
