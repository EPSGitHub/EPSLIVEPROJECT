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
                        <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('post.index') }}">Blog post list</a> / Update</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">

               {{--  <div class="col-md-10">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h4 class="card-title">Update  Post</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Post Title</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="title" value="{{ $post->title }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Categories</label>
                                    <div class="col-md-9">

                                        <select class="form-control post_tag_select"  name="cat">

                                            <option value="{{ $post->postCat->id }}">{{ $post->postCat->name }}</option>

                                            @foreach ($post_category as $p_cat )

                                            <option  value= "{{ $p_cat->id  }}">{{ $p_cat->name }}</option>
                                            @endforeach


                                        </select>




                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Select Tag</label>
                                    <div class="col-md-8">
                                        @foreach ($post_tags as $ptag )
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="{{ $ptag->id }}" name="tags[]"
                                                @foreach ($post->Tags as $t )
                                                @if ($ptag->id == $t->id)
                                                checked

                                                @endif
                                                @endforeach


                                                > {{ $ptag->name }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Post Content</label>
                                    <div class="col-md-9">
                                        <textarea rows="5" cols="5" name="content"  class="form-control" id="ckeditor" placeholder="Enter text here"> {{ $post->description }}</textarea>
                                    </div>
                                </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3">Featured image</label>
                                        <div class="col-md-9">
                                            <label for="fimg" id="first"><img src="{{ URL::to('')}}/media/post/{{ $post->images }}" style="width:100px;cursor: pointer"/></label>
                                            <input class="form-control" type="hidden" name="old_image" value="{{ $post->images }}"  id="" style="display: none">
                                            <input class="form-control" type="file" name="new_image" id="fimg" style="display: none">
                                            <img src="" alt="" id="feather_img" style="max-width:30%;display:block">
                                            <label for="fimg" style="display: ;margin-bottom: 15px" id="second"><span class="btn btn-sm btn-primary mt-2 "> Change Image</span></label>
                                        </div>
                                    </div>


                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}




            </div>


            <div class="row">

                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Update Blog Post </h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" href="#basictab1" data-toggle="tab">English</a></li>
                                <li class="nav-item"><a class="nav-link" href="#basictab2" data-toggle="tab">বাংলা </a></li>
                                <li class="nav-item"><a class="nav-link " href="#basictab3" data-toggle="tab" >SEO</a></li>



                            </ul>
                            <form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            <div class="tab-content">
                                <div class="tab-pane show active" id="basictab1">



                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Title</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="entitle" value="{{ $post->title_en }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Categories</label>
                                        <div class="col-md-9">

                                            <select class="form-control post_tag_select"  name="cat">

                                                <option value="{{ $post->postCat->id }}">{{ $post->postCat->name_en }}</option>

                                                @foreach ($post_category as $p_cat )

                                                <option  value= "{{ $p_cat->id  }}">{{ $p_cat->name_en }}</option>
                                                @endforeach


                                            </select>




                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Select Tag</label>
                                        <div class="col-md-9">
                                            @foreach ($post_tags as $ptag )
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="{{ $ptag->id }}" name="tags[]"
                                                    @foreach ($post->Tags as $t )
                                                    @if ($ptag->id == $t->id)
                                                    checked

                                                    @endif
                                                    @endforeach


                                                    > {{ $ptag->name_en }}
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Scrapt Text</label>
                                        <div class="col-md-9">
                                            <textarea rows="5" cols="5" name="shortdes_en" maxlength="120" class="form-control"  placeholder="Enter text here">{{ $post->shortdes_en }}</textarea>
                                        </div>
                                    </div>








                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Content</label>
                                        <div class="col-md-9">
                                            <textarea rows="5" cols="5" name="endes"  class="form-control" id="ckeditor" placeholder="Enter text here">{{ $post->description_en }}</textarea>
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

                                            <label for="fimg" id="first"><img src="{{ URL::to('')}}/media/post/{{  $post->images_en }}" style="width:100px;cursor: pointer"/></label>
                                            <input class="form-control" type="hidden" name="old_image" value="{{ $post->images_en }}"  id="" style="display: none">
                                            <input class="form-control" type="file" name="new_image" id="fimg" style="display: none">
                                            <img src="" alt="" id="feather_img" style="max-width:30%;display:block">
                                            <label for="fimg" style="display: ;margin-bottom: 15px" id="second"><span class="btn btn-sm btn-primary mt-2 "> Change Image</span></label>


                                            </div>
                                        </div>








                                </div>
                                <div class="tab-pane" id="basictab2">








                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">টাইটেল </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  name="bntitle" value="{{ $post->title_bn }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">সংক্ষিপ্ত বিবরণ</label>
                                        <div class="col-md-9">
                                            <textarea rows="5" cols="5" name="shortdes_bn" maxlength="120" class="form-control"  placeholder="Enter text here">{{ $post->shortdes_bn }}</textarea>
                                        </div>
                                    </div>









                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">কনটেন্ট </label>
                                        <div class="col-md-9">
                                            <textarea rows="5" cols="5" name="bndes"  class="form-control" id="ckeditorbn" placeholder="Enter text here">{{ $post->description_bn }}</textarea>
                                        </div>
                                    </div>



                                        <div class="form-group row">
                                            <label class="col-form-label col-md-2"> ছবি </label>
                                            <div class="col-md-9">
                                                <label for="bnfimg" id="bnfirst"><img src="{{ URL::to('')}}/media/post/{{  $post->images_bn }}" style="width:100px;cursor: pointer"/></label>
                                                <input class="form-control" type="hidden" name="old_bnimage" value="{{ $post->images_bn }}"  id="" style="display: none">
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
                                        <label class="col-form-label col-md-2">Image Alt text</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="enalttext" value="{{ $post->alt_en }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Bangla Image Alt text</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="bnalttext" value="{{ $post->alt_bn }}">
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


