@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->


	<!-- page header start -->
	<div class="container-fluid pagehead" id="pagehed">
		<h3>Corporate</h3>
		<p><a href="{{ url('/') }}">home<a> / <a href="{{ route('frontend.service')}}"> services </a>/ corporate</p>
	</div>
	<!-- page header END -->

<div class="container-fluid service-single">


        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-5 corporatedtl">
                        <h6> Get Started With</h6>
                        <h3> EPS Corporate Service to Make Your Corporate Transaction Easier </h3>
                        <a href="{{ route('frontend.corporate-reg') }}" class="btn shadow-none getstart" style=" background:#006A4E;color:white;" onMouseOver="this.style.background='#EE2D42'" onMouseOut="this.style.background='#006A4E'" >Get Started</a>
                    </div>
                    <div class="col-md-4 servicerightimg">
                        <img src="{{ URL::to('') }}/frontend/img/service_single.png" alt="">
                    </div>



                    <div class="col-md-3 srvlist">
                        <ul style="margin-top: 100px">
                            <li class="hvr-grow"><i class="fa-solid fa-circle-check" style="color:#006A4E"></i> Salary Disbursement</li>
                            <li class="hvr-grow"><i class="fa-solid fa-circle-check" style="color:#006A4E"></i> Utility Bill Payment</li>
                            <li class="hvr-grow"><i class="fa-solid fa-circle-check" style="color:#006A4E"></i> Mobile Recharge </li>
                            <li class="hvr-grow"><i class="fa-solid fa-circle-check" style="color:#006A4E"></i> Vendor Payment</li>
                            <li class="hvr-grow"><i class="fa-solid fa-circle-check" style="color:#006A4E"></i> Other Payments</li>
                        </ul>
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
                <p>Get along with the new EPS corporate service for better financial transactions </p>
                <p>EPS is going to bring a one-stop corporate service solution to enable all payment methods with simple and secure technology.</p>
                <p>Services under corporate solution will be: </p>

                <ul>
                    <li>Services under corporate solution will be: </li>
                    <span>24/7 Instant Disbursement, Multilayer Digital Authorization APP, Disburse from Multiple Source Bank A/C to Multiple User Bank A/C</span>
                    <li>Vendor Payment</li>
                    <span> Hassle-Free Digital Payment, Pay from any EPS Partner Banks, Pay any EPS Merchant/Vendor Nationwide</span>

                    <li>Utility Bill Payment</li>
                    <span>Electricity: DESCO Prepaid, DESCO Postpaid, DPDC Postpaid, West Zone Postpaid, NESCO Postpaid, Water: Dhaka WASA, Khulna WASA, RWASA, GAS: Jalalabad, Bakhrabad, Paschimanchal (West)</span>

                    <li>Payment Collection</li>
                    <span>Nationwide Digital Payment, No More Difficulties of Paper Cheque, Reducing Disputes, Enabling Instant Transfer</span>

                    <li>Mobile Recharge</li>
                    <span>Bulk mobile recharge is faster and easier with EPS </span>
                </ul>

               {{--  <h2>How to Send Money</h2>
                <ul>
                        <li>1. Download App</li>
                        <li>2. Sing up/Log in </li>
                        <li>3. Choice the bank</li>
                        <li>4. Input receiver details.</li>
                        <li>5. Send</li>
                        <li>6. Input OTP</li>
                </ul>

                <iframe  src="https://www.youtube.com/embed/SSJrsPlNFp8" title="EPS Easy Payment System" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 --}}


            </div>
            <div class="col-md-2"></div>
          </div>
        </div>

    </div>
</div>





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


