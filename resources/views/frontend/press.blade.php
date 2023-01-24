@extends('frontend.layout.app')

@section('title')
Press Release | EPS
@endsection

@php

@endphp

@section('maincontent')


<style>
    .row {
        margin: 0;
        padding: 0;
    }
</style>

<!-- // Start Code From Here -->

<section id="">
    <div class="container ">
        <div class="row">
            <div class="col-md-12  front_banner bnpagehead ">
                <h1>@lang('press.heading1')</h1>
                <h5>@lang('press.heading2f') <span>@lang('press.heading2l')</span> </h5>
                <p><a href="{{ route('fontend.home') }}">@lang('press.breadcumFirstlink')</a> / @lang('press.breadcumSecondlink')</span>
            </div>
        </div>
    </div>
</section>
@include('frontend.layout.social')


{{-- carasoul Start --}}

@if(app()->getLocale()=='en')
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 pressrelease">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">


                    <div class="carousel-item active">
                        <img src="{{ URL::to('') }}/frontend/img/media/slider/banglapost.png"  class="d-block w-100 " alt="...">
                        <div class="carousel-caption d-md-block ">
                            <h5>Bangladesh Bank granted Payment System Operator (PSO) license to Easy Payment System (EPS)</h5>
                            <p>Easy Payment System (EPS) is an innovative payment solution permitted by Bangladesh Bank as a Payment System Operator (PSO).</p>
                            <a class="btn btn-md btn-success  shadow-none" style="left:-10%" href="{{ route('frontend.businessdesk') }}">View Details</a>
                        </div>
                      </div>




                    <div class="carousel-item ">
                      <img src="{{ URL::to('') }}/frontend/img/media/slider/dailystar.png" class="d-block w-100" alt="...">
                      <div class="carousel-caption  d-md-block ">
                          <h5>OSSL received Payment System Operator (PSO) license from Bangladesh Bank</h5>
                          <p>Technology solution-providing company Optimum Solution and Services Ltd. (OSSL) received the Payment System Operator (PSO) license from Bangladesh Bank on 23 August...</p>
                          <a class="btn btn-md btn-success  shadow-none" style="left:-10%" href="{{ route('frontend.daily_star') }}">View Details</a>
                      </div>
                    </div>



                    <div class="carousel-item ">
                        <img src="{{ URL::to('') }}/frontend/img/media/slider/business_s.png"  class="d-block w-100 " alt="...">
                        <div class="carousel-caption  d-md-block ">
                            <h5>OSSL received PSO license from Bangladesh Bank</h5>
                            <p>Bangladesh Bank granted the Payment System Operator (PSO) license to technology solution provider Optimum Solution and Services Ltd. (OSSL) ...</p>
                            <a class="btn btn-md btn-success  shadow-none" style="left:-10%" href="{{ route('frontend.business_standard') }}">View Details</a>
                        </div>
                      </div>






                </div>
              </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>


@endif
{{-- carasoul END --}}





<div class="container prelease">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" >


                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">


                                {{--   <form action="">
                                        <div class="input-group mb-1">
                                            <input type="text" class="form-control" placeholder="Type your Question"
                                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn  btn-danger  shadow-none " type="button"><i
                                                        class="fa-solid fa-magnifying-glass"></i></button>
                                            </div>
                                        </div>
                                    </form> --}}



                        </div>
                    </div>
                    </div>
                </div>
@if(app()->getLocale()=='en')

                @foreach ($press as $p)


                <div class="col-md-12 pressblogdiv ">
                    <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10  pressblog">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{ URL::to('') }}/media/press/{{ $p->	feature_img }}" alt="">
                            </div>
                            <div class="col-md-7">

                                @php

                                $pr = $p->published_date;
                                $pt = explode(' ', $pr);
                             //    print_r($pt)

                                 @endphp
                                 <h6>{{$pt[1]}} <span>{{ $pt[0] }}</span></h6>
                                <h4>{{ $p->title }}</h4>
                                <p>{{ $p->shortdes }}</p>

                                <a href="{{ route('frontend.pressdetails',$p->slug) }}" class="btn btn-success shadow-none">Read More</a>
                            </div>

                        </div>

                    </div>



                    <div class="col-md-1"></div>
                </div> </div>



                @endforeach


                <div class="mt-4" style="display:flex;justify-content:center;">
                    {{ $press->links() }}
                </div>



 @endif


{{-- Bangla version --}}


 @if(app()->getLocale()=='bn')

                @foreach ($bpress as $p)


                <div class="col-md-12 pressblogdiv ">
                    <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10  pressblog">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{ URL::to('') }}/media/press/{{ $p->	feature_img }}" alt="">
                            </div>
                            <div class="col-md-7">

                                @php

                                $pr = $p->published_date;
                                $pt = explode(' ', $pr);
                             //    print_r($pt)

                                 @endphp
                                 <h6>{{$pt[1]}} <span>{{ $pt[0] }}</span></h6>
                                <h4>{{ $p->title }}</h4>
                                <p>{{ $p->shortdes }}</p>

                                <a href="{{ route('frontend.pressdetails',$p->slug) }}" class="btn btn-success shadow-none">Read More</a>
                            </div>

                        </div>

                    </div>



                    <div class="col-md-1"></div>
                </div> </div>



                @endforeach


                <div class="mt-4" style="display:flex;justify-content:center;">
                    {{ $press->links() }}
                </div>



 @endif








       </div>
        <div class="col-md-2"></div>
    </div>
</div>




<!-- // Start Social Icon -->



<!-- // End Social Icon -->


 @endsection


