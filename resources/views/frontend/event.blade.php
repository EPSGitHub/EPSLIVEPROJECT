@extends('frontend.layout.app')

@if(app()->getLocale()=='en')

@section('title')
Event | EPS | Easy Payment System
@endsection

@section('metadescription')

Easy Payment System - EPS is an innovative payment solution to make digital transactions effortless.

@endsection
@endif

@if(app()->getLocale()=='bn')

@section('title')
ইভেন্ট | ইপিএস | ইজি পেমেন্ট সিস্টেম
@endsection

@section('metadescription')

ইজি পেমেন্ট সিস্টেম (ইপিএস) একটি ইনোভেটিভ পেমেন্ট সল্যুশন। পেমেন্ট গেটওয়ে, বিল পেমেন্ট, মোবাইল রিচার্জ সহ বিভিন্ন সার্ভিস প্রদানের মাধ্যমে ইপিএস আপনার ডিজিটাল লেনদেনকে

@endsection
@endif


@section('maincontent')

<!-- // Start Code From Here -->

<div class="container ">
    <div class="row">
        <div class="col-md-12  front_banner bnpagehead ">
            <h1>@lang('event.heading1')</h1>
            <h5>@lang('event.heading2f') <span>@lang('event.heading2l')</span> </h5>
            <p><a href="{{ route('fontend.home') }}">@lang('event.breadcumFirstlink')</a> / @lang('event.breadcumSecondlink')</span>
        </div>
    </div>
</div>
{{--
<div class="container eventcarousel">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                 <div class="carousel-indicators ">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner  eventbanner">
                  <div class="carousel-item active">
                    <img src="{{ URL::to('') }}/frontend/img/offer_banner.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-md-block ">
                        <span>EPS event</span>
                            <h5>Celebration Victory Day</h5>
                            <p>16 December, 2022</p>
                            <div id="countdown">
                                <ul>
                                    <li><span id="days"></span>days</li>
                                    <li><span id="hours"></span>Hours</li>
                                    <li><span id="minutes"></span>Minutes</li>
                                    <li><span id="seconds"></span>Seconds</li>
                                </ul>
                            </div>
                            <a href="event-details.html" class="btn btn-success  shadow-none">View Details</a>
                    </div>
                  </div>

                {{-- <div class="carousel-item ">
                    <img src="{{ URL::to('') }}/frontend/img/offer_banner.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-md-block ">
                        <span>A Special event</span>
                            <h5>Celebration. Night. Day</h5>
                            <p>01 May, 2022</p>
                            <div id="countdown">
                                <ul>
                                    <li><span id="days"></span>days</li>
                                    <li><span id="hours"></span>Hours</li>
                                    <li><span id="minutes"></span>Minutes</li>
                                    <li><span id="seconds"></span>Seconds</li>
                                </ul>
                            </div>
                            <a href="event-details.html" class="btn btn-success  shadow-none">View Details</a>
                    </div>
                  </div> --}}


                  {{-- <div class="carousel-item ">
                    <img src="{{ URL::to('') }}/frontend/img/offer_banner.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-md-block ">
                        <span>A Special event</span>
                            <h5>Celebration. Night. Day</h5>
                            <p>01 May, 2022</p>
                            <div id="countdown">
                                <ul>
                                    <li><span id="days"></span>days</li>
                                    <li><span id="hours"></span>Hours</li>
                                    <li><span id="minutes"></span>Minutes</li>
                                    <li><span id="seconds"></span>Seconds</li>
                                </ul>
                            </div>
                            <a href="event-details.html" class="btn btn-success  shadow-none">View Details</a>
                    </div>
                  </div>



                </div>
              </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

--}}


<div class="container">


    <div class="col-md-12 eventpostdiv evenpost1 lastitem">
        @foreach ($event as $evt )
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10 eventblog">
                <div class="row">
                    <div class="col-md-7">

                        @php

                       $p = $evt->event_date_en;
                       $pt = explode(' ', $p);
                    //    print_r($pt)

                        @endphp
                        <h6>{{$pt[1]}} <span>{{ $pt[0] }}</span></h6>
                        <h4>{{ $evt->title_en }}</h4>
                        <p>{{ $evt->short_details_en }}</p>


                        <a href="{{ route('frontend.event_details',$evt->slug) }}" class="btn btn-success  shadow-none">@lang('event.readbtn')</a>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ URL::to('') }}/media/event/{{ $evt->{'featured_images_'.app()->getLocale()} }}" alt="{{ $evt->alt_txt_en }}">
                    </div>
                </div>

            </div>



            <div class="col-md-1"></div>
        </div>
        @endforeach
    </div>







</div>

<script>
    (function () {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        //I'm adding this section so I don't have to keep updating this pen every year :-)
        //remove this if you don't need it
        let today = new Date(),
            dd = String(today.getDate()).padStart(2, "0"),
            mm = String(today.getMonth() + 1).padStart(2, "0"),
            yyyy = today.getFullYear(),
            nextYear = yyyy + 1,
            dayMonth = "12/16/",
            birthday = dayMonth + yyyy;

        today = mm + "/" + dd + "/" + yyyy;
        if (today > birthday) {
            birthday = dayMonth + nextYear;
        }
        //end

        const countDown = new Date(birthday).getTime(),
            x = setInterval(function () {

                const now = new Date().getTime(),
                    distance = countDown - now;

                document.getElementById("days").innerText = Math.floor(distance / (day)),
                    document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                    document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                    document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                //do something later when date is reached
                if (distance < 0) {
                    document.getElementById("headline").innerText = "It's my birthday!";
                    document.getElementById("countdown").style.display = "none";
                    document.getElementById("content").style.display = "block";
                    clearInterval(x);
                }
                //seconds
            }, 0)
    }());
</script>


<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


