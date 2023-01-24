@extends('layouts.app')



@section('main-content')


<style>

.form-control input {
    border: none;
    box-sizing: border-box;
    outline: 0;
    padding: .75rem;
    position: relative;
    width: 100%;
}

input[type="date"]::-webkit-calendar-picker-indicator {
    background: transparent;
    bottom: 0;
    color: transparent;
    cursor: pointer;
    height: auto;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    width: auto;
}
</style>



<div class="page-wrapper">

    <div class="content container-fluid">

     <!-- Page Header -->
     <div class="page-header">
        <div class="row">
            <div class="col-sm-12">

                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('careers.index') }}">Career post</a> / Create</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
@include('validate')
        <!-- Page Header -->
       {{--  <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Home / Job post / Create</li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <!-- /Page Header -->

        <div class="row">

                <div class="col-md-10">

                    <form action=" {{ route('careers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                    <div class="card flex-fill">
                        <div class="card-header">

                            <h4 class="card-title d-inline">Create Job Post</h4>

                            @php
                              $dty = date('M').'-'.time();
                            @endphp

                            <div class="d-inline" style="float:right">
                                <select class=" post_tag_select" style="padding:3.5px;    margin-right: 5px;
                                border-radius: 5px;color: #666666;"
                                  name="job_position"  onChange="getPrefixType(this.value)" >
                                    <option value="">Select Job ID Prefix</option>
                                    @foreach ($dept_prefix as $d )
                                    <option  value="{{ $d ->prefix_id }}-{{$dty}}">{{$d ->department }}</option>
                                    @endforeach



                                </select>

                                <span id="jobprefix_info">
                                    <input type="text"  style="float: right; width:300px; border:1px solid #666666;border-radius:5px;text-align:center" placeholder="Enter Job Id" class="d-inline jobid" name="job_id" value="{{ old('job_id') }}" id="">
                                    </span>
                            </div>

                        </div>
                        <div class="card-body">


                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Job Title</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="job_title" class="form-control" value="{{ old('job_title') }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Job type</label>
                                    <div class="col-md-9">

                                        <select class="form-control post_tag_select" name="job_type" >
                                           <option value="">Select Type</option>
                                           <option value="Full Time"> Full Time</option>
                                           <option value="Part time"> Part time</option>
                                           <option value="Contractual"> Contractual</option>
                                           <option value="Internship"> Internship</option>



                                        </select>




                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"> Department</label>
                                    <div class="col-md-9">

                                        <select class="form-control post_tag_select"  name="job_position"  >
                                            <option value="">Select Department</option>
                                            @foreach ($post_category as $p_cat )
                                            <option  value="{{ $p_cat->id }}">{{ $p_cat->name }}</option>
                                            @endforeach


                                        </select>




                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"> Designation</label>
                                    <div class="col-md-9">

                                        <select class="form-control post_tag_select"  name="designation"  >
                                            <option value="">Select Designation</option>
                                            @foreach ($user_des as $udes )
                                            <option  value="{{ $udes->id }}">{{ $udes->name }}</option>
                                            @endforeach


                                        </select>




                                    </div>
                                </div>





                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">No of Vacancy</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="vacancy" class="form-control" value="{{ old('vacancy') }}">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Years of Experience</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="experiance" class="form-control" value="{{ old('experiance') }}">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Job Location</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="location" class="form-control" value="{{ old('location') }}">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Salary Range</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="salary" class="form-control" value="{{ old('salary') }}">
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label class="col-form-label col-md-3" >Job post Details <br><p style="border:2px solid red;padding:10px;margin-top:10px;color:red "> Headline: use h4 tag <br> Paragraph: normal</p></label>


                                    <div class="col-md-9">
                                        <textarea rows="5" cols="5" name="description"  class="form-control" id="ckeditor"  placeholder="Enter text here"> {{ old('description') }}</textarea>
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Application Deadline</label>
                                    <div class="col-lg-9">
                                        <input type="date" name="apply_deadline"  class="form-control" value="apply_deadline">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"></label>
                                    <div class="col-lg-9">
                                       <input type="checkbox" value="2" id="careerpostdraft" name="status">
                                        <label for="careerpostdraft"> Save as Draft</label><br>
                                    </div>
                                </div>


                              {{--   <div class="form-group row">
                                    <label class="col-lg-3 col-form-label"></label>
                                    <div class="col-lg-9">
                                        <input type="checkbox" id="draft" name="draft" value="0">
                                    <label for="draft"> Save as Draft</label><br>
                                    </div>
                                </div> --}}



                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
        </div>

    </div>
</div>

@endsection

<script>
    function getPrefixType(value) {
  document.querySelector("#jobprefix_info input").value = value;
}
</script>


