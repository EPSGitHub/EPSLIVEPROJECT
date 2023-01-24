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
                        <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('eventpost.index') }}">Event list</a> / Update</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">

                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Update Event </h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" href="#basictab1" data-toggle="tab">English</a></li>
                                <li class="nav-item"><a class="nav-link" href="#basictab2" data-toggle="tab">বাংলা </a></li>
                                <li class="nav-item"><a class="nav-link " href="#basictab3" data-toggle="tab" >SEO</a></li>
                                <li class="nav-item"><a class="nav-link " href="#basictab4" data-toggle="tab" >Gallery Link</a></li>


                            </ul>
                            <form action="{{ route('eventpost.update',$event->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            <div class="tab-content">
                                <div class="tab-pane show active" id="basictab1">


                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Event Date</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="endate" value="{{ $event->event_date_en }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Event type</label>


                                        <div class="col-md-9">

                                            <select class="form-control post_tag_select"  name="entype"  >
                                             <option value="{{ $event->EventCat->id }}">{{ $event->EventCat->title_en }}</option>
                                             @foreach ($evt_cat as $e_cat )
                                             <option  value="{{ $e_cat->id }}">{{ $e_cat->title_en  }}</option>
                                             @endforeach


                                         </select>

                                         </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Title</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="entitle" value="{{ $event->title_en }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Short Text</label>
                                        <div class="col-md-9">
                                            <textarea rows="5" cols="5" name="shortdes_en" maxlength="100"  class="form-control"  placeholder="Enter text here">{{ $event->short_details_en }}</textarea>
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Location</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="enlocation" value="{{ $event->location_en }}" >
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Content</label>
                                        <div class="col-md-9">
                                            <textarea rows="5" cols="5" name="endes"  class="form-control" id="ckeditor" placeholder="Enter text here">{{ $event->description_en }}</textarea>
                                        </div>
                                    </div>




                                        <div class="form-group row">
                                            <label class="col-form-label col-md-2">Featured image</label>
                                            <div class="col-md-9">
            {{--                                     <img src="{{ URL::to('') }}/media/event/{{ $event->featured_images_en}}" style="width:300px" alt=""> <br>
                                                <label for="fimg" id="first"><img src="{{ URL::to('admin/assets/img/camera.jpg') }}" style="width:100px;cursor: pointer"/></label>
                                                <input class="form-control" type="file" name="enfimg" id="fimg" style="display: none">
                                                <img src="" alt="" id="feather_img" style="max-width:30%;display:block">
                                                <label for="fimg" style="display: none;margin-bottom: 15px" id="second"><span class="btn btn-primary mt-2 "> Change Image</span></label> --}}

                                            <label for="fimg" id="first"><img src="{{ URL::to('')}}/media/event/{{  $event->featured_images_en }}" style="width:100px;cursor: pointer"/></label>
                                            <input class="form-control" type="hidden" name="old_image" value="{{ $event->featured_images_en }}"  id="" style="display: none">
                                            <input class="form-control" type="file" name="new_image" id="fimg" style="display: none">
                                            <img src="" alt="" id="feather_img" style="max-width:30%;display:block">
                                            <label for="fimg" style="display: ;margin-bottom: 15px" id="second"><span class="btn btn-sm btn-primary mt-2 "> Change Image</span></label>


                                            </div>
                                        </div>








                                </div>
                                <div class="tab-pane" id="basictab2">





                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">ইভেন্ট ডেট </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="bndate" value="{{ $event->event_date_bn }}">
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">টাইটেল </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  name="bntitle" value="{{ $event->title_bn }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">সংক্ষিপ্ত বিবরণ</label>
                                        <div class="col-md-9">
                                            <textarea rows="5" cols="5" name="shortdes_bn" maxlength="100" class="form-control"  placeholder="Enter text here">{{ $event->short_details_bn }}</textarea>
                                        </div>
                                    </div>





                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">লোকেশন </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="bnlocation" value="{{ $event->location_bn }}">
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">কনটেন্ট </label>
                                        <div class="col-md-9">
                                            <textarea rows="5" cols="5" name="bndes"  class="form-control" id="ckeditorbn" placeholder="Enter text here">{{ $event->description_bn }}</textarea>
                                        </div>
                                    </div>

                                 {{--    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Registration fee</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Registration Deadline</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div> --}}


                                        <div class="form-group row">
                                            <label class="col-form-label col-md-2"> ছবি </label>
                                            <div class="col-md-9">
                                                <label for="bnfimg" id="bnfirst"><img src="{{ URL::to('')}}/media/event/{{  $event->featured_images_bn }}" style="width:100px;cursor: pointer"/></label>
                                                <input class="form-control" type="hidden" name="old_bnimage" value="{{ $event->featured_images_bn }}"  id="" style="display: none">
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
                                            <input type="text" class="form-control" name="seo_title" value="{{ $event->seo_title }}">
                                        </div>
                                    </div>




                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Meta Description</label>
                                        <div class="col-md-9">
                                            <textarea rows="5" cols="5" name="seo_meta"  class="form-control" id="ckeditor" placeholder="Enter text here">{{ $event->seo_meta }}</textarea>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Image Alt text</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="enalttext" value="{{ $event->alt_txt_en }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Bangla Image Alt text</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="bnalttext" value="{{ $event->alt_txt_bn }}">
                                        </div>
                                    </div>

                                </div>



                                <div class="tab-pane" id="basictab4">

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Gallery Link</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="glk" value="{{ $event->gallery_link }}">
                                        </div>
                                    </div>

                                </div>















                            </div>

                            <input type="submit" style="float:right" class="event_submit" value="Update" name="" id="">

                            </form>
                        </div>
                    </div>

                </div>
        </div>

    </div>
</div>

@endsection


