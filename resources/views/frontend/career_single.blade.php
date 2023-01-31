@extends('frontend.layout.appsin')

@section('title')
Career Details | EPS
@endsection
@section('metadescription')
Easy Payment System (EPS) is an innovative payment solution to make digital transactions effortless. EPS eases the transaction by providing services
@endsection
@section('metaimgproperty')
https://eps.com.bd/frontend/img/logo/eps-logo.svg
@endsection



@section('maincontent')


<style>
      <style>

        .job_details  ul li {
  list-style: disc !important;
}
    #social-links{
        margin-left: -12%;

    }
     #social-links ul{
          padding-left: 0;
          margin: 10px;
     }
     #social-links ul li {
          display: inline-block;
     }
     #social-links ul li a {
          padding: 6px;
          /* border: 1px solid #ccc; */
          border-radius: 5px;
          margin: 1px;
          font-size: 24px;
     }

     #social-links ul li a:hover{
        background: transparent;
        color:#0e76a8;
     }

     #social-links .fa-facebook{
        color: #666666;
     }
     #social-links .fa-twitter{
        color: #666666;
     }
     #social-links .fa-linkedin{
        color: #666666;
     }
     #social-links .fa-whatsapp{
        color: #666666;
     }





    #social-links .fa-facebook:hover{
           color: blue;
     }

     #social-links .fa-twitter:hover{
           color: deepskyblue;
     }
     #social-links .fa-linkedin:hover{
           color: #0e76a8;
     }
     #social-links .fa-whatsapp:hover{
          color: #25D366
     }





     .socialsharebutton{
        background:white;
        box-shadow: 0px 4px 12px rgb(0 0 0 / 16%);

    border-radius: 8px;
    padding: 5px 15px 7px;
    margin-bottom: 20px;
    text-align: center;
     }
     </style>



	<!-- page header start -->
	<div class="container-fluid pagehead" id="pagehed">
		<h3>{{ $careers->title }}</h3>
        <p><a href="{{ route('fontend.home') }}">@lang('career.breadcumFirstlink')</a> / <a href="{{ route('frontend.career') }}">@lang('career.breadcumSecondlink')</a> / @lang('career.career_details_breadcum')</p>

	</div>
	<!-- page header END -->
	<div class="container ">
		<div class="row">
			<div class="col-md-12 job_details" style="font-family: 'poppins', sans-serif;">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-7 job_details_page">

						{{-- <h3>{{ $careers-> {'title_'.app()->getLocale()} }}</h3> --}}
						<h3>{{ $careers->title}}</h3>
                        <p>{{ $careers->CareerDep->name }}</p>
						{{-- <h6><span>Jobs Type: {{ $careers->job_type }}</span><span>salary Range: {{ $careers->salary }}</span> <span>Experiance:
                            {{ $careers->experiance }}+</span></h6> --}}
						<hr>

                        <div style="font-size:16px">
                            {!! htmlspecialchars_decode($careers->description) !!}
                        </div>












					</div>



					<div class="col-md-3 ">

						<div class="job_details_side">
							<h4>Job Summary</h4>
							<div class="job_side_item">
								<p>Published On</p>
                                <span>{{ date('d-m-Y', strtotime($careers->created_at))}}</span>

								<hr>
							</div>
							<div class="job_side_item">
								<p>Vacancy</p>
								<span>{{ $careers->vacancy }}</span>
								<hr>
							</div>
							<div class="job_side_item">
								<p>employment Status</p>
								<span>{{ $careers->job_type }}</span>
								<hr>
							</div>
							<div class="job_side_item">
								<p>Experiance</p>
								<span>{{ $careers->experiance }}Yrs +</span>
								<hr>
							</div>
							<div class="job_side_item">
								<p>Job location</p>
								<span>{{ $careers->location }}</span>
								<hr>
							</div>
							<div class="job_side_item">
								<p>Salary</p>
								<span>{{ $careers->salary }}</span>
								<hr>
							</div>
							<div class="job_side_item">
								<p>Application deadline</p>
								<span>{{ $careers->apply_deadline }}</span>

							</div>
						</div>

                        <div class="job_apply_side">
							<a href="{{ route('frontend.jobdetails',$careers->slug) }}"
								class="btn btn-lg btn-success shadow-none">Apply</a>
						</div>

                        <div class="socialsharebutton">
                            <p style="margin-top: 5%;font-size:20px;font-weight:500;font-family:'poppins',sans-serif">Share Job Post</p>
							{!! $shareButtons1 = \Share::currentPage()
                          ->facebook()
                          ->twitter()
                          ->linkedin()
                          ->whatsapp()
                           !!}
						</div>




					</div>
				</div>
			</div>
		</div>
	</div>


    @include('frontend.layout.social')

@endsection












