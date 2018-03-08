

@extends('layouts.admin')

@section('title', 'Admin | Products')

@section('content')
<div class="container">
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
                    <!-- <div class="form-group">
                        <label for="imgurl">imgurl</label>
                        <input class='form-control' type="text" name="imgurl" value="{{$row->imgurl}}">
                    </div> -->
                    <div class="form-group">
                        <label for="imgurl">imgurl</label>
                        <input class='form-control' type="text" name="imgurl" value="{{$row->imgurl}}">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea id="form-element-data" class='form-control md-input' name="content" rows="8" cols="80" data-provide='markdown' style="resize: none;" onkeyup="previewFunction(event)" onfocus="previewFunction(event)">{{$row->content}}</textarea>
                    </div>


                    <div class="form-group">
                        <input type="hidden" name="currentImage" value="{{ $row->imgurl }}">
                        @if ($row->imgurl != null)
                            <img src="{{ url('/img/upload') }}/{{ $row->imgurl }}" class="thumbnailimg"><br>
                            <input type="checkbox" name="imageremove" value="remove"> Delete<br>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input class="form-control" type="file" name="image">
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
            <h4 style='margin-top:110px;'>Preview</h4>
            <div id='preview'>

            </div>
        </div> <!-- second column md-6 -->

    </div> <!-- /row -->
</div> <!-- /container -->

@endsection
