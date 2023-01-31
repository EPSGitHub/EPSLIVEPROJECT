@extends('frontend.layout.app')


@if(app()->getLocale()=='en')

@section('title')
Services | EPS| Easy Payment System
@endsection

@section('metadescription')


Easy Payment System (EPS) provides a number of services that enable effortless financial transactions for every sector of our daily lives.

@endsection
@endif

@if(app()->getLocale()=='bn')

@section('title')
সার্ভিসেস | ইপিএস | ইজি পেমেন্ট সিস্টেম
@endsection

@section('metadescription')

ইজি পেমেন্ট সিস্টেম (ইপিএস) আমাদের দৈনন্দিন জীবনের আর্থিক লেনদেনগুলোকে সহজ এবং নিরাপদ করতে বিভিন্ন ধরনের সার্ভিস প্রদান করে

@endsection
@endif


@section('maincontent')




<!-- // Start Code From Here -->
<div class="container ">
    <div class="row">
        <div class="col-md-12  front_banner bnpagehead ">
            <h1>@lang('service.heading1')</h1>
            <h5>@lang('service.heading2f') <span>@lang('service.heading2l')</span> </h5>
            <p><a href="{{ route('fontend.home') }}">@lang('service.breadcumFirstlink')</a> / @lang('service.breadcumSecondlink')</span>
        </div>
    </div>
</div>
<!-- page heading  END-->

{{-- Slider start --}}

<div class="container-fluid serviceslide">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 serviceslider">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
             {{--      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 3"></button> --}}
                </div>

                @if(app()->getLocale()=='en')
                <div class="carousel-inner">

                  <div class="carousel-item active " data-bs-interval="5000">

                    <div class="carousel-caption">

                     <div class="row">
                        <div class="col-md-6">
                            <h5 class=" Service_title_text  " >PAYMENT<span class="Service_title_text_span">GATEWAY</span></h5>
                            <h3 class="animate__animated animate__fadeIn animate__delay-2s animate__slower	2s seasy">EASY <br> PAYMENT <br> SYSTEM</h3>
                           <ul>
                                <li class="animate__animated animate__fadeInLeft delay-1 "><a href="#paymentgateway"><i class="fa-solid fa-check"></i> E-Commerce Payment</a></li>


                            </ul>




                        </div>
                        <div class="col-md-6">
                            <div class="slimg">
                                <div class="rotate top cirshape"></div>
                               <div class="div">
                                <div class="slimgp">
                                    <p></p>
                                </div>

                                <img class="animate__animated animate__slideInUp animate__slower	2s" src="{{ URL::to('')}}/frontend/img/slider/paymentgateway.svg" alt="EPS Payment Gateway">
                               </div>

                            </div>

                        </div>


                        </div>
                     </div>

                    </div>




                    <div class="carousel-item  " data-bs-interval="9000">

                        <div class="carousel-caption">

                         <div class="row">
                            <div class="col-md-6">
                                <h5 class=" Service_title_text " >BILL<span class=" Service_title_text_span">PAYMENT</span></h5>
                                <h3 class="animate__animated animate__fadeIn animate__delay-2s animate__slower	2s seasy">EASY <br> PAYMENT <br> SYSTEM</h3>
                               <ul>
                                    <li class="animate__animated animate__fadeInLeft delay-1 "><a href="#billpay"><i class="fa-solid fa-check"></i> Electricity Bill </a></li>
                                    <li class="animate__animated animate__fadeInLeft delay-2"><a href="#billpay"><i class="fa-solid fa-check"></i> Water Bill </a></li>
                                    {{-- <li class="animate__animated animate__fadeInLeft delay-3 "><a href="#billpay"><i class="fa-solid fa-check"></i> Gas Bill </a></li> --}}
                                    <li class="animate__animated animate__fadeInLeft delay-3 "><a href="#billpay"><i class="fa-solid fa-check"></i> E - Services </a></li>

                                </ul>




                            </div>
                            <div class="col-md-6">
                                <div class="slimg">
                                    <div class="rotate top cirshape"></div>
                                   <div class="div">
                                    <div class="slimgp">
                                        <p></p>
                                    </div>

                                    <img class="animate__animated animate__slideInUp animate__slower	2s" src="{{ URL::to('')}}/frontend/img/slider/Bill-Pay.svg" alt="EPS Bill Payment">
                                   </div>

                                </div>

                            </div>


                            </div>
                         </div>

                        </div>






                        <div class="carousel-item  " data-bs-interval="7000">

                            <div class="carousel-caption">

                             <div class="row">
                                <div class="col-md-6">
                                    <h5 class="Service_title_text " >MOBILE<span class="Service_title_text_span">RECHARGE</span></h5>
                                    <h3 class="animate__animated animate__fadeIn animate__delay-2s animate__slower	2s seasy">EASY <br> PAYMENT <br> SYSTEM</h3>
                                   <ul>
                                        <li class="animate__animated animate__fadeInLeft delay-1 "> <a href="#mobilerecharge"><i class="fa-solid fa-check"></i> Robi </a></li>
                                        <li class="animate__animated animate__fadeInLeft delay-2"> <a href="#mobilerecharge"><i class="fa-solid fa-check"></i> Airtel </a></li>

                                    </ul>




                                </div>
                                <div class="col-md-6">
                                    <div class="slimg">
                                        <div class="rotate top cirshape"></div>
                                       <div class="div">
                                        <div class="slimgp">
                                            <p></p>
                                        </div>

                                        <img class="animate__animated animate__slideInUp animate__slower	2s" src="{{ URL::to('')}}/frontend/img/slider/mobile.svg" alt="EPS Mobile Recharge">
                                       </div>

                                    </div>

                                </div>


                                </div>
                             </div>

                        </div>




























                </div>
                @endif



                @if(app()->getLocale()=='bn')
                <div class="carousel-inner">

                  <div class="carousel-item active " data-bs-interval="5000">

                    <div class="carousel-caption">

                     <div class="row">
                        <div class="col-md-6">
                            <h5 class=" Service_title_text  " >পেমেন্ট <span class="Service_title_text_span">গেটওয়ে</span></h5>
                            <h3 class="animate__animated animate__fadeIn animate__delay-2s animate__slower	2s seasy">ইজি <br> পেমেন্ট <br> সিস্টেম</h3>
                           <ul>
                                <li class="animate__animated animate__fadeInLeft delay-1 "><a href="#paymentgateway"><i class="fa-solid fa-check"></i> ই-কমার্স পেমেন্ট</a></li>


                            </ul>




                        </div>
                        <div class="col-md-6">
                            <div class="slimg">
                                <div class="rotate top cirshape"></div>
                               <div class="div">
                                <div class="slimgp">
                                    <p></p>
                                </div>

                                <img class="animate__animated animate__slideInUp animate__slower	2s" src="{{ URL::to('')}}/frontend/img/slider/paymentgateway.svg" alt="ইপিএস পেমেন্ট গেটওয়ে  ">
                               </div>

                            </div>

                        </div>


                        </div>
                     </div>

                    </div>




                    <div class="carousel-item  " data-bs-interval="9000">

                        <div class="carousel-caption">

                         <div class="row">
                            <div class="col-md-6">
                                <h5 class=" Service_title_text " >বিল <span class=" Service_title_text_span">পেমেন্ট</span></h5>
                                <h3 class="animate__animated animate__fadeIn animate__delay-2s animate__slower	2s seasy">ইজি <br> পেমেন্ট <br> সিস্টেম</h3>
                               <ul>
                                    <li class="animate__animated animate__fadeInLeft delay-1 "><a href="#billpay"><i class="fa-solid fa-check"></i> বিদ্যুৎ বিল </a></li>
                                    <li class="animate__animated animate__fadeInLeft delay-2"><a href="#billpay"><i class="fa-solid fa-check"></i> পানির বিল </a></li>
                                    {{-- <li class="animate__animated animate__fadeInLeft delay-3 "><a href="#billpay"><i class="fa-solid fa-check"></i> Gas Bill </a></li> --}}
                                    <li class="animate__animated animate__fadeInLeft delay-3 "><a href="#billpay"><i class="fa-solid fa-check"></i> ই-সার্ভিস </a></li>

                                </ul>




                            </div>
                            <div class="col-md-6">
                                <div class="slimg">
                                    <div class="rotate top cirshape"></div>
                                   <div class="div">
                                    <div class="slimgp">
                                        <p></p>
                                    </div>

                                    <img class="animate__animated animate__slideInUp animate__slower	2s" src="{{ URL::to('')}}/frontend/img/slider/Bill-Pay.svg" alt="ইপিএস বিল পেমেন্ট ">
                                   </div>

                                </div>

                            </div>


                            </div>
                         </div>

                        </div>






                        <div class="carousel-item  " data-bs-interval="7000">

                            <div class="carousel-caption">

                             <div class="row">
                                <div class="col-md-6">
                                    <h5 class="Service_title_text " >মোবাইল <span class="Service_title_text_span">রিচার্জ</span></h5>
                                    <h3 class="animate__animated animate__fadeIn animate__delay-2s animate__slower	2s seasy">ইজি <br> পেমেন্ট <br> সিস্টেম</h3>
                                   <ul>
                                        <li class="animate__animated animate__fadeInLeft delay-1 "> <a href="#mobilerecharge"><i class="fa-solid fa-check"></i> রবি </a></li>
                                        <li class="animate__animated animate__fadeInLeft delay-2"> <a href="#mobilerecharge"><i class="fa-solid fa-check"></i> এয়ারটেল </a></li>

                                    </ul>




                                </div>
                                <div class="col-md-6">
                                    <div class="slimg">
                                        <div class="rotate top cirshape"></div>
                                       <div class="div">
                                        <div class="slimgp">
                                            <p></p>
                                        </div>

                                        <img class="animate__animated animate__slideInUp animate__slower	2s" src="{{ URL::to('')}}/frontend/img/slider/mobile.svg" alt="ইপিএস মোবাইল রিচার্জ ">
                                       </div>

                                    </div>

                                </div>


                                </div>
                             </div>

                        </div>


                </div>
                @endif



              </div>


        </div>
        <div class="col-md-1"></div>
    </div>
</div>


{{-- Slider End --}}

{{-- <div class="col-md-12" style="margin-top: 50px; background:white ;position:absolute; top:75%">
    <p style="margin-top: 20px"></p>
</div> --}}


<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class=" col-md-9 choice_service">

         <div class="row">

            <div class="col-md-12">




                <p>@lang('service.paragraph_1')</p>

                <p>@lang('service.paragraph_2')</p>
            </div>

         </div>






        </div>
        <div class="col-md-1"></div>
    </div>
</div>







@if(app()->getLocale()=='en')

<div class="container">

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 our_service ">
            <div class="row">

                <div class="col-md-4 servicelist" id="paymentgateway">
                    <img src="{{ URL::to('') }}/frontend/img/service_page/sendmoney.png" alt=" Payment Gateway EPS">
                    <h3>Payment <span> Gateway</span></h3>
                    <p>EPS gives the best in-class Payment Gateway for your Customers </p>
                    <a href="{{ route('frontend.payment') }}"> Read More <i class="fa-solid fa-chevron-right"></i></a>
                     <ul>
                        <li {{-- class="hvr-grow" --}}><i class="fa-solid fa-check"></i> E-Commerce Payment</li>



                     </ul>
                </div>

                <div class="col-md-4 servicelist" id="billpay">
                    <img src="{{ URL::to('') }}/frontend/img/service_page/sendmoney.png" alt="EPS">
                    <h3>Bill <span> Payment </span></h3>
                    <p>EPS offers the easiest way to pay all your bills from a single App</p>
                    <a href="{{ route('frontend.billpay') }}"> Read More <i class="fa-solid fa-chevron-right"></i></a>
                    <ul>
                        <li {{-- class="hvr-grow" --}}> <i class="fa-solid fa-check"></i> Electricity Bill</li>
                        <li {{-- class="hvr-grow" --}}> <i class="fa-solid fa-check"></i> Water Bill</li>
                        {{-- <li class="hvr-grow"> <i class="fa-solid fa-check"></i> Gas Bill</li> --}}
                        <li {{-- class="hvr-grow" --}}> <i class="fa-solid fa-check"></i> E-Services</li>

                     </ul>
                </div>

                <div class="col-md-4 servicelist" id="recharge">
                    <img src="{{ URL::to('') }}/frontend/img/service_page/sendmoney.png" alt="EPS">
                    <h3>Mobile <span> Recharge</span></h3>
                    <p>EPS makes your mobile recharge simpler and faster</p>
                    <a href="{{ route('frontend.mobile_recharge') }}"> Read More <i class="fa-solid fa-chevron-right"></i></a>
                    <ul>
                        <li {{-- class="hvr-grow" --}}> <i class="fa-solid fa-check"></i> Robi</li>
                        <li {{-- class="hvr-grow" --}}><i class="fa-solid fa-check"></i> Airtel</li>

                     </ul>
                </div>


            </div>

        </div>

        <div class="col-md-1"></div>





    </div>

</div>

@endif






{{-- bangla version content --}}







@if(app()->getLocale()=='bn')

<div class="container">

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 our_service ">
            <div class="row">

                <div class="col-md-4 servicelist" id="paymentgateway">
                    <img src="{{ URL::to('') }}/frontend/img/service_page/sendmoney.png" alt="ইপিএস">
                    <h3>পেমেন্ট  <span> গেটওয়ে</span></h3>
                    <p>ইপিএস আপনার কাস্টমারদের জন্য সময়ের সেরা পেমেন্ট গেটওয়ে অফার করে </p>
                    <a href="{{ route('frontend.payment') }}"> আরও পড়ুন <i class="fa-solid fa-chevron-right"></i></a>
                     <ul>
                        <li {{-- class="hvr-grow" --}}><i class="fa-solid fa-check"></i> ই-কমার্স পেমেন্ট</li>



                     </ul>
                </div>

                <div class="col-md-4 servicelist" id="billpay">
                    <img src="{{ URL::to('') }}/frontend/img/service_page/sendmoney.png" alt="ইপিএস">
                    <h3>বিল <span> পেমেন্ট </span></h3>
                    <p>ইপিএস অ্যাপ আপনার সকল বিল পে করার সবচেয়ে সহজ উপায় অফার করে </p>
                    <a href="{{ route('frontend.billpay') }}"> আরও পড়ুন <i class="fa-solid fa-chevron-right"></i></a>
                    <ul>
                        <li {{-- class="hvr-grow" --}}> <i class="fa-solid fa-check"></i>বিদ্যুৎ বিল</li>
                        <li {{-- class="hvr-grow" --}}> <i class="fa-solid fa-check"></i> পানির বিল</li>
                        {{-- <li class="hvr-grow"> <i class="fa-solid fa-check"></i> Gas Bill</li> --}}
                        <li {{-- class="hvr-grow" --}}> <i class="fa-solid fa-check"></i> ই-সার্ভিস</li>

                     </ul>
                </div>

                <div class="col-md-4 servicelist" id="recharge">
                    <img src="{{ URL::to('') }}/frontend/img/service_page/sendmoney.png" alt="ইপিএস">
                    <h3>মোবাইল  <span> রিচার্জ</span></h3>
                    <p>ইপিএস-এর মাধ্যমে আপনার মোবাইল রিচার্জ হবে আরও সিম্পল এবং ফাস্ট</p>
                    <a href="{{ route('frontend.mobile_recharge') }}"> আরও পড়ুন <i class="fa-solid fa-chevron-right"></i></a>
                    <ul>
                        <li {{-- class="hvr-grow" --}}> <i class="fa-solid fa-check"></i> রবি</li>
                        <li {{-- class="hvr-grow" --}}><i class="fa-solid fa-check"></i> এয়ারটেল</li>

                     </ul>
                </div>


            </div>

        </div>

        <div class="col-md-1"></div>





    </div>

</div>

@endif



{{-- <div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class=" col-md-8 service_banner">
            <img src="frontend/img/service_page/application-banner.png" alt="">

        </div>
        <div class="col-md-2"></div>
    </div>
</div> --}}



<div class="container">

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 our_service ">
            <div class="row">
                <div class="col-md-2"></div>
                {{-- <div class="col-md-4 servicelist" id="corporate">
                    <img src="{{ URL::to('') }}/frontend/img/service_page/sendmoney.png" alt="">
                    <h3>Corporate <span> Solution</span></h3>
                    <p>Get along with the new EPS corporate service for better financial transactions</p>
                    <a href="{{ route('frontend.corporate') }}"> Read More <i class="fa-solid fa-chevron-right"></i></a>
                     <ul>
                        <li class="hvr-grow"><i class="fa-solid fa-check"></i> Salary Disbursement</li>
                        <li class="hvr-grow"><i class="fa-solid fa-check"></i> Utility Bill Payment </li>
                        <li class="hvr-grow"><i class="fa-solid fa-check"></i> Corporate Other Payments</li>
                        <li class="hvr-grow"><i class="fa-solid fa-check"></i> Vendor & Supplier Payment</li>
                     </ul>
                </div> --}}

               {{--  <div class="col-md-4 servicelist" id="fundtransfer">
                    <img src="{{ URL::to('') }}/frontend/img/service_page/sendmoney.png" alt="">
                    <h3>Fund  <span> Transfer</span></h3>
                    <p>Transfer funds using EPS in a simple, secure and fast method</p>
                    <a href="{{ route('frontend.fund_transfer') }}"> Read More <i class="fa-solid fa-chevron-right"></i></a>
                    <ul>
                        <li class="hvr-grow" ><i class="fa-solid fa-check"></i> Bank to Bank</li>


                     </ul>
                </div> --}}
                <div class="col-md-2"></div>

            </div>

        </div>

        <div class="col-md-1"></div>





    </div>

</div>


<div class="container servicequery">
    <div class="row">
      <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h3>@lang('service.still_title')</h3>

            @if(app()->getLocale()=='en')
            <p>If you cannot find  the answers of your questions in our <a href="{{ route('frontend.faq') }}">FAQ</a>, you can always  <a
                    href="{{ route('frontend.contact') }}">Contact Us</a> . We will get back to you shortly!</p>

            @endif

            @if(app()->getLocale()=='bn')
            <p>আপনি যদি আমাদের  <a href="{{ route('frontend.faq') }}">সাধারণ জিজ্ঞাসা </a>, অংশে আপনার উত্তর খুঁজে না পান তাহলে আমাদের সাথে   <a
                    href="{{ route('frontend.contact') }}">যোগাযোগ</a> করুন। আমরা যত দ্রুত সম্ভব যোগাযোগ করবো! </p>

            @endif


                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    <div class="col-md-2"></div>

    </div>
</div>



<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


