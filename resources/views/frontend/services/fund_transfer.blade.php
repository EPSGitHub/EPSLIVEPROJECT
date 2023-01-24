@extends('frontend.layout.app')

@section('title')
    single-details | EPS
@endsection


@section('maincontent')
    <!-- // Start Code From Here -->


    <!-- page header start -->
    <div class="container-fluid pagehead" id="pagehed">
        <h3>Fund Transfer</h3>
        <p><a href="{{ url('/') }}">home<a> / <a href="{{ route('frontend.service') }}"> services </a>/ fund
                    transfer</p>
    </div>
    <!-- page header END -->
{{--
    <div class="container-fluid service-single">


        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-6 fundTransferService">


                        <div class="col-md-12 TraffifCal">

                            <h3>Cost Calculator of Fund Transfer</h3>
                            <div class="row">

                                <div class="col-md-12  ">
                                    <div class="row">
                                       <div class="col-md-12">
                                        <select class="form-select shadow-none" aria-label="Default select example">
                                            <option selected> EPS Services</option>
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
                                            <option selected> Sender Bank</option>
                                            <option value="1">Bank to Bank</option>
                                            <option value="2">Bank to MFS</option>
                                            <option value="3">MFS to MFS</option>
                                            <option value="3">MFS to Bank</option>
                                        </select>
                                       </div>
                                       <div class="col-md-6 ">
                                        <select class="form-select shadow-none" aria-label="Default select example">
                                            <option selected> Receiver Bank</option>
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
                            <h4> To Get EPS Fund Transfer Service <br> <a href="#" class=" message">Download EPS
                                    App Now</a> </h4>

                        </div>


                    </div>
                    <div class="col-md-3 servicerightimg">
                        <img src="{{ URL::to('') }}/frontend/img/service_single.png" alt="">
                    </div>
                    <div class="col-md-2 srvlist">
                        <ul style="margin-top: 200px">

                            <li class="hvr-grow"><a href="{{ route('frontend.service_single_details') }}"> <i
                                        class="fa-solid fa-circle-chevron-right"></i> Bank to Bank</a></li>
                        </ul>

                    </div>
                </div>

            </div>
            <div class="col-md-2">

            </div>

        </div>

    </div> --}}

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 sin_ser_headline">
                        <p>Transfer funds using EPS in a simple, secure and fast method </p>
                        <p>EPS is going to bring the easiest fund transfer solution! Eliminating the traditional dependencies and difficulties, EPS will enable you to send and receive money among friends and family, even for business purposes. </p>
                        <p>EPS fund transfer is a Secured, Simple, and Fast way!</p>
                        <p>Stay updated to soon embrace EPS fund transfer service to give you a hassle-free lifestyle! </p>

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


   {{--  <div class="container servicequery">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h3>Still Have a question?</h3>
                        <p>If you cannot find answer to your question in our FAQ, you can always <a
                                href="{{ route('frontend.contact') }}">contact us</a> . We will answer to you shortly!</p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>
 --}}

    <!-- // Start Social Icon -->

    @include('frontend.layout.social')

    <!-- // End Social Icon -->
@endsection
