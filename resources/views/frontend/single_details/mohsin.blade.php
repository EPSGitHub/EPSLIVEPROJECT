@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

<section id="">
	<div class="container ">
		<div class="row">

			<div class="col-md-12  front_banner bnpagehead  ">
				<h1>@lang('about.single_page_heading1') </h1>
				<h5>@lang('about.single_page_heading2f')<span> @lang('about.single_page_heading2l')</span> </h5>
                <p><a href="{{ route('fontend.home') }}">@lang('about.single_page_breadcumFirstlink')</a> / <a href="{{ route('frontend.aboutus') }}">@lang('about.single_page_breadcumSecondlink')</a> / @lang('about.single_page_breadcumThirdlink')</p>
			</div>

		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 sin_img">
			 <img  class="single_img" src="{{ URL::to('') }}/frontend/img/team/single_image/Mohammad-Mohsin.png" alt="">
			<div class="sing_text">
				<h4>@lang('about.mohsin')</h4>
				<span>@lang('about.chairman')</span>
                <p>@lang('about.optimum')</p>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 sin_des">
			<p class="full_des">@lang('about.mohsin_paragraph_1')</p>
			<p class="full_des">@lang('about.mohsin_paragraph_2')</p>
			<p class="full_des">@lang('about.mohsin_paragraph_3')</p>

			<ol style="margin-bottom: 30px">
                @lang('about.mohsin_paragraph_4')
            </ol>


		</div>
		</div>


		<div class="col-md-3"></div>
	</div>
</div>


<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


