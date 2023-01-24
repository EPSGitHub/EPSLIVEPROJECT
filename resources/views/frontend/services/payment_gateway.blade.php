
@extends('frontend.layout.app')

@section('title')
    Payment Gateway | Services | EPS
@endsection

@section('maincontent')
    <!-- // Start Code From Here -->

    @if(app()->getLocale()=='en')

    <!-- page header start -->
    <div class="container-fluid pagehead" id="pagehed">
        <h3>Payment Gateway</h3>
        <p><a href="{{ url('/') }}">home<a> / <a href="{{ route('frontend.service') }}"> services </a>/ payment gateway</p>
    </div>
    <!-- page header END -->

    <div class="container-fluid service-single">


        <div class="row">

            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="row pgbox">
                    <div class="col-md-1"></div>
                    <div class="col-md-4 service_hig_btn pgbtn ">

                        <ul>

                            <li><i class="fa-solid fa-check"></i>Easy Documentation</li>
                            <li><i class="fa-solid fa-check"></i>Easy Integrations</li>
                            <li><i class="fa-solid fa-check"></i>Invoice API</li>
                            <li><i class="fa-solid fa-check"></i>Create Sandbox Account</li>

                        </ul>

                        <a href="{{ route('frontend.payment.registration') }}" class="btn btn-success shadow-none">Get Started</a>



                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5 pgimg">
                        <img src="{{ URL::to('') }}/frontend/img/desktop1.png" alt="">
                    </div>
                    {{-- <div class="col-md-2 srvlist">
                        <ul style="margin-top: 200px">

                            <li class="hvr-grow"><a href="{{ route('frontend.service_single_details') }}"> <i
                                        class="fa-solid fa-circle-chevron-right"></i> Bank to Bank</a></li>
                        </ul>

                    </div> --}}
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
                        <h3>Upgrade your business with one of the finest payment gateways in Bangladesh</h3>
                        <p>Use EPS Payment Gateway for a cost-effective and effortless payment solution for your customers.</p>
                        <p>EPS Payment Gateway is a one-stop solution for every business in Bangladesh looking for easy, and effortless payment collection at the lowest cost in the market. </p>
                        <p>Irrespective of the business type, if it needs to receive payments digitally, choose EPS Payment gateway happily. It can be e-commerce (grocery, pharmacy, fashion, electronics, cosmetics, bookshop, any service provider etc.), e-learning, donation platform, school, college, university, training center, hospital, transportation and so on. All it needs is a gateway to automate its payment collection so that the customers can enjoy maximum flexibility with security and trust. Even if your business does not have a website or mobile app, do not hesitate to contact us, we may have an awesome solution for you! </p>

                        <div class="pglist col-md-12">
                            <h5 style="font-size:20px">Our payment options: </h5>
                        {{-- <i class="fa-solid fa-circle" style="font-size:8px;margin-right:5px"></i>Cards: VISA, Master, Union Pay --}}
                        <div class="row">
                            <div class="col-md-4">
                                <li style="font-size:17px; font-weight:500;margin-left: 7%;">Cards</li>
                          <ul>
                            <li><i class="fa-solid fa-check"></i> VISA</li>
                            <li><i class="fa-solid fa-check"></i> Master Card</li>
                          </ul>

                          <li style="font-size:17px; font-weight:500;margin-left: 7%;">Internet banking</li>
                          <ul>
                            <li><i class="fa-solid fa-check"></i> IBBL</li>
                            {{-- <li><i class="fa-solid fa-check"></i> SEBL</li> --}}
                          </ul>

                          <li style="font-size:17px; font-weight:500;margin-left: 7%;">Mobile banking</li>
                          <ul>
                            <li><i class="fa-solid fa-check"></i> Ok Wallet</li>
                            <li><i class="fa-solid fa-check"></i> Nagad</li>
                          </ul>
                            </div>
                            <div class="col-md-8">
                                <img src="{{ URL::to('') }}/frontend/img/services/pg/payment_option.svg" alt="">
                            </div>
                        </div>
                        </div>




                        <div class="col-md-12 pgsection">

                            <h4>Features of EPS Payment Gateway:</h4>
                                    <p>Every business requires a fast and easy system to process daily business transactions. Easy Payment System provides some of the most wholesome features for the payment gateway. Each of these features ensures a quality experience in the journey of business transactions.</p>
                            <div class="row pgbox">
                                <div class="col-md-6 pgsubsection">

                                    <div class="pgsublists">

                                 <p style="font-weight: 500">EPS Payment Gateway ensures:</p>


                                      <ul>
                                        <li style="text-align: left"><i class="fa-solid fa-check"></i> Easy integration processes for business onboarding. </li>
                                        <li><i class="fa-solid fa-check"></i> Responsive payment gateway platform.</li>
                                        <li><i class="fa-solid fa-check"></i> An easily usable developer-friendly platform to ensure the best developer experience.</li>
                                        <li><i class="fa-solid fa-check"></i> A powerful dashboard that gives total control of all the business payments.</li>


                                      </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ URL::to('') }}/frontend/img/services/pg/feature.svg" alt="" style="max-width:80%">
                                </div>
                            </div>

                        </div>


                        <div class="col-md-12 pgsection">

                            <h4>Register as a Merchant</h4>
                                    <p>Experience the all-in-one EPS Dashboard to speed up your business transactions. Register to access the most updated dashboard technology and up to date features. </p>
                            <div class="row">

                                <div class="col-md-6">
                                    <img src="{{ URL::to('') }}/frontend/img/services/pg/registration.svg" alt="">
                                </div>

                                <div class="col-md-6 pgsubsection">

                                    <div class="pgsublists">


                                      <ul>
                                        <li><i class="fa-solid fa-check"></i> Step 1: Visit the Registration Page.</li>
                                        <li><i class="fa-solid fa-check"></i> Step 2: Apply with your Business Information.</li>
                                        <li><i class="fa-solid fa-check"></i> Step 3: Get Verified.</li>
                                        <li><i class="fa-solid fa-check"></i> Step 4: Integrate with your Ecommerce Platform and/or Mobile Application.</li>
                                        <li style="text-align: left"><i class="fa-solid fa-check"></i> Step 5: Enjoy the best in Class Payment Gateway Service for your Business.</li>
                                        <a href="{{ route('frontend.contact') }}" class="btn btn-success shadow-none" style="margin-top:5%;margin-left:-2%"> Register Here</a>


                                      </ul>
                                    </div>
                                </div>

                            </div>

                        </div>











                        <div style="margin-top: 5%">
                            <p>We are growing every day. Walk towards success with us!
                       Our <a href="{{ route('frontend.contact') }}" style="font-weight:600;color:#006A4E;text-decoration:underline;text-underline-offset:3px; font-size:18px"> Pricing </a> and offers are designed to help you stay motivated, and focus more on your business growth.</p>





                        </div>




                      {{--   <h2>How to Send Money</h2>
                        <ul>
                            <li>1. Download App</li>
                            <li>2. Sing up/Log in </li>
                            <li>3. Choice the bank</li>
                            <li>4. Input receiver details.</li>
                            <li>5. Send</li>
                            <li>6. Input OTP</li>
                        </ul>

                        <iframe src="https://www.youtube.com/embed/SSJrsPlNFp8" title="EPS Easy Payment System"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> --}}



                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>

        </div>
    </div>

    <div class="container srvsin servicequery">
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















{{-- Bangla Version --}}



    <!-- // Start Code From Here -->

    @if(app()->getLocale()=='bn')

    <!-- page header start -->
    <div class="container-fluid pagehead" id="pagehed">
        <h3>পেমেন্ট গেটওয়ে</h3>
        <p><a href="{{ route('fontend.home') }}">হোম <a> / <a href="{{ route('frontend.service') }}"> সার্ভিস  </a>/ পেমেন্ট গেটওয়ে</p>
    </div>
    <!-- page header END -->

    <div class="container-fluid service-single">


        <div class="row">

            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="row pgbox">
                    <div class="col-md-1"></div>
                    <div class="col-md-4 service_hig_btn pgbtn ">

                        <ul>

                            <li><i class="fa-solid fa-check"></i>সহজ ডকুমেন্টেশন</li>
                            <li><i class="fa-solid fa-check"></i>সহজ ইন্টিগ্রেশন</li>
                            <li><i class="fa-solid fa-check"></i>ইনভয়েস এপিআই</li>
                            <li><i class="fa-solid fa-check"></i>সেন্ডবক্স অ্যাকাউন্ট তৈরি করুন</li>

                        </ul>

                        <a href="{{ route('frontend.payment.registration') }}" class="btn btn-success shadow-none">শুরু করুন </a>



                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5 pgimg">
                        <img src="{{ URL::to('') }}/frontend/img/desktop1.png" alt="">
                    </div>
                    {{-- <div class="col-md-2 srvlist">
                        <ul style="margin-top: 200px">

                            <li class="hvr-grow"><a href="{{ route('frontend.service_single_details') }}"> <i
                                        class="fa-solid fa-circle-chevron-right"></i> Bank to Bank</a></li>
                        </ul>

                    </div> --}}
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
                        <h3>বাংলাদেশের অন্যতম সেরা পেমেন্ট গেটওয়ে ব্যবহার করে আপনার ব্যবসাকে আপগ্রেট করুন!</h3>
                        <p>ইপিএস পেমেন্ট গেটওয়ে বাংলাদেশের ব্যবসায়ীদের জন্য মার্কেটের সবচেয়ে সাশ্রয়ী এবং ওয়ান-স্টপ পেমেন্ট সল্যুশন। </p>
                        <p>পাশাপাশি সহজ একটি পেমেন্ট সল্যুশন হিসেবে ইপিএস পেমেন্ট গেটওয়ে ব্যবহার করে আপনার গ্রাহকদের স্বাচ্ছন্দ্য নিশ্চিত করুন। </p>
                        <p>আপনার ব্যবসা/লেনদেনের ধরন অনুযায়ী ডিজিটাল পেমেন্ট নিশ্চিত করতে নির্দ্বিধায় ইপিএস পেমেন্ট গেটওয়ে বেছে নিন। এটি হতে পারে ই-কমার্স (মুদি, ফার্মেসি, ফ্যাশন হাউস, ইলেকট্রনিক্স পণ্য, প্রসাধনী, বুক শপ, কোনো সার্ভিস ইত্যাদি), ই-লার্নিং, ডোনেশন প্ল্যাটফর্ম, স্কুল, কলেজ, বিশ্ববিদ্যালয়, ট্রেনিং সেন্টার, হাসপাতাল, ট্রান্সপোর্টেশন এবং আরও অনেক কিছু। এই পেমেন্ট কালেকশন প্রক্রিয়াকে অটোমেটেড করতে প্রয়োজন একটি পেমেন্ট গেটওয়ে। এর ব্যবহার গ্রাহকদের স্বাচ্ছন্দ্য এবং নিরাপত্তা, দুটোই নিশ্চিত করবে।আপনার ব্যবসার ওয়েবসাইট কিংবা মোবাইল অ্যাপ না থাকলেও আমাদের সাথে যোগাযোগ করতে দ্বিধা করবেন না! আমাদের কাছে আপনার জন্য দুর্দান্ত সমাধান থাকতে পারে!   </p>

                        <div class="pglist col-md-12">
                            <h5 style="font-size:20px">আমাদের পেমেন্ট অপশনগুলো: </h5>
                        {{-- <i class="fa-solid fa-circle" style="font-size:8px;margin-right:5px"></i>Cards: VISA, Master, Union Pay --}}
                        <div class="row">
                            <div class="col-md-4">
                                <li style="font-size:17px; font-weight:500;margin-left: 7%;">কার্ডস</li>
                          <ul>
                            <li><i class="fa-solid fa-check"></i> ভিসা</li>
                            <li><i class="fa-solid fa-check"></i> মাস্টার কার্ড</li>
                          </ul>

                          <li style="font-size:17px; font-weight:500;margin-left: 7%;">ইন্টারনেট ব্যাংকিং</li>
                          <ul>
                            <li><i class="fa-solid fa-check"></i> আইবিবিএল</li>
                            {{-- <li><i class="fa-solid fa-check"></i> SEBL</li> --}}
                          </ul>

                          <li style="font-size:17px; font-weight:500;margin-left: 7%;">মোবাইল ব্যাংকিং</li>
                          <ul>
                            <li><i class="fa-solid fa-check"></i> ওকে ওয়ালেট</li>
                            <li><i class="fa-solid fa-check"></i> নগদ</li>
                          </ul>
                            </div>
                            <div class="col-md-8">
                                <img src="{{ URL::to('') }}/frontend/img/services/pg/payment_option.svg" alt="">
                            </div>
                        </div>
                        </div>




                        <div class="col-md-12 pgsection">

                            <h4>ইপিএস পেমেন্ট গেটওয়ের ফিচারসমূহ:</h4>
                                    <p>প্রতিটি ব্যবসার আর্থিক লেনদেন পরিচালনার জন্য প্রয়োজন একটি ‘ফাস্ট অ্যান্ড ইজি’ সিস্টেম। ইপিএস পেমেন্ট গেটওয়ে তেমনই সার্বিক সুযোগ-সুবিধা সম্পন্ন একটি পেমেন্ট গেটওয়ে, যার ফিচারগুলো আপনার বিজনেস ট্রানজেশনের ক্ষেত্রে চমৎকার অভিজ্ঞতা প্রদান করবে।</p>
                            <div class="row pgbox">
                                <div class="col-md-6 pgsubsection">

                                    <div class="pgsublists">

                                 <p style="font-weight: 500">ইপিএস পেমেন্ট গেটওয়ে নিশ্চিত করে:</p>


                                      <ul>
                                        <li style="text-align: left"><i class="fa-solid fa-check"></i> বিজনেস অনবোর্ডিং এর ক্ষেত্রে সহজ ইন্টিগ্রেশন প্রক্রিয়া </li>
                                        <li><i class="fa-solid fa-check"></i> রেসপন্সিভ পেমেন্ট গেটওয়ে প্ল্যাটফর্ম</li>
                                        <li><i class="fa-solid fa-check"></i> সহজে ব্যবহারযোগ্য একটি ডেভেলপার-ফ্রেন্ডলি প্ল্যাটফর্ম </li>
                                        <li><i class="fa-solid fa-check"></i> আপনার বিজনেস পেমেন্টর পূর্ণ নিয়ন্ত্রণ নিশ্চিত করতে একটি শক্তিশালী ড্যাশবোর্ড।</li>


                                      </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ URL::to('') }}/frontend/img/services/pg/feature.svg" alt="" style="max-width:80%">
                                </div>
                            </div>

                        </div>


                        <div class="col-md-12 pgsection">

                            <h4>ব্যবসায়ী/মার্চেন্ট রেজিস্ট্রেশন:</h4>
                                    <p>আপ-টু-ডেট ফিচার সমৃদ্ধ ইপিএস ড্যাশবোর্ডের অভিজ্ঞতা নিতে রেজিস্ট্রেশন করুন এবং আপনার ব্যবসায়িক লেনদেনের গতি বাড়ান।</p>
                            <div class="row">

                                <div class="col-md-6">
                                    <img src="{{ URL::to('') }}/frontend/img/services/pg/registration.svg" alt="">
                                </div>

                                <div class="col-md-6 pgsubsection">

                                    <div class="pgsublists">


                                      <ul>
                                        <li><i class="fa-solid fa-check"></i> ধাপ ০১: নিবন্ধন/রেজিস্ট্রেশন পেজ ভিজিট করুন</li>
                                        <li><i class="fa-solid fa-check"></i> ধাপ ০২: আপনার ব্যবসার নথিপত্র বা তথ্য দিয়ে আবেদন করুন</li>
                                        <li><i class="fa-solid fa-check"></i> ধাপ ০৩: তথ্য যাচাই করুন</li>
                                        <li><i class="fa-solid fa-check"></i> ধাপ ০৪: আপনার ই-কমার্স প্ল্যাটফর্ম এবং/অথবা মোবাইল অ্যাপ্লিকেশনের সাথে ইন্টিগ্রেট করুন</li>
                                        <li style="text-align: left"><i class="fa-solid fa-check"></i> ধাপ ০৫: এবার আপনার ব্যবসায় সময়ের সেরা পেমেন্ট গেটওয়ে সার্ভিস উপভোগ করুন</li>
                                        <a href="{{ route('frontend.contact') }}" class="btn btn-success shadow-none" style="margin-top:5%;margin-left:-2%"> রেজিস্ট্রার করুন</a>


                                      </ul>
                                    </div>
                                </div>

                            </div>

                        </div>











                        <div style="margin-top: 5%">
                            <p>আমাদের সাশ্রয়ী
                       <a href="{{ route('frontend.contact') }}" style="font-weight:600;color:#006A4E;text-decoration:underline;text-underline-offset:3px; font-size:18px"> রেট  </a> এবং অফার আপনাকে ইপিএস পেমেন্ট গেটওয়ে ব্যবহারের প্রতি উদ্ভুদ্ধ করবে। ইপিএস প্রতিদিনই বেড়ে উঠছে, আপনিও আমাদের সাথে সাফল্যের দিকে এগিয়ে চলুন! </p>





                        </div>




                      {{--   <h2>How to Send Money</h2>
                        <ul>
                            <li>1. Download App</li>
                            <li>2. Sing up/Log in </li>
                            <li>3. Choice the bank</li>
                            <li>4. Input receiver details.</li>
                            <li>5. Send</li>
                            <li>6. Input OTP</li>
                        </ul>

                        <iframe src="https://www.youtube.com/embed/SSJrsPlNFp8" title="EPS Easy Payment System"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> --}}



                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>

        </div>
    </div>

    <div class="container srvsin servicequery">
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

    <!-- // Start Social Icon -->

    @include('frontend.layout.social')

    <!-- // End Social Icon -->
@endsection
