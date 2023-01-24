@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

<section id="">
	<div class="container ">
		<div class="row">

			<div class="col-md-12  front_banner  ">
				<h1>Job  </h1>
				<h5>Application<span> Form</span> </h5>
                <p><a href="{{ route('fontend.home') }}">@lang('career.breadcumFirstlink')</a> / <a href="{{ route('frontend.career') }}">@lang('career.breadcumSecondlink')</a> / @lang('career.jobapplication')</p>
			</div>

		</div>
	</div>
</section>


<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 jobapplyform">


                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-11 jobform_head">
                                <h3>{{ $careers-> title }}</h3>
                                {{-- <span>{{ $careers->title  }}</span> --}}
                                <hr>

                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 jobform">
                        <form action="{{ route('job.application.store') }}" method="POST" enctype="multipart/form-data" class="form-group">
                            @csrf

                            <input type="text" class="form-control d-none" name="job_title" value="{{ $careers-> title }}">
                            <input type="text" class="form-control d-none" name="job_id" value="{{ $careers-> job_id }}">
                            <input type="text" class="form-control d-none" name="job_position" value="{{ $careers-> category }}">

                            @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                             @endif
                            <label for="">Full Name</label>
                            <input type="text" class="form-control" name="name">
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span><br>
                        @endif

                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email">
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span><br>
                        @endif

                            <label for="">Phone Number</label>
                            <input type="text" class="form-control" name="phone">
                            @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span><br>
                        @endif

                            <label for="">Expected Salary Range</label>
                            <input type="text" class="form-control" name="expected_Salary">

                            @if ($errors->has('expected_Salary'))
                            <span class="text-danger">{{ $errors->first('expected_Salary') }}</span><br>
                        @endif
                            <label for=""> <i class="fa-solid fa-paperclip"></i> Upload Resume (pdf Max size 2MB)</label>
                            <input type="file" name="attachment" class=" form-control uploadfile" placeholder="Up" id="attach">

                            <input type="text" class="form-control d-none" name="status" value="1">

                            @if ($errors->has('attachment'))
                            <span class="text-danger">{{ $errors->first('attachment') }}</span><br>
                        @endif

                            <input type="submit" class="form-control btn btn-success text-white mt-2" value="Apply">

                        </form>
                    </div>




        </div>
        <div class="col-md-3"></div>
    </div>
</div>




<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


