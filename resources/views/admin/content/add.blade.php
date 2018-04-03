@extends('layouts.admin')

@section('title', 'Admin | Products')

@section('content')
<div class="container">
    <div class="pillow-30">
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <h1>Add</h1>
            <form action="{{ URL::to('/admin/content/addcontentprocess') }}" method="post">
                <div class="form-group">
                    <label for="title">Type</label>
                    <input class='form-control' type="text" name="type" value="">
                </div>
                <div class="form-group">
                    <label for="title">Category</label>
                    <select class="form-control" name="category">
                        <option value="home" <?= $selected['home'] ?>>Home</option>
                        <option value="about" <?= $selected['about'] ?>>About us</option>
                        <option value="applications" <?= $selected['applications'] ?>>Applications</option>
                        <option value="future" <?= $selected['future'] ?>>Future</option>
                        <option value="research" <?= $selected['research'] ?>>Research</option>
                        <option value="products" <?= $selected['products'] ?>>Products</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class='form-control' type="text" name="title" value="">
                </div>
                <div class="form-group">
                    <label for="title">Subcategory</label>
                    <input class='form-control' type="text" name="subcategory" value="">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea id="form-element-data" class='form-control md-input' name="content" rows="8" cols="80" data-provide='markdown' style="resize: none;"></textarea>
                </div>
                <div class="form-group">
                    <label for="title">Author</label>
                    <input class='form-control' type="text" name="author" value="">
                </div>
                <div class="form-group">
                    <label for="title">Path</label>
                    <input class='form-control' type="text" name="path" value="">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input class="" type="file" name="image">
                </div>
                <div class="form-group">
                    <input class='btn btn-primary' type="submit" name="addbtn" value="Add">
                    <input class='btn btn-default' type="submit" name="cancelbtn" value="Cancel">
                </div>
            </form>


        </div>
    </div>

</div>

@endsection
