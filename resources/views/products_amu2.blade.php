@extends('layouts.standard')

@section('title', 'Products')

@section('flash_img', "floor.jpg")
@section('flash_title', "Product Overview")
@section('flash_text', "Our highly advanced coating products are arguably the most enduring, highest tested paint or coating products on the global market today.")


@section('content')
<div class="row">
    {{-- vertical spacer --}}
    <div class="pillow-50">
    </div>
    <div class="col-md-12 col-md-offset-3">
        <p class="rdcorange-text bold">This information provides a brief overview of Red Diamond Coatings’ (RDC’s)
revolutionary, highly innovative coating products</p>
    </div>
</div>

    <div class="row">
        <div class="container-flex">
            <div class="container">
                <div class="pillow-50"></div>
                <div class="col-md-12">
                    @foreach ($content as $thumbnail)
                        @if ($thumbnail->subCategory == "thumbnail_first_row")
                            <?php $imageurl = "img/placeholder.png" ?>
                            @foreach ($images as $image)
                                @if ($image->content_id == $thumbnail->id)
                                    <?php $imageurl = "img/upload/".$image->filename ?>
                                @endif
                            @endforeach
                            <div class="col-md-3">
                                <div class="info-card">
                                    <img class='contained-img img-rounded' src='{{asset($imageurl)}}' alt="prodamuimage">
                                    <h5 class="text-danger">@markdown($thumbnail->title)</h5>
                                    @markdown($thumbnail->content)

                                </div>
                            </div>
                        @endif
                    @endforeach
                </div> <!-- /col-md-8 col-md-offset-2 -->
            </div>
        </div>
    </div> <!-- /row -->

    <div class="row">
        <div class="container-flex">
            <div class="container">
                <div class="pillow-50"></div>
                <div class="col-md-12">
                    @foreach ($content as $thumbnail)
                        @if ($thumbnail->subCategory == "thumbnail_second_row")
                            <?php $imageurl = "img/placeholder.png" ?>
                            @foreach ($images as $image)
                                @if ($image->content_id == $thumbnail->id)
                                    <?php $imageurl = "img/upload/".$image->filename ?>
                                @endif
                            @endforeach
                            <div class="col-md-3">
                                <div class="info-card">
                                    <img class='contained-img img-rounded' src='{{asset($imageurl)}}' alt="prodamuimage">
                                    <h5 class="text-danger">@markdown($thumbnail->title)</h5>
                                    @markdown($thumbnail->content)
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div> <!-- /col-md-8 col-md-offset-2 -->
            </div>
        </div>
    </div> <!-- /row -->

    <div class="row rdcseablue rdcwhite-text">
        <div class="container-flex">
            <div class="container">
                <div class="pillow-30"></div>
                @foreach ($content as $middlepart)
                    @if ($middlepart->subCategory == "middlepart_one")
                        <?php $imageurl = "img/placeholder.png" ?>
                        @foreach ($images as $image)
                            @if ($image->content_id == $middlepart->id)
                                <?php $imageurl = "img/upload/".$image->filename ?>
                            @endif
                        @endforeach
                        <div class="col-md-2">
                            <img class='contained-img img-rounded' src='{{asset($imageurl)}}' alt="prodamuimage">
                        </div>
                        <div class="col-md-3">
                            <div class="info-card">
                                <h5 class="rdcorange-text">@markdown($middlepart->title)</h5>
                                @markdown($middlepart->content)
                            </div>
                        </div>
                    @endif
                    @if ($middlepart->subCategory == "middlepart_two")
                    <div class="col-md-4">
                        <div class="info-card">
                            <h5 class="rdcorange-text">@markdown($middlepart->title)</h5>
                            @markdown($middlepart->content)
                        </div>
                    </div>
                    @endif
                    @if ($middlepart->subCategory == "middlepart_three")
                    <div class="col-md-3">
                        <div class="info-card">
                            <h5 class="rdcorange-text">@markdown($middlepart->title)</h5>
                            @markdown($middlepart->content)
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>




@endsection
