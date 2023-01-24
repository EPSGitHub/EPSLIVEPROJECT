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
                        <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('faqs.index') }}">FAQ List</a> / Create</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">

                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Q/A </h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" href="#basictab1" data-toggle="tab">English</a></li>
                                <li class="nav-item"><a class="nav-link" href="#basictab2" data-toggle="tab">বাংলা </a></li>



                            </ul>
                            <form action="{{ route('faqCreate.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="tab-content">
                                <div class="tab-pane show active" id="basictab1">






                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Question</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="entitle">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Categories</label>
                                        <div class="col-md-9">

                                            <select class="form-control post_tag_select"  name="entype">

                                            @foreach ($faq_category as $f_cat )
                                                <option  value= {{ $f_cat->id  }}>{{ $f_cat->name_en }}</option>
                                                @endforeach


                                            </select>




                                        </div>
                                    </div>





                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Answer</label>
                                        <div class="col-md-9">
                                            <textarea rows="5" cols="5" name="endes"  class="form-control" id="ckeditor" placeholder="Enter text here"></textarea>
                                        </div>
                                    </div>









                                </div>
                                <div class="tab-pane" id="basictab2">









                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">প্রশ্ন  </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control"  name="bntitle">
                                        </div>
                                    </div>






                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">উত্তর  </label>
                                        <div class="col-md-9">
                                            <textarea rows="5" cols="5" name="bndes"  class="form-control" id="ckeditorbn" placeholder="Enter text here"></textarea>
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








                                </div>



                            </div>

                            <input type="submit" class="event_submit" style="float: right" value="Submit" name="" id="">

                            </form>
                        </div>
                    </div>

                </div>
        </div>

    </div>
</div>

@endsection


