@extends('layouts.app')

@section('main-content')

<div class="page-wrapper">

    <div class="content container-fluid">
@include('validate')
                <!-- Page Header -->
  <div class="page-header">
    <div class="row">
        <div class="col-sm-12">

            <ul class="breadcrumb">
                <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('pressManage.index') }}">Press post list</a> / Update</li>
            </ul>
        </div>
    </div>
</div>
<!-- /Page Header -->




            <div class="row">

                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Update Press Post </h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" href="#basictab1" data-toggle="tab">English</a></li>
                                <li class="nav-item"><a class="nav-link" href="#basictab2" data-toggle="tab">Slider </a></li>
                                <li class="nav-item"><a class="nav-link " href="#basictab3" data-toggle="tab" >SEO</a></li>



                            </ul>
                            <form action="{{ route('pressManage.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            <div class="tab-content">
                                <div class="tab-pane show active" id="basictab1">

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Post Type</label>
                                        <div class="col-md-9">

                                            <select class="form-control post_tag_select"  name="type">

                                                <option value="{{ $post->type }}">{{ $post->type }}</option>
                                                <option  value="English">English</option>
                                                <option  value="Bangla">Bangla</option>



                                            </select>




                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Title</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Categories</label>
                                        <div class="col-md-9">

                                            <select class="form-control post_tag_select"  name="category">

                                                <option value="{{ $post->postCat->id }}">{{ $post->postCat->name_en }}</option>

                                                @foreach ($post_category as $p_cat )

                                                <option  value= "{{ $p_cat->id  }}">{{ $p_cat->name_en }}</option>
                                                @endforeach


                                            </select>




                                        </div>
                                    </div>





                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Short Text</label>
                                        <div class="col-md-9">
                                            <textarea rows="5" cols="5" name="shortdes" maxlength="100"  class="form-control"  placeholder="Enter text here">{{ $post->shortdes}}</textarea>
                                        </div>
                                    </div>








                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Content</label>
                                        <div class="col-md-9">
                                            <textarea rows="5" cols="5" name="description"  class="form-control" id="ckeditor" placeholder="Enter text here">{{ $post->description }}</textarea>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Published By</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="publisher" value="{{ $post->published_by }}">

                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">published  Date</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="publishdate" value="{{ $post->published_date}}">
                                            <p>Ex. 24 Aug 2022 (Date (3_letters_of_Month) Year )</p>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Source Link</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="sourcelink" value="{{ $post->source_link }}">
                                        </div>
                                    </div>




                                        <div class="form-group row">
                                            <label class="col-form-label col-md-2">Featured image</label>
                                            <div class="col-md-9">
            {{--                                     <img src="{{ URL::to('') }}/media/event/{{ $post->featured_images_en}}" style="width:300px" alt=""> <br>
                                                <label for="fimg" id="first"><img src="{{ URL::to('admin/assets/img/camera.jpg') }}" style="width:100px;cursor: pointer"/></label>
                                                <input class="form-control" type="file" name="enfimg" id="fimg" style="display: none">
                                                <img src="" alt="" id="feather_img" style="max-width:30%;display:block">
                                                <label for="fimg" style="display: none;margin-bottom: 15px" id="second"><span class="btn btn-primary mt-2 "> Change Image</span></label> --}}

                                            <label for="fimg" id="first"><img src="{{ URL::to('')}}/media/press/{{  $post->feature_img }}" style="width:100px;cursor: pointer"/></label>
                                            <input class="form-control" type="hidden" name="old_image" value="{{ $post->feature_img }}"  id="" style="display: none">
                                            <input class="form-control" type="file" name="new_image" id="fimg" style="display: none">
                                            <img src="" alt="" id="feather_img" style="max-width:30%;display:block">
                                            <label for="fimg" style="display: ;margin-bottom: 15px" id="second"><span class="btn btn-sm btn-primary mt-2 "> Change Image</span></label>


                                            </div>
                                        </div>








                                </div>
                                <div class="tab-pane" id="basictab2">










                                        <div class="form-group row">
                                            <label class="col-form-label col-md-2"> Slider image </label>
                                            <div class="col-md-9">
                                                <label for="bnfimg" id="bnfirst"><img src="{{ URL::to('')}}/media/press/{{  $post->slide_img }}" style="max-width:800px;cursor: pointer"/></label>
                                                <input class="form-control" type="hidden" name="old_bnimage" value="{{ $post->slide_img }}"  id="" style="display: none">
                                                <input class="form-control" type="file" name="new_bnimage" id="bnfimg" style="display: none">
                                                <img src="" alt="" id="bnfeather_img" style="max-width:30%;display:block">
                                                <label for="bnfimg" style="display: ;margin-bottom: 15px" id="second"><span class="btn btn-sm btn-primary mt-2 "> Change Image</span></label>
                                            </div>
                                        </div>





                                </div>



                                <div class="tab-pane" id="basictab3">

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">title</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="seo_title" value="{{ $post->seo_title }}">
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Meta Description</label>
                                        <div class="col-md-9">
                                            <textarea rows="5" cols="5" name="seo_meta"  class="form-control" id="ckeditor" placeholder="Enter text here">{{ $post->seo_meta }}</textarea>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2"> Feature Image Alt text</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="fimgalttext" value="{{ $post->fimg_alt }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Slider Image Alt text</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="slideralttext" value="{{ $post->slideimg_alt }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Slug</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="slug" value="{{ $post->slug }}">
                                        </div>
                                    </div>

                                </div>



















                            </div>

                            <input type="submit" class="event_submit" style="float:right" value="Update" name="" id="">

                            </form>
                        </div>
                    </div>

                </div>
        </div>


    </div>
</div>

@endsection


