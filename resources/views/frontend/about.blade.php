@extends('frontend.layout.app')

@if(app()->getLocale()=='en')

@section('title')
About Us | EPS | Wind of Change in Digital Transaction
@endsection

@section('metadescription')

Easy Payment System is an innovative payment solution permitted by Bangladesh Bank as a Payment System Operator (PSO).

@endsection
@endif

@if(app()->getLocale()=='bn')

@section('title')
ইপিএস পরিচিতি | ইপিএস | ডিজিটাল লেনদেনে পরিবর্তনের হাওয়া
@endsection

@section('metadescription')

ইজি পেমেন্ট সিস্টেম (ইপিএস) একটি ইনোভেটিভ পেমেন্ট সল্যুশন এবং এটি বাংলাদেশ ব্যাংক কর্তৃক অনুমোদনপ্রাপ্ত একটি পেমেন্ট সিস্টেম অপারেটর (পিএসও)।

@endsection
@endif


@section('maincontent')

	<!-- // Start Code From Here -->


	<!-- page heading  start-->


	<div class="container ">
		<div class="row">
			<div class="col-md-12  front_banner bnpagehead  ">
				<h1>@lang('about.heading1')</h1>
				<h5>@lang('about.heading2f') <span>@lang('about.heading2l')</span> </h5>
				<p><a href="{{ route('fontend.home') }}">@lang('about.breadcumFirstlink')</a> / @lang('about.breadcumSecondlink')</span>
			</div>
		</div>
	</div>



	<!-- page heading  END-->


	<section>
		<div class="container details">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-5">
					<h6>@lang('about.shortheading')</h6>
					<h3>@lang('about.heading')</h3>


					<p>
						@lang('about.paragraph1')
					</p>

                    <p>

                        @lang('about.paragraph2')

                    </p>

					<p>

                        @lang('about.paragraph3')

					</p>
				</div>
				<div class="col-md-5">

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-11 abtrightpart">
                            <h4 class="abtincep">@lang('about.inception')</h4></li>

                            <p>
                               @lang('about.incep_paragraph1')

                            </p>

                            <p class="abtinceplast">
                                @lang('about.incep_paragraph2')
                            </p>




                            <div class="abtvision">
                                <img src="{{ URL::to('') }}/frontend/img/vision.png" alt="EPS Vision"> <span>@lang('about.vision')</span>
                                <p>@lang('about.vision_details')</p>
                            </div>


						<div class="abtmission">
                            <img  src="{{ URL::to('') }}/frontend/img/mission.png" alt="EPS Misssion"> <span>@lang('about.mission')</span>
							<p>@lang('about.mission_details')</p>
                        </div>
                        </div>
                    </div>




				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</section>


	<!-- Client Section  start-->

{{-- 	<section id="client">

		<div class="container ">
			<div class="row">

				<div class="col-md-12  front_banner  ">
					<h1>OUR CLIENTS</h1>

				</div>

			</div>
		</div>
		<div class="container mt-2">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="customer-logos slider" style="margin-top: 50px;">
						<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/IBBL.png"></a></div>
						<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/City_Bank 1.png"></a></div>
						<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/dachbank.png"></a></div>
						<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/easternbank.png"></a></div>
						<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/eximbank.png"></a></div>
						<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/dachbank.png"></a></div>
						<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/easternbank.png"></a></div>
						<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/eximbank.png"></a></div>


					</div>

				</div>
				<div class="col-md-1"></div>



			</div>


		</div>

		</div>

	</section> --}}

	<!-- Client Section END-->

	<!-- Team Section  start-->
	<section id="team_head">
		<div class="container ">
			<div class="row">

				<div class="col-md-12  front_banner  ">
					<h1>@lang('about.baordmember')</h1>
					<h5>@lang('about.baordmembertitle1') <span>@lang('about.baordmembertitle2')</span> </h5>

				</div>

			</div>
		</div>
	</section>

	<section id="gallery">

		<div class="container">
			<div class="row">

		        <div class="col-md-1 tag">
					<h4> {{-- — Management —  --}}</h4>
				</div>


				<div class="col-md-11">
					<div class="row">

						<div class="col-md-2"></div>
						<div class="col-md-7">
							<div class="row">
								<!-- ------------------------------------------- -->
								<div class="col-md-6 sigdiv hvr-grow">
									<a href="#"   data-bs-toggle="modal" data-bs-target="#mohsin" ><img
											src="{{ URL::to('') }}/frontend/img/team/Mohammad-Mohsin.png" alt="EPS-Easy Payment System Chairman"></a>
									<div class="dtl">
										<a href="#" data-bs-toggle="modal" data-bs-target="#mohsin">
											<h6>@lang('about.mohsin')</h6>
										</a>
										<p>@lang('about.chairman')</p>
									</div>
								</div>
								<!-- ----------------------------------------------------- -->
								<div class="col-md-6 sigdiv hvr-grow">
									<a href="#" data-bs-toggle="modal" data-bs-target="#shahalam" ><img src="{{ URL::to('') }}/frontend/img/team/Md-Shah-Alam.png" alt="EPS-Easy Payment System Managing Director"></a>
									<div class="dtl">
										<a href="" data-bs-toggle="modal" data-bs-target="#shahalam"><h6>@lang('about.shahalam')</h6></a>
										<p>@lang('about.MD')</p>
									</div>
								</div>

							</div>
						</div>
						<div class="col-md-3"></div>


					</div>
				</div>


				<div class="col-md-1"></div>
			</div>
		</div>


		<div class="container">
			<div class="row">

			<div class="col-md-1 tag">
					<h3>{{--  — Directors — --}} </h3>
				</div>


				<div class="col-md-11">
					<div class="row">

						<div class="col-md-1"></div>
						<div class="col-md-10 abtsecondglr">
							<div class="row">
								<!-- ------------------------------------------- -->
								<div class="col-md-4 sigdiv hvr-grow">
									<a href="#" data-bs-toggle="modal" data-bs-target="#nasir"><img src="{{ URL::to('') }}/frontend/img/team/Nasir-Uddin.png" alt="EPS-Easy Payment System Director"></a>
									<div class="dtl">
										<a href="#" data-bs-toggle="modal" data-bs-target="#nasir">
											<h6>@lang('about.nasir')</h6>
										</a>
										<p>@lang('about.director')</p>
									</div>
								</div>
								<!-- ----------------------------------------------------- -->

                                <div class="col-md-4 sigdiv hvr-grow">
									<a href="#"  data-bs-toggle="modal" data-bs-target="#faruq"><img src="{{ URL::to('') }}/frontend/img/team/Faruq-Ahmed.jpg" alt="EPS-Easy Payment System Director"></a>
									<div class="dtl">
										<a href="#" data-bs-toggle="modal" data-bs-target="#faruq">
											<h6>@lang('about.faruq')</h6>
										</a>
										<p>@lang('about.director')</p>
									</div>
								</div>

                                <div class="col-md-4 sigdiv hvr-grow">
									<a href="#" data-bs-toggle="modal" data-bs-target="#nasimul"><img src="{{ URL::to('') }}/frontend/img/team/Nasimul-Hasin.png" alt="EPS-Easy Payment System Director"></a>
									<div class="dtl">
										<a href="#" data-bs-toggle="modal" data-bs-target="#nasimul">
											<h6>@lang('about.nasimul') </h6>
										</a>
										<p>@lang('about.director')</p>
									</div>
								</div>


							</div>
						</div>
						<div class="col-md-1"></div>


					</div>
				</div>


				<div class="col-md-1"></div>
			</div>
		</div>


		<div class="container teambtn" style="margin-bottom:100px">

			{{-- <a href="{{ route('frontend.team') }}" class="btn btn-md btn-success"> View All</a> --}}
		</div>


	</section>

<!-- Team section end -->


<!-- EPS Official Logo -->


	<div class="container ">
		<div class="row">
			<div class="col-md-12  front_banner">
				<h1>@lang('about.our_logo') </h1>
				<h5>@lang('about.logotitle1')  <span>@lang('about.logotitle2') </span> </h5>
		</div>
	</div>


	<div class="container epslogo">
		<div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
            <img src="{{ URL::to('') }}/frontend/img/logo-png.png" alt="Easy Payment System Logo">
            <a href="{{ URL::to('') }}/frontend/img/epslogo.jpg"class="btn btn-success shadow-none"  download="epslogo"> <i class="fa-solid fa-cloud-arrow-down"></i> @lang('about.download')</a>
           </div>
           <div class="col-md-2"></div>


		</div>

	</div>
	</div>

<!-- EPS Official Logo END -->


<!-- EPS Achievement Start -->

{{-- 	<section id="achivement">
		<div class="container ">
			<div class="row">
				<div class="col-md-12  front_banner  ">
					<h1>OUR ACHIEVEMENTS </h1>
					<h5> Certification <span></span> </h5>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1"></div>
				<div class=" col-md-10 customer-logos slider" style="margin-top: 50px;">
					<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/IBBL.png"></a></div>
					<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/City_Bank 1.png"></a></div>
					<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/dachbank.png"></a></div>
					<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/easternbank.png"></a></div>
					<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/eximbank.png"></a></div>
					<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/dachbank.png"></a></div>
					<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/easternbank.png"></a></div>
					<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/eximbank.png"></a></div>


				</div>
				<div class="col-md-1"></div>
			</div>
		</div> --}}


<!-- EPS Achievement END -->


@include('frontend.layout.modal')



	</section>
	<!-- // Start Social Icon -->


    @include('frontend.layout.social')

	<!-- // End Social Icon -->




@endsection














