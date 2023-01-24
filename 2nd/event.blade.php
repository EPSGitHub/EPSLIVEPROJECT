@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

<div class="container ">
    <div class="row">
        <div class="col-md-12  front_banner  ">
            <h1>JOIN OUR EVENT</h1>
            <h5>EVENT<span></span> </h5>
            <p><a href="{{ url('/') }}">home</a> / event</span>
        </div>
    </div>
</div>

<div class="container eventcarousel">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                {{-- <div class="carousel-indicators ">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div> --}}
                <div class="carousel-inner  eventbanner">
                  <div class="carousel-item active">
                    <img src="{{ URL::to('') }}/frontend/img/offer_banner.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-md-block ">
                        <span>EPS event</span>
                            <h5>New Year Celebration</h5>
                            <p>01 Jan, 2023</p>
                            <div id="countdown">
                                <ul>
                                    <li><span id="days"></span>days</li>
                                    <li><span id="hours"></span>Hours</li>
                                    <li><span id="minutes"></span>Minutes</li>
                                    <li><span id="seconds"></span>Seconds</li>
                                </ul>
                            </div>
                            <a href="#" class="btn btn-success  shadow-none">View Details</a>
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
                  </div> --}}



                </div>
              </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="row">
                @foreach ($event as $evt )
                <div class="col-md-4">
                    <div class="card eventcard">
                        <img class="card-img-top" src="{{ URL::to('') }}/media/event/{{ $evt->featured_images_en }}" alt="Card image cap">
                        <div class="card-body">
                            @php
                            $p = $evt->event_date_en;
                            $pt = explode(' ', $p);
                         //    print_r($pt)

                             @endphp
                             <h6>{{$pt[1]}} <span>{{ $pt[0] }}</span></h6>
                          <h5 class="card-title">{{ $evt->title_en }}</h5>

                          <a href="{{ route('frontend.event_details',$evt->slug) }}" class="btn btn-success shadow-none" >view Details</a>
                        </div>
                      </div>

                </div>







                @endforeach

            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>



<div class="container">


    <div class="col-md-12 eventpostdiv evenpost1 lastitem">
        @foreach ($event as $evt )
        <div class="row">
            <div class="col-md-1"></div>



            <div class="col-md-10 ">
                <div class="row">




                    {{-- <div class="col-md-8">

                        @php

                       $p = $evt->event_date_en;
                       $pt = explode(' ', $p);
                    //    print_r($pt)

                        @endphp
                        <h6>{{$pt[1]}} <span>{{ $pt[0] }}</span></h6>
                        <h4>{{ $evt->title_en }}</h4>
                        {{-- <p>{!! htmlspecialchars_decode( Str::limit($evt->description_en, 120)) !!}</p>



                        <a href="{{ route('frontend.event_details',$evt->slug) }}" class="btn btn-success  shadow-none">Read More</a>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ URL::to('') }}/media/event/{{ $evt->featured_images_en }}" alt="">
                    </div> --}}
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
            dayMonth = "01/01/",
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


