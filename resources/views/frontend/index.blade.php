@extends('frontend.layout.app')

@if(app()->getLocale()=='en')

@section('title')
EPS | Easy Payment System
@endsection

@section('metadescription')

Easy Payment System - EPS is an innovative payment solution to make digital transactions effortless.

@endsection
@endif

@if(app()->getLocale()=='bn')

@section('title')
ইপিএস | ইজি পেমেন্ট সিস্টেম
@endsection

@section('metadescription')

ইজি পেমেন্ট সিস্টেম (ইপিএস) একটি ইনোভেটিভ পেমেন্ট সল্যুশন। পেমেন্ট গেটওয়ে, বিল পেমেন্ট, মোবাইল রিচার্জ সহ বিভিন্ন সার্ভিস প্রদানের মাধ্যমে ইপিএস আপনার ডিজিটাল লেনদেনকে

@endsection
@endif

@section('maincontent')

<!-- // Start Code From Here -->
  <!-- // Main section Start -->
  {{--  <div class="preloader" id="loader">
  </div> --}}

  <section id="pagewid">
    <div class="container" id="topcontent">
      <div class="row">
        <!--main-content-->
        <div class=" main-content col-md-7 col-sm-12 mt-3">
          <a class=" btn-1 btn-lg">
            <span class="text" > @lang('home.title')</span>
          </a>
          <h1 style="display:none;">EASY PAYMENT SYSTEM - EPS</h1>
          <h6 class="easy">@lang('home.easy')</h6>
          <h6 class="payment">@lang('home.payment')</h6>
          <h6 class="system">@lang('home.system')</h6>
          <p>@lang('home.short_des') ...  <a href="{{ route('frontend.aboutus') }}" class="readmore" style="color:#0e694b; font-weight:600">@lang('home.readbtn') </a>
          </p>

        </div>
        <!--main-content end!-->


        <!--Slider start!-->
        <div class="mobile-slider  col-md-5  mt-2 " data-interval="false">
          <!-- slider -->
          <div class="slider-main" id="slider-main">
            <div class="slides">
              <!-- slide -->
              <ul style="z-index:-1;">
                <li class="active">

                </li>
                <li>

                </li>
                <li>


                </li>
              {{--   <li>


                </li>

                <li>


                </li> --}}
              </ul>
            </div>
          </div>
          <!--mobile slider end!-->
          <div id="phases"></div>
        </div>
      </div>
      <!--row!-->
    </div>



  <div class="container">
    <div class="col-md-6 slider-popup-top">
      <!-- slide -->
      <ul>
        <li class="paymentgateway active ">
            <img src="{{ URL::to('') }}/frontend/img/slider/payment.jpg" alt="EPS Payment Gateway Service">
          </li>

        <li class="billpay">
          <img src="{{ URL::to('') }}/frontend/img/slider/billpay.jpg" alt="EPS Bill Pay Service">
        </li>


        <li class="mobile">
            <img src="{{ URL::to('') }}/frontend/img/slider/mobilet.jpg" alt="EPS Mobile Recharge Service">
          </li>

       {{--  <li class="corporate">
          <img src="{{ URL::to('') }}/frontend/img/slider/Corporate_T.jpg" alt="">
        </li>

        <li class="fundtransfer">
            <img src="{{ URL::to('') }}/frontend/img/slider/fund-transfer.jpg" alt="">
          </li> --}}

      </ul>
      <!-- controll -->
    </div>
  </div>



  <div class="container">
    <div class="col-md-6 slider-popup-bottom">
      <ul>

        <li class="paymentgatewayb active">
            <img src="{{ URL::to('') }}/frontend/img/slider/paymentb.jpg" alt="EPS Payment Option ">
          </li>
        <li class="billpayb">
          <img src="{{ URL::to('') }}/frontend/img/slider/billpayb.jpg" alt="Bill Pay Using EPS">
        </li>

        <li class="mobileb">
          <img src="{{ URL::to('') }}/frontend/img/slider/mobileb.jpg" alt="EPS Mobile Recharge">
        </li>
       {{--  <li class="corporateb">
          <img src="{{ URL::to('') }}/frontend/img/slider/Corporate_B.jpg" alt="">
        </li>
        <li class="fundtransferb">
            <img src="{{ URL::to('') }}/frontend/img/slider/fundtransfer-b.jpg" alt="">
          </li> --}}

      </ul>
      <span class="bottom-controll active" style="display: none;"></span>
      <span class="bottom-controll" style="display: none;"></span>
    </div>
    <div id="phases"></div>
  </div>







  <div class="container">
    <div class="row">
    <div class="col-md-1"></div>

      <div class="slider-main col-md-8">
        <!-- slide -->

        <ol class="">
          <!-- point -->
          <li class="active">
            <a href="{{ route('frontend.payment') }}"  class="auto-btn btn shadow-none hvr-grow" class="hoverhand"
              onmouseout="sendMonyout()">
              <i class="fa fa-square"></i>@lang('home.pg')</a>
          </li>
          <li class="">
            <a href="{{ route('frontend.billpay') }}" class="auto-btn btn shadow-none hvr-grow " class="hoverhand" id="title2"
              onmouseout="billpayout()">
              <i class="fa fa-square"></i>@lang('home.bill')</a>
          </li>
          <li class=" ">
            <a href="{{ route('frontend.mobile_recharge') }}" class="auto-btn btn shadow-none hvr-grow" class="hoverhand" id="title3"
              onmouseout="corporateout()">
              <i class="fa fa-square"></i>@lang('home.mobile')</a>
          </li>
       {{--    <li class="">
            <a href="{{ route('frontend.corporate') }}" class="auto-btn btn shadow-none hvr-grow" class="hoverhand" id="title4"
              onmouseout="marchentout()">
              <i class="fa fa-square"></i>Corporate Solution </a>
          </li>
          <li class="">
            <a href="{{ route('frontend.fund_transfer') }}" class="auto-btn btn shadow-none hvr-grow" class="hoverhand" id="title5"
              onmouseout="paymentgatewayout()">
              <i class="fa fa-square"></i>Fund Transfer </a>
          </li> --}}


          <!-- playpause -->
          <!-- <i class="fa fa-circle" title="pause"></i> -->
        </ol>
        <!-- controll -->
        <span class="controll active" style="display: none;"></span>
        <span class="controll" style="display: none;"></span>
        <span class="top-controll active" style="display: none;"></span>
        <span class="top-controll" style="display: none;"></span>
        <span class="bottom-controll active" style="display: none;"></span>
        <span class="bottom-controll" style="display: none;"></span>
      </div>

      <div class="col-md-2"></div>
    </div>
  </div>

  <!-- // Main section End -->

  <!-- // Start Social Icon -->

@include('frontend.layout.social')
  <!-- // End Social Icon -->

  <!-- // Home Popup section Start -->
  <section>
    <div class="container" id="cookieNotice">
      <div class="row">
        <div class="col-md-12">
          <div class="popup animate__animated animate__fadeInUp animate_slower" id="popup">
            <a id="close"> &times;</a>
            <p class="card-text">@lang('home.cookietext') <a href="{{ route('frontend.cookie') }}" class="cookie-link" style="text-decoration:underline;color:#0e694b;font-size: 14px;">@lang('home.cookiebtn')</a>
            </p>
            <div class="button">
              <a  id="accept" class="btn btn-sm accept" onclick="acceptCookieConsent()">@lang('home.cookie_accept')</a>
              <a id="deny"  class="btn btn-sm deny"  onclick="toggle()" >@lang('home.cookie_deny')</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- // Home Popup section End -->

</section>
  {{-- @include('frontend.layout.subscription') --}}













<!-- partner section start -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="partner col-md-9" id="partner">
          <h2 class="partnertitle">@lang('home.partner')</h2>
        </div>
        <div class="col-md-1"></div>
    </div>
    </div>
 </section>


{{--   <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                       <div class="row">
                        <div class="col-md-12">
                            <div class="brands logo-slider">


                                  <div>
                                    <img src="{{ URL::to('')}}/frontend/img/partner/logos/southeast.png"/>
                                  </div>
                                  <div>
                                    <img src="{{ URL::to('')}}/frontend/img/partner/logos/islami.png"/>
                                  </div>
                                  <div>
                                    <img src="{{ URL::to('')}}/frontend/img/partner/logos/nagad.png"/>
                                  </div>
                                  <div>
                                    <img src="{{ URL::to('')}}/frontend/img/partner/logos/okwallet.png"/>
                                  </div>
                                  <div>
                                    <img src="{{ URL::to('')}}/frontend/img/partner/logos/mcash.png"/>
                                  </div>
                                  <div>
                                    <img src="{{ URL::to('')}}/frontend/img/partner/logos/robi.png"/>
                                  </div>
                                  <div>
                                    <img src="{{ URL::to('')}}/frontend/img/partner/logos/airtel.png"/>
                                  </div>
                                  <div>
                                    <img src="{{ URL::to('')}}/frontend/img/partner/logos/visa.png"/>
                                  </div>
                                  <div>
                                    <img src="{{ URL::to('')}}/frontend/img/partner/logos/mcard.png"/>
                                  </div>


                                </div>

                        </div>
                        <div class="col-md-1"></div>
                       </div>
                    </div>

                </div>
            </div> --}}


            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                       <div class="row">
                        <div class="col-md-12">
                            <div class="brands logo-slider owl-carousel owl-theme">

                                @php
                                    $partnerimg= App\Models\partnerimage::orderBy('order','ASC')->get();
                                @endphp


                                  @foreach ($partnerimg as $pimg)

                                  <div  class="item">
                                    <img src="{{ URL::to('')}}/media/settings/partner/{{ $pimg->images }}" alt="{{ $pimg->alt_text }}"/>
                                  </div>

                                  @endforeach





                                </div>

                        </div>
                        <div class="col-md-1"></div>
                       </div>
                    </div>

                </div>
            </div>








<!-- Button trigger modal -->

  <!-- Modal -->


<div style="margin-top:100px">

</div>

@include('frontend.layout.subscription')

@include('frontend.layout.cookie_popup')

<script>

    document.getElementById("sbtn").style.display = "none";

</script>

@endsection






