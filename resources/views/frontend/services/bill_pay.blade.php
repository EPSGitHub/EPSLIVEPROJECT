@extends('frontend.layout.app')

@section('title')
Bill Pay | Services | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

@if(app()->getLocale()=='en')

	<!-- page header start -->
	<div class="container-fluid pagehead" id="pagehed">
		<h3>Bill Payment</h3>
		<p><a href="{{ url('/') }}">home<a> / <a href="{{ route('frontend.service')}}"> services </a>/ bill payment</p>
	</div>
	<!-- page header END -->

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

                                <li><i class="fa-solid fa-check"></i>Electricity Bill</li>
                                <li><i class="fa-solid fa-check"></i>Water Bill</li>
                                <li><i class="fa-solid fa-check"></i>E-Services</li>
                                {{-- <li><i class="fa-solid fa-check"></i>Invoice API</li> --}}


                            </ul>




                        </div>

                        <div class="col-md-12 fundtransferapp ">
                            <h4> To Get  EPS Bill Pay Service <br> <a href="#" class=" message">Download EPS App Now</a> </h4>

                        </div>


                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3 servicerightimg">
                        <img src="{{ URL::to('') }}/frontend/img/slider/Bill-Pay.jpg" alt="">
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

                <h3>EPS enables its users to pay utility bills through an encrypted and secured gateway.</h3>
                <p>Pay your bills seamlessly from your favorites financial platforms through EPS application.</p>

               {{--  <iframe  src="https://www.youtube.com/embed/SSJrsPlNFp8" title="EPS Easy Payment System" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}



               <div class="col-md-12 pgsection">



                <div class="row">
                    <div class="col-md-6 pgsubsection" style="margin-top: 5%">

                        <div class="pgsublists">


                            <p style="font-weight: 500;font-size:20px">Features:</p>

                          <ul style="margin-top: 5%">
                            <li><i class="fa-solid fa-check"></i> Pay utility bills easily and seamlessly. </li>
                            <li><i class="fa-solid fa-check"></i> Ensure Encrypted & Secured Transaction.</li>
                            <li><i class="fa-solid fa-check"></i> Multiple Payment Options.</li>
                            <li><i class="fa-solid fa-check"></i> User-friendly Application.</li>
                            <li><i class="fa-solid fa-check"></i> 24/7 Support.</li>



                          </ul>
                        </div>
                    </div>
                    <div class="col-md-6 billpayimgs">
                        <img  src="{{ URL::to('') }}/frontend/img/services/billpay/featureb.svg" alt="">
                    </div>
                </div>

                </div>





                <div class="col-md-12 pgsection">

                    <h4>Utility Bill Payment:</h4>
                            <p>Easy Payment System offers bill payment facility in its mobile application. All EPS users will now be able to easily pay Electricity bills, Water bills, and land-related payment services.</p>
                    <div class="row">

                        <div class="col-md-6 billpayimgs" style="margin-top: 3%">
                            <img  src="{{ URL::to('') }}/frontend/img/services/billpay/billpay.svg" alt="">
                        </div>

                        <div class="col-md-6 pgsubsection">

                            <div class="pgsublists" style="margin-top: 25%">

                                <p style="font-weight: 500;font-size:17px">EPS's biller list:</p>

                              <ul>
                                <li><i class="fa-solid fa-check"></i> DESCO Postpaid</li>
                                <li><i class="fa-solid fa-check"></i> DPDC Postpaid</li>
                                <li><i class="fa-solid fa-check"></i> Dhaka WASA</li>
                                <li><i class="fa-solid fa-check"></i> e-Porcha</li>
                                <li><i class="fa-solid fa-check"></i> Land Tax </li>
                                <li><i class="fa-solid fa-check"></i> e-Mutation          </li>


                              </ul>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="col-md-12 pgsection">

                    {{-- <h4>Step By step guidelines for paying your bills are given below:</h4> --}}
                    <p></p>

                    <div class="row">
                        <div class="col-md-6 pgsubsection" style="margin-top:10%">

                            <div class="pgsublists">

                         {{-- <p style="font-weight: 500">EPS Payment Gateway ensures:</p> --}}

                                <h4>Utility Bill Payment using the EPS App:</h4>
                              <ul>
                                <li><i class="fa-solid fa-check"></i> Step 1: Login to your EPS account using the EPS mobile application.</li>
                                <li style="text-align:left"><i class="fa-solid fa-check"></i> Step 2: Choose a biller category (e.g. Electricity).</li>
                                <li><i class="fa-solid fa-check"></i> Step 3: Choose the biller name (e.g. DESCO Post Paid).</li>
                                <li><i class="fa-solid fa-check"></i> Step 4: Enter your billing information.</li>
                                <li><i class="fa-solid fa-check"></i> Step 5: Choose your payment method and confirm payment.</li>
                                <li><i class="fa-solid fa-check"></i> Step 6: Download the bill receipt.</li>
                              </ul>
                            </div>
                        </div>

                        <div class="col-md-6 billpayimgs" style="margin-top: 3%">
                            <img src="{{ URL::to('') }}/frontend/img/services/billpay/process.svg" alt="">
                        </div>

                    </div>

                </div>


               <div class="billpaycalltoaction">
                <p style="text-align: left">Get the <a data-bs-toggle="modal"
                    data-bs-target="#exampleModal" style="font-weight:600;color:#006A4E;text-decoration:underline;text-underline-offset:3px; font-size:18px;cursor:pointer"> EPS App </a> now to pay your bills. </p>
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
                    href="{{ route('frontend.contact') }}">Contact Us</a> . We  will get back to you shortly!</p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    <div class="col-md-2"></div>

    </div>
</div>

@endif






{{-- =================================================== Bangla Version ============================================= --}}





@if(app()->getLocale()=='bn')

	<!-- page header start -->
	<div class="container-fluid pagehead" id="pagehed">
		<h3>বিল পেমেন্ট</h3>
		<p><a href="{{ route('fontend.home') }}">হোম <a> / <a href="{{ route('frontend.service')}}"> সার্ভিস  </a>/ বিল পেমেন্ট</p>
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

                                <li><i class="fa-solid fa-check"></i>বিদ্যুৎ বিল</li>
                                <li><i class="fa-solid fa-check"></i>পানির বিল</li>
                                <li><i class="fa-solid fa-check"></i>ই-সার্ভিস</li>
                                {{-- <li><i class="fa-solid fa-check"></i>Invoice API</li> --}}


                            </ul>




                        </div>

                        <div class="col-md-12 fundtransferapp ">
                            <h4> ইপিএস বিল পে সার্ভিস পেতে <br> <a href="#" class=" message">ইপিএস অ্যাপ ডাউনলোড করুন</a> </h4>

                        </div>


                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3 servicerightimg">
                        <img src="{{ URL::to('') }}/frontend/img/slider/Bill-Pay.jpg" alt="">
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

                <h3>ইপিএস পেমেন্ট গেটওয়ে একটি এনক্রিপটেড এবং নিরাপদ গেটওয়ে, যার মাধ্যমে ব্যবহারকারীরা তাদের ইউটিলিটি বিল প্রদান করতে পারে।</h3>
                <p>ইপিএস অ্যাপ ব্যবহার করে আপনার পছন্দের প্ল্যাটফর্ম থেকে নির্বিঘ্নে বিল পে করুন।.</p>

               {{--  <iframe  src="https://www.youtube.com/embed/SSJrsPlNFp8" title="EPS Easy Payment System" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}



               <div class="col-md-12 pgsection">



                <div class="row">
                    <div class="col-md-6 pgsubsection" style="margin-top: 5%">

                        <div class="pgsublists">


                            <p style="font-weight: 500;font-size:20px">ফিচারসমূহ:</p>

                          <ul style="margin-top: 5%">
                            <li><i class="fa-solid fa-check"></i> সহজে এবং নির্বেঘ্নে ইউটিলিটি বিল প্রদান </li>
                            <li><i class="fa-solid fa-check"></i> একটি এনক্রিপটেড এবং নিরাপদ লেনদেন নিশ্চিত করে</li>
                            <li><i class="fa-solid fa-check"></i> একাধিক পেমেন্ট অপশন</li>
                            <li><i class="fa-solid fa-check"></i> ইউজার-ফ্রেন্ডলি অ্যাপ্লিকেশন</li>
                            <li><i class="fa-solid fa-check"></i> ২৪/৭ সাপোর্ট </li>



                          </ul>
                        </div>
                    </div>
                    <div class="col-md-6 billpayimgs">
                        <img  src="{{ URL::to('') }}/frontend/img/services/billpay/featureb.svg" alt="">
                    </div>
                </div>

                </div>





                <div class="col-md-12 pgsection">

                    <h4>ইউটিলিটি বিল পেমেন্ট:</h4>
                            <p>ইপিএস মোবাইল অ্যাপ-এ সবধরনের বিল পেমেন্টের সুবিধা রয়েছে। ইপিএস ব্যবহারকারীরা অ্যাপের মাধ্যমে সহজেই বিদ্যুৎ, পানি এবং জমি সংক্রান্ত বিল পরিশোধ করতে পারে। </p>
                    <div class="row">

                        <div class="col-md-6 billpayimgs" style="margin-top: 3%">
                            <img  src="{{ URL::to('') }}/frontend/img/services/billpay/billpay.svg" alt="">
                        </div>

                        <div class="col-md-6 pgsubsection">

                            <div class="pgsublists" style="margin-top: 25%">

                                <p style="font-weight: 500;font-size:17px">ইপিএস বিলার লিস্ট:</p>

                              <ul>
                                <li><i class="fa-solid fa-check"></i> ডেসকো পোস্টপেইড</li>
                                <li><i class="fa-solid fa-check"></i> ডিপিডিসি পোস্টপেইড</li>
                                <li><i class="fa-solid fa-check"></i> ঢাকা ওয়াসা</li>
                                <li><i class="fa-solid fa-check"></i> ই-পর্চা</li>
                                <li><i class="fa-solid fa-check"></i> জমির খাজনা</li>
                                <li><i class="fa-solid fa-check"></i> ই-নামজারি </li>


                              </ul>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="col-md-12 pgsection">

                    {{-- <h4>Step By step guidelines for paying your bills are given below:</h4> --}}
                    <p></p>

                    <div class="row">
                        <div class="col-md-6 pgsubsection" style="margin-top:10%">

                            <div class="pgsublists">

                         {{-- <p style="font-weight: 500">EPS Payment Gateway ensures:</p> --}}

                            <h4>ইপিএস অ্যাপ ব্যবহার করে ইউটিলিটি বিল পেমেন্ট:</h4>
                              <ul>
                                <li><i class="fa-solid fa-check"></i> ধাপ ০১: ইপিএস অ্যাপের মাধ্যমে আপনার ইপিএস অ্যাকাউন্টে লগইন করুন</li>
                                <li style="text-align:left"><i class="fa-solid fa-check"></i> ধাপ ০২: ক্যাটাগরি থেকে বিলার বেছে নিন (যেমন- বিদ্যুৎ)</li>
                                <li><i class="fa-solid fa-check"></i> ধাপ ০৩: বিলারের নাম বেছে নিন (যেমন- ডেসকো পোস্টপেইড)</li>
                                <li><i class="fa-solid fa-check"></i> ধাপ ০৪: আপনার বিলের তথ্য দিন</li>
                                <li><i class="fa-solid fa-check"></i> ধাপ ০৫: পেমেন্ট মেথড সিলেক্ট করে পেমেন্ট কনফার্ম করুন</li>
                                <li><i class="fa-solid fa-check"></i> ধাপ ০৬: বিলের রসিদ ডাউনলোড করুন</li>
                              </ul>
                            </div>
                        </div>

                        <div class="col-md-6 billpayimgs" style="margin-top: 3%">
                            <img src="{{ URL::to('') }}/frontend/img/services/billpay/process.svg" alt="">
                        </div>

                    </div>

                </div>


               <div class="billpaycalltoaction">
                <p style="text-align: left">বিল পে করতে  <a data-bs-toggle="modal"
                    data-bs-target="#exampleModal" style="font-weight:600;color:#006A4E;text-decoration:underline;text-underline-offset:3px; font-size:18px;cursor:pointer"> ইপিএস অ্যাপ  </a> ডাউনলোড করুন</p>
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



{{--
<div class="container servicequery">
    <div class="row">
      <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h3>Still Have a question?</h3>
            <p>If you cannot find answer to your question in our FAQ, you can always  <a
                    href="{{ route('frontend.contact') }}">contact us</a> . We will answer to you shortly!</p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    <div class="col-md-2"></div>

    </div>
</div> --}}


<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


