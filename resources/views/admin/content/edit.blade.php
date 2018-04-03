

@extends('layouts.admin')

@section('title', 'Admin | Products')

@section('content')
<div class="container">
    <div class="pillow-30"></div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">
        <h1>Edit</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            @foreach ($content as $row)
                <form action="{{ URL::to('/admin/content/editcontentprocess') }}" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class='form-control' type="text" name="title" value="{{$row->title}}">
                    </div>
                    <div class="form-group">
                        <label for="imgurl">Subcategory</label>
                        <input class='form-control' type="text" name="subcategory" value="{{$row->subCategory}}">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea id="form-element-data" class='form-control md-input' name="content" rows="8" cols="80" data-provide='markdown' style="resize: none;" onkeyup="previewFunction(event)" onfocus='previewFunction(event)'>{{$row->content}}</textarea>
                    </div>

                    @foreach ($images as $image)
                        <div class="form-group">
                            <input type="hidden" name="imageid[]" value="{{ $image->id }}">
                            <img src="{{asset('img/upload/' . $image->filename)}}" class="thumbnailimg"><br>
                            <label for="imgurl">Title</label>
                            <input class='form-control' type="text" name="imagetitle[]" value="{{$image->title}}">
                            <label for="imgurl">Region</label>
                            <input class='form-control' type="text" name="imageregion[]" value="{{$image->region}}">

                            <input type="checkbox" name="imageremove[]" value="{{ $image->id }}"> Delete<br>
                        </div>
                    @endforeach

                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input type="file" name="image">
                    </div>

                    <input type="hidden" name="id" value="{{$row->id}}">
                    <input type="hidden" name="category" value="{{$row->category}}">
                    <div class="form-group">
                        <input class='btn btn-primary' type="submit" name="editbtn" value="Edit">
                        <input class='btn btn-default' type="submit" name="cancelbtn" value="Cancel">
                    </div>
                </form>
            @endforeach
        </div> <!-- /first column md-6 -->

        <div class='col-md-6'>
            <div class="row">
                <div class="col-md-12">
                    <h4 style='margin-top:110px;'>Preview</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id='preview'></div>
                </div>
            </div>
        </div> <!-- second column md-6 -->

    </div> <!-- /row -->
</div> <!-- /container -->

@endsection
