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
<<<<<<< da0dbdc5bc4467c979ee7c038147b41a7b494d11
                @if ($category == 'all')
                    <div class="col-md-6">
                        <form action="#" method="GET">
                            <input type="hidden" name="category" value="<?= $category ?>">
                            <div class="input-group">
                                <input type="text" class="form-control" name='search' placeholder="Search for...">
                                <span class="input-group-btn">
                                    <input class="btn btn-primary" type="submit" name="searchbtn" value="Search">
                                    <input class="btn btn-primary" type="submit" name="allbtn" value="All">
                                    <!-- <button class="btn btn-primary" type="button">Search</button> -->
                                </span>
                            </div>
                            <label class="radio-inline"><input type="radio" name="searchcolumn" value='type' checked>Type</label>
                            <label class="radio-inline"><input type="radio" name="searchcolumn" value='title'>Title</label>
                            <label class="radio-inline"><input type="radio" name="searchcolumn" value='content'>Content</label>
                        </form>
                    </div>
                @else
                    <div class="col-md-6">

                    </div>
                @endif

                <div class="col-md-1 col-md-offset-2">
=======
                <div class="col-md-1 col-md-offset-8">
>>>>>>> Paginator url correction and select category when adding
                    <?php $addurl = '/admin/content/add?category='.$category; ?>
                    <a class='btn btn-primary' href="{{ URL::to($addurl) }}">+ Add</a>
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
                    <center>
                        <?= $tableHTML['pgnctrl'] ?>
                    </center>

                </div>
            </div>
            <!-- table row -->

        </div>
    </div>
</div>

@endsection
