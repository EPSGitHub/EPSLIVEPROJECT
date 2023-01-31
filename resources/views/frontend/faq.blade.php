
 @extends('frontend.layout.app')

 @if(app()->getLocale()=='en')

 @section('title')
 FAQ| EPS | Easy Payment System
 @endsection

 @section('metadescription')

 Easy Payment System - EPS is an innovative payment solution to make digital transactions effortless.

 @endsection
 @endif

 @if(app()->getLocale()=='bn')

 @section('title')
 সাধারণ জিজ্ঞাসা| ইপিএস | ইজি পেমেন্ট সিস্টেম
 @endsection

 @section('metadescription')

 ইজি পেমেন্ট সিস্টেম (ইপিএস) একটি ইনোভেটিভ পেমেন্ট সল্যুশন। পেমেন্ট গেটওয়ে, বিল পেমেন্ট, মোবাইল রিচার্জ সহ বিভিন্ন সার্ভিস প্রদানের মাধ্যমে ইপিএস আপনার ডিজিটাল লেনদেনকে

 @endsection
 @endif


 @section('maincontent')

 <style>
   .faq-content ul li {
        list-style: square;

    }
   .faq-content ul {
        padding-bottom: 20px;
    }

    .faq-content {
        margin-top: 10px;
        margin-bottom: 10px;

    }
 </style>



	<!-- // Start Code From Here -->

<!-- page heading  start-->
<div class="container ">
    <div class="row">
        <div class="col-md-12  front_banner bnpagehead ">
            <h1>@lang('faq.heading1')</h1>
            <h5>@lang('faq.heading2f') <span>@lang('faq.heading2l')</span> </h5>
            <p><a href="{{ route('fontend.home') }}">@lang('faq.breadcumFirstlink')</a> / @lang('faq.breadcumSecondlink')</span>
        </div>
    </div>
</div>
	<!-- page heading  END-->




	<div class="container faqdivision">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-3">
				<div id="faq-links" style="position: sticky;top:10%;">
					<div id="All" class="faq-selected"> <i class="fa-solid fa-circle-chevron-right"></i> @lang('faq.all')</div>
					<div id="general"><i class="fa-solid fa-circle-chevron-right"></i> @lang('faq.general')</div>
					<div id="Account"><i class="fa-solid fa-circle-chevron-right"></i> @lang('faq.account')</div>
					<div id="ftransfer"><i class="fa-solid fa-circle-chevron-right"></i> @lang('faq.transaction')</div>
				{{-- 	<div id="features">Corporate</div>
					<div id="mobile">Marchant</div> --}}
				</div>
			</div>
			<div class="col-md-7">
                <div class="faqsearch">
              {{--       <form action="">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Type your Question"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn  btn-danger " type="button"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                    </form> --}}
                </div>

				<div id="faq-wrapper" class="about-All">

					<!--faq-group-->
					<div class="slide-left">
						<div class="faq">
							<ul class="faq-accordion">

                                @foreach ($faq as $f )

								<li>
									<a href="#"><span>Q.{{ $loop->index+1 }}</span>{{ $f->{'ques_'.app()->getLocale()} }}</a>
									<ul class="faq-content">
										<li>
											<div>
                                                {!! htmlspecialchars_decode($f->{'des_'.app()->getLocale()}) !!}
											</div>
										</li>
									</ul>
								</li>

                                @endforeach




							</ul>


						</div>
					</div>
				</div>




                <div class="about-general faq-hide">



					<div class="slide-left">
						<ul class="faq-accordion">

                            @foreach ($gfaq as $f )

                            <li>
                                <a href="#"><span>Q.{{ $loop->index+1 }}</span>{{ $f->{'ques_'.app()->getLocale()} }}</a>
                                <ul class="faq-content">
                                    <li>
                                        <div>
                                            {!! htmlspecialchars_decode($f->{'des_'.app()->getLocale()}) !!}
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            @endforeach





						</ul>

					</div>

				</div>

				<div class="about-Account faq-hide">




					<div class="slide-left">
						<ul class="faq-accordion">

                            @foreach ($acfaq as $f )

                            <li>
                                <a href="#"><span>Q.{{ $loop->index+1 }}</span>{{ $f->{'ques_'.app()->getLocale()} }}</a>
                                <ul class="faq-content">
                                    <li>
                                        <div>
                                            {!! htmlspecialchars_decode($f->{'des_'.app()->getLocale()}) !!}
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            @endforeach






						</ul>

					</div>

				</div>


				<div class="about-ftransfer faq-hide">


					<div class="slide-left">
						<ul class="faq-accordion">

                            @foreach ($tranfaq as $f )

                            <li>
                                <a href="#"><span>Q.{{ $loop->index+1 }}</span>{{ $f->{'ques_'.app()->getLocale()} }}</a>
                                <ul class="faq-content">
                                    <li>
                                        <div>
                                            {!! htmlspecialchars_decode($f->{'des_'.app()->getLocale()}) !!}
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            @endforeach






						</ul>
					</div>

				</div>







			</div>



			<div class="col-md-1"></div>
		</div>
	</div>


	<div class="container faqquery">
		<div class="row">

			<div class="col-md-12">
				<h3>@lang('faq.still_ques')</h3>
				<p>@lang('faq.still_des1')  <a
						href="{{ route('frontend.contact') }}">@lang('faq.still_link')</a>. @lang('faq.still_des2')</p>
			</div>

		</div>
	</div>










	<!-- // Start Social Icon -->


	@include('frontend.layout.social')

	<!-- // End Social Icon -->


	<!-- Footer  Start -->










@endsection
