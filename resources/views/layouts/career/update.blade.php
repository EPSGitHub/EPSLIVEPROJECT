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
                    <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('careers.index') }}">Career post</a> / Update</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

        <div class="row">

                <div class="col-md-10">


                    <form action=" {{ route('careers.update',$career->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                    <div class="card flex-fill">
                        <div class="card-header">

                            <h4 class="card-title d-inline">Update Job Post</h4>
                            <input type="text"  style="float: right; border:1px solid #666666;border-radius:5px;text-align:center" placeholder="Enter Job Id" class="d-inline jobid" name="job_id" value="{{ $career->job_id }}" id="" readonly>
                        </div>
                        <div class="card-body">


                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Job Title</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="job_title" class="form-control" value="{{ $career->title }}" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Job type</label>
                                    <div class="col-md-9">

                                        <select class="form-control post_tag_select" name="job_type">
                                           <option value="{{ $career->job_type }}">{{ $career->job_type }}</option>
                                           <option value="Full Time"> Full Time</option>
                                           <option value="Part time"> Part time</option>
                                           <option value="Contractual"> Contractual</option>
                                           <option value="Internship"> Internship</option>



                                        </select>




                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Department</label>
                                    <div class="col-md-9">

                                        <select class="form-control post_tag_select"  name="job_position">
                                            <option value="{{ $career->CareerDep->id }}">{{ $career->CareerDep->name }}</option>
                                            @foreach ($post_category as $p_cat )
                                            <option  value="{{ $p_cat->id }}">{{ $p_cat->name }}</option>
                                            @endforeach


                                        </select>




                                    </div>
                                </div>






                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Designation</label>
                                    <div class="col-md-9">

                                        <select class="form-control post_tag_select"  name="designation">
                                            <option value="{{ $career->CareerDes->id }}">{{ $career->CareerDes->name }}</option>
                                            @foreach ($user_des as $j )
                                            <option  value="{{ $j->id }}">{{ $j->name }}</option>
                                            @endforeach


                                        </select>


                                    </div>
                                </div>






                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">No of Vacancy</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="vacancy" class="form-control" value="{{ $career->vacancy }}">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Years of Experience</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="experiance" value="{{ $career->experiance }}" class="form-control">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Job Location</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="location" value="{{ $career->location }}" class="form-control">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Salary Range</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="salary" value="{{ $career->salary }}" class="form-control">
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Job post Details</label>
                                    <div class="col-md-9">
                                        <textarea rows="5" cols="5" name="description" value="{{ old('description') }}"  class="form-control" id="ckeditor"  placeholder="Enter text here">{{ $career->description }}</textarea>
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Application Deadline</label>
                                    <div class="col-lg-9">
                                        <input type="date" name="apply_deadline" class="form-control" value="{{ $career->apply_deadline }}">
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


