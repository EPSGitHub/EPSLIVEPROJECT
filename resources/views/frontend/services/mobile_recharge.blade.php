@extends('frontend.layout.app')

@section('title')
Mobile Recharge | Services | EPS
@endsection


@section('maincontent')

@include('frontend.layout.social')

<!-- // Start Code From Here -->

@if(app()->getLocale()=='en')

	<!-- page header start -->
	<div class="container-fluid pagehead" id="pagehed">
		<h3>Mobile Recharge</h3>
		<p><a href="{{ url('/') }}">home<a> / <a href="{{ route('frontend.service')}}"> services </a>/ mobile recharge</p>
	</div>
	<!-- page header END -->

{{-- <div class="container-fluid service-single">


        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row">
                   <div class="col-md-1"></div>
                   <div class="col-md-6 fundTransferService">

                    <div class="col-md-12 TraffifCal">

                        <h3>Cost Calculator of Mobile Recharge</h3>
                        <div class="row">

                            <div class="col-md-12  ">
                                <div class="row">
                                   <div class="col-md-12">
                                    <select class="form-select shadow-none" aria-label="Default select example">
                                        <option selected> Select Operator</option>
                                        <option value="1">Bank to Bank</option>
                                        <option value="2">Bank to MFS</option>
                                        <option value="3">MFS to MFS</option>
                                        <option value="3">MFS to Bank</option>
                                    </select>
                                   </div>


                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                   <div class="col-md-6">
                                    <select class="form-select shadow-none" aria-label="Default select example">
                                        <option selected> Recharge Type</option>
                                        <option value="1">Bank to Bank</option>
                                        <option value="2">Bank to MFS</option>
                                        <option value="3">MFS to MFS</option>
                                        <option value="3">MFS to Bank</option>
                                    </select>
                                   </div>
                                   <div class="col-md-6 ">
                                    <select class="form-select shadow-none" aria-label="Default select example">
                                        <option selected> Sender Bank / MFS</option>
                                        <option value="1">Bank to Bank</option>
                                        <option value="2">Bank to MFS</option>
                                        <option value="3">MFS to MFS</option>
                                        <option value="3">MFS to Bank</option>
                                    </select>
                                   </div>

                                </div>

                            </div>

                            <div class="col-md-12 terrifcal">

                                <input type="text" class="form-control trafficimg" placeholder=" &#2547;  00,000.00 " >
                            </div>

                            <div class="col-md-12 terrifcalfield2services">

                                <p>Charge</p>
                                <p class="chargefee"> &#2547; 100</p>


                             </div>

                             <div class="col-md-12 terrifcalfield3services">

                                 <p>Total amount with Charge</p>
                                 <p class="totalchrges"> &#2547; 100.000</p>


                              </div>




                        </div>




                    </div>

                    <div class="col-md-12 fundtransferapp ">
                        <h4> To Get EPS Mobile Recharge Service <br> <a href="#" class=" message">Download EPS
                                App Now</a> </h4>

                    </div>


                </div>
                    <div class="col-md-3 servicerightimg">
                        <img src="{{ URL::to('') }}/frontend/img/service_single.png" alt="">
                    </div>
                    <div class="col-md-2 srvlist">
                        <ul style="margin-top: 175px">
                            <li class="hvr-grow"><a href="{{ route('frontend.service_single_details') }}" > <i class="fa-solid fa-circle-chevron-right"></i> Robi</a></li>
                            <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> Airtel</a></li>

                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-md-2">

            </div>

        </div>

</div> --}}

<div class="container-fluid service-single">


    <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row pgbox">
                <div class="col-md-1"></div>
                <div class="col-md-4 fundTransferService" >

                  {{--   <div class="col-md-12 TraffifCal">

                        <h3>Cost Calculator of Bill Pay</h3>
                        <div class="row">

                            <div class="col-md-12  ">
                                <div class="row">
                                   <div class="col-md-12">
                                    <select class="form-select shadow-none" aria-label="Default select example">
                                        <option selected> Select Bill Type</option>
                                        <option value="1">Bank to Bank</option>
                                        <option value="2">Bank to MFS</option>
                                        <option value="3">MFS to MFS</option>
                                        <option value="3">MFS to Bank</option>
                                    </select>
                                   </div>


                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                   <div class="col-md-6">
                                    <select class="form-select shadow-none" aria-label="Default select example">
                                        <option selected> Biller Name</option>
                                        <option value="1">Bank to Bank</option>
                                        <option value="2">Bank to MFS</option>
                                        <option value="3">MFS to MFS</option>
                                        <option value="3">MFS to Bank</option>
                                    </select>
                                   </div>
                                   <div class="col-md-6 ">
                                    <select class="form-select shadow-none" aria-label="Default select example">
                                        <option selected> Sender Bank / MFS</option>
                                        <option value="1">Bank to Bank</option>
                                        <option value="2">Bank to MFS</option>
                                        <option value="3">MFS to MFS</option>
                                        <option value="3">MFS to Bank</option>
                                    </select>
                                   </div>

                                </div>

                            </div>

                            <div class="col-md-12 terrifcal">

                                <input type="text" class="form-control trafficimg" placeholder=" &#2547;  00,000.00 " >
                            </div>

                            <div class="col-md-12 terrifcalfield2services">

                                <p>Charge</p>
                                <p class="chargefee"> &#2547; 100</p>


                             </div>

                             <div class="col-md-12 terrifcalfield3services">

                                 <p>Total amount with Charge</p>
                                 <p class="totalchrges"> &#2547; 100.000</p>


                              </div>




                        </div>




                    </div> --}}

                    <div class="service_hig_btn ">

                        <ul>

                            <li><i class="fa-solid fa-check"></i>Robi</li>
                            <li><i class="fa-solid fa-check"></i>Airtel</li>
                            {{-- <li><i class="fa-solid fa-check"></i>Invoice API</li> --}}
                            {{-- <li><i class="fa-solid fa-check"></i>E-Services</li> --}}

                        </ul>




                    </div>

                    <div class="col-md-12 fundtransferapp ">
                        <h4> To Get  EPS Mobile Recharge Service <br> <a href="#" class=" message">Download EPS App Now</a> </h4>

                    </div>


                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3 servicerightimg">
                    <img src="{{ URL::to('') }}/frontend/img/slider/mobile.svg" alt="">

                </div>

                  {{-- <div class="col-md-2 srvlist">
                  <ul>
                        <li class="hvr-grow"><a href="{{ route('frontend.service_single_details') }}" > <i class="fa-solid fa-circle-chevron-right"></i> Electricity Bill</a></li>
                        <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> Water Bill</a></li>
                        <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> Gas Bill</a></li>
                        <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> InternetBill</a></li>
                        <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> Telephone Bill</a></li>
                        <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> E- Service</a></li>
                    </ul> --}}
                </div>
            </div>

        </div>
        <div class="col-md-2">

        </div>

    </div>

</div>

<div class="container">
    <div class="row">

        <div class="col-md-12">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 sin_ser_headline">
                <h3>Instantly Recharge your mobile using the EPS Mobile App  </h3>

                <p>EPS makes mobile recharge easier. Easy Payment System makes mobile recharge possible from your cards, mobile wallets or internet banking services.</p>



               {{-- <h2>How to Send Money</h2>
                <ul>
                        <li>1. Download App</li>
                        <li>2. Sing up/Log in </li>
                        <li>3. Choice the bank</li>
                        <li>4. Input receiver details.</li>
                        <li>5. Send</li>
                        <li>6. Input OTP</li>
                </ul>

                <iframe  src="https://www.youtube.com/embed/SSJrsPlNFp8" title="EPS Easy Payment System" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}

                <div class="col-md-12 pgsection">

                    <h4>How-to recharge your mobile</h4>
                            <p>EPS users can easily recharge their Robi & Airtel Prepaid/Postpaid numbers. </p>
                    <div class="row">
                        <div class="col-md-6 pgsubsection" style="margin-top:8%">

                            <div class="pgsublists">
                              <ul>
                                <li><i class="fa-solid fa-check"></i> Step 1: Login to your EPS account using the EPS mobile application.</li>
                                <li><i class="fa-solid fa-check"></i> Step 2: Choose the mobile recharge option and select an operator (e.g. Robi).</li>
                                <li><i class="fa-solid fa-check"></i> Step 3: Enter your phone number.</li>
                                <li><i class="fa-solid fa-check"></i> Step 4: Select prepaid or postpaid and type-in the recharge amount.</li>
                                <li><i class="fa-solid fa-check"></i> Step 5: Choose your payment method and confirm payment.</li>
                                <li><i class="fa-solid fa-check"></i> Step 6: Download the receipt.</li>
                              </ul>

                            </div>
                        </div>
                        <div class="col-md-6 billpayimgs" style="margin-top: 3%">
                            <img  src="{{ URL::to('') }}/frontend/img/services/mobilerecharge/mobile.svg" alt="">
                        </div>
                    </div>

                    <p style="text-align: left">Get the <a data-bs-toggle="modal"
                        data-bs-target="#exampleModal" style="font-weight:600;color:#006A4E;text-decoration:underline;text-underline-offset:3px; font-size:18px;cursor:pointer"> EPS App </a> now to recharge your mobile. </p>



                </div>




            </div>
            <div class="col-md-2"></div>
          </div>
        </div>

    </div>
</div>


<div class="container servicequery">
    <div class="row">
      <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h3>Still have a question?</h3>
            <p>If you cannot find  the answers of your questions in our <a href="{{ route('frontend.faq') }}">FAQ</a>, you can always  <a
                    href="{{ route('frontend.contact') }}">Contact Us</a> . We will get back to you shortly!</p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    <div class="col-md-2"></div>

    </div>
</div>

@endif
<!-- // Start Social Icon -->



<!-- // End Social Icon -->













@if(app()->getLocale()=='bn')

	<!-- page header start -->
	<div class="container-fluid pagehead" id="pagehed">
		<h3>মোবাইল রিচার্জ</h3>
		<p><a href="{{ route('fontend.home') }}">হোম <a> / <a href="{{ route('frontend.service')}}"> সার্ভিসেস  </a>/ মোবাইল রিচার্জ</p>
	</div>
	<!-- page header END -->

<div class="container-fluid service-single">


    <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row pgbox">
                <div class="col-md-1"></div>
                <div class="col-md-4 fundTransferService" >



                    <div class="service_hig_btn ">

                        <ul>

                            <li><i class="fa-solid fa-check"></i> রবি </li>
                            <li><i class="fa-solid fa-check"></i> এয়ারটেল</li>
                            {{-- <li><i class="fa-solid fa-check"></i>Invoice API</li> --}}
                            {{-- <li><i class="fa-solid fa-check"></i>E-Services</li> --}}

                        </ul>




                    </div>

                    <div class="col-md-12 fundtransferapp ">
                        <h4> ইপিএস মোবাইল রিচার্জ সার্ভিস পেতে <br> <a href="#" class=" message">ইপিএস অ্যাপ ডাউনলোড করুন</a> </h4>

                    </div>


                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3 servicerightimg">
                    <img src="{{ URL::to('') }}/frontend/img/slider/mobile.svg" alt="">

                </div>

                  {{-- <div class="col-md-2 srvlist">
                  <ul>
                        <li class="hvr-grow"><a href="{{ route('frontend.service_single_details') }}" > <i class="fa-solid fa-circle-chevron-right"></i> Electricity Bill</a></li>
                        <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> Water Bill</a></li>
                        <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> Gas Bill</a></li>
                        <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> InternetBill</a></li>
                        <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> Telephone Bill</a></li>
                        <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> E- Service</a></li>
                    </ul> --}}
                </div>
            </div>

        </div>
        <div class="col-md-2">

        </div>

    </div>

</div>

<div class="container">
    <div class="row">

        <div class="col-md-12">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 sin_ser_headline">
                <h3> ইপিএস মোবাইল অ্যাপের মাধ্যমে মুহূর্তেই মোবাইল রিচার্জ করুন </h3>

                <p>ইপিএস-এর মাধ্যমে আপনার কার্ড, মোবাইল ওয়ালেট কিংবা ইন্টারনেট ব্যাংকিং থেকে মোবাইল রিচার্জ সম্ভব। তাই ইপিএস-এ মোবাইল রিচার্জ এখন আরও সহজ! </p>



               {{-- <h2>How to Send Money</h2>
                <ul>
                        <li>1. Download App</li>
                        <li>2. Sing up/Log in </li>
                        <li>3. Choice the bank</li>
                        <li>4. Input receiver details.</li>
                        <li>5. Send</li>
                        <li>6. Input OTP</li>
                </ul>

                <iframe  src="https://www.youtube.com/embed/SSJrsPlNFp8" title="EPS Easy Payment System" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}

                <div class="col-md-12 pgsection">

                    <h4>কীভাবে মোবাইল রিচার্জ করবেন:</h4>
                            <p>ইপিএস ব্যবহারকারীরা খুব সহজেই তাদের রবি এবং এয়ারটেল (প্রিপেইড/পোস্টপেইড) নম্বর রিচার্জ করতে পারবেন। </p>
                    <div class="row">
                        <div class="col-md-6 pgsubsection" style="margin-top:8%">

                            <div class="pgsublists">
                              <ul>
                                <li><i class="fa-solid fa-check"></i> ধাপ ০১: ইপিএস মোবাইল অ্যাপের মাধ্যমে আপনার ইপিএস অ্যাকাউন্টে লগইন করুন</li>
                                <li><i class="fa-solid fa-check"></i> ধাপ ০২: মোবাইল রিচার্জ আপশন সিলেক্ট করে একটি আপারেটর বেছে নিন (যেমন- রবি)</li>
                                <li><i class="fa-solid fa-check"></i> ধাপ ০৩: আপনার ফোন নম্বর দিন</li>
                                <li><i class="fa-solid fa-check"></i> ধাপ ০৪: প্রিপেইড অথবা পোস্টপেইড সিলেক্ট করে রিচার্জ অ্যামাউন্ট লিখুন</li>
                                <li><i class="fa-solid fa-check"></i> ধাপ ০৫: পেমেন্ট মেথড সিলেক্ট করে পেমেন্ট কনফার্ম করুন</li>
                                <li><i class="fa-solid fa-check"></i> ধাপ ০৬: বিলের রসিদ ডাউনলোড করুন</li>
                              </ul>

                            </div>
                        </div>
                        <div class="col-md-6 billpayimgs" style="margin-top: 3%">
                            <img  src="{{ URL::to('') }}/frontend/img/services/mobilerecharge/mobile.svg" alt="">
                        </div>
                    </div>

                    <p style="text-align: left">মুহূর্তেই মোবাইল রিচার্জ করতে <a data-bs-toggle="modal"
                        data-bs-target="#exampleModal" style="font-weight:600;color:#006A4E;text-decoration:underline;text-underline-offset:3px; font-size:18px;cursor:pointer">  ইপিএস অ্যাপ ডাউনলোড  </a> করুন </p>



                </div>




            </div>
            <div class="col-md-2"></div>
          </div>
        </div>

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
                    <p>আপনি যদি আমাদের  <a href="{{ route('frontend.faq') }}">সাধারণ জিজ্ঞাসা </a>, অংশে আপনার উত্তর খুঁজে না পান তাহলে আমাদের সাথে   <a
                        href="{{ route('frontend.contact') }}">যোগাযোগ</a> করুন। আমরা যত দ্রুত সম্ভব যোগাযোগ করবো! </p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    <div class="col-md-2"></div>

    </div>
</div>

@endif

























 @endsection


