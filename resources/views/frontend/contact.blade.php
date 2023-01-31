@extends('frontend.layout.app')

@if(app()->getLocale()=='en')

@section('title')
Contact Us | EPS | Easy Payment System
@endsection

@section('metadescription')

Easy Payment System - EPS is an innovative payment solution to make digital transactions effortless.

@endsection
@endif

@if(app()->getLocale()=='bn')

@section('title')
 যোগাযোগ| ইপিএস | ইজি পেমেন্ট সিস্টেম
@endsection

@section('metadescription')

ইজি পেমেন্ট সিস্টেম (ইপিএস) একটি ইনোভেটিভ পেমেন্ট সল্যুশন। পেমেন্ট গেটওয়ে, বিল পেমেন্ট, মোবাইল রিচার্জ সহ বিভিন্ন সার্ভিস প্রদানের মাধ্যমে ইপিএস আপনার ডিজিটাল লেনদেনকে

@endsection
@endif

@php

$contact =App\Models\settings::find(1) ;
 @endphp


@section('maincontent')


	<!-- // Start Code From Here -->

	<!-- page header start -->
	<div class="container ">
		<div class="row">
			<div class="col-md-12  front_banner bnpagehead ">
				<h1>@lang('contact.heading1')</h1>
				<h5>@lang('contact.heading2f') <span>@lang('contact.heading2l')</span> </h5>
				<p><a href="{{ route('fontend.home') }}">@lang('contact.breadcumFirstlink')</a> / @lang('contact.breadcumSecondlink')</span>
			</div>
		</div>
	</div>

	<!-- page header END -->

	<div class="frmst">

        <iframe
			src="{{ $contact->Maps }}"
			width="100%" height="400" style="border:0;" allowfullscreen=""
			referrerpolicy="no-referrer-when-downgrade">
		</iframe>




	</div>



	<div class="container mfrm">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-7 frm ">
				<form action="{{ route('contact.us.store') }}" method="POST" >
                    @csrf
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
					<h5>@lang('contact.question')</h5>
					<div class="col-md-12 form-group">
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="name"  placeholder="@lang('contact.name')" class="form-control" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="@lang('contact.email')" name="email" class="form-control" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<textarea  name="message" placeholder="@lang('contact.message')" class="form-control" name="" id="" cols="30"
							rows="10"></textarea>
                            @if ($errors->has('message'))
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        @endif
					</div>


					<input type="submit" class="btn btn-md btn-success sbt shadow-none" value="@lang('contact.submit')" >

				</form>
			</div>
			<div class="col-md-4 adr contact_adrs">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-1">
						<i class="fa-solid fa-location-dot"></i>
					</div>

					<div class="col-md-9 ">
						<h5>@lang('contact.address')</h5>
						<p>{{ $contact->{'address_'.app()->getLocale()} }}</p>

					</div>
				</div>

				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-1">
						<i class="fa-solid fa-phone-volume"></i>
					</div>

					<div class="col-md-9 aadr">
						<h5>@lang('contact.contact')</h5>
						<a href="tel:+09614-770066">{{ $contact->{'contact_'.app()->getLocale()} }}</a>
						<a href="mailto:support@eps.com.bd">{{ $contact->email }}</a>
					</div>
				</div>

				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-1">
						<i class="fa-solid fa-headset"></i>
					</div>

					<div class="col-md-9">
						<h5>@lang('contact.support')</h5>
						<p>@lang('contact.support_time')</p>
					</div>
				</div>

                <div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-1 mscl">
						<i class="fa-regular fa-share-from-square"></i></i>
					</div>

					<div class="col-md-9 mscl">
						<h5>@lang('contact.follow')</h5>
					</div>
				</div>




				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-1">

					</div>

					<div class="col-md-9 mscl ">

						<h5>    </h5>
						<div class="contact_social scl">
							<ul>

                                @php
                                $social =App\Models\settings::find(1) ;
                                $scl = json_decode($social->social);
                            @endphp

								<li><a href="{{ $scl->facebook }}"  target="_blank" class="active"><i class="fa-brands fa-facebook-f"></i></a></li>
								<li><a href="{{ $scl->linkedin }}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
								<li><a href="{{ $scl->twitter }}" target="_blank"><i class="fa-brands fa-twitter" ></i></a></li>
								<li><a href="{{ $scl->youtube }}" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>





							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


@endsection












