@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->


	<!-- page header start -->
	<div class="container-fluid pagehead" id="pagehed">
		<h3>FUND TRANSFER</h3>
		<p><a href="{{ url('/') }}">home<a> / <a href="{{ route('frontend.service_single')}}"> services </a>/ fund transfer</p>
	</div>
	<!-- page header END -->

<div class="container-fluid service-single">


        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-5">
                        <h6>Send it, Spend it</h6>
                        <h3>Instant, secure money transfer to and from your trading platform</h3>
                        <a href="{{ route('frontend.app_details') }}" class="btn shadow-none" style="background:#006A4E;color:white;" onMouseOver="this.style.background='#EE2D42'" onMouseOut="this.style.background='#006A4E'" >Get Started</a>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ URL::to('') }}/frontend/img/service_single.png" alt="" style="float: right">
                    </div>
                    <div class="col-md-3 srvlist">
                        <ul>
                            <li class="hvr-grow"><a href="{{ route('frontend.service_single_details') }}" > <i class="fa-solid fa-circle-chevron-right"></i> Bank to Bank</a></li>
                            <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> Salary Disbursment</a></li>
                            <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> Bank to Bank</a></li>
                            <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> Bank to Bank</a></li>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim, </p>

                <h2>How to Send Money</h2>
                <ul>
                        <li>1. Download App</li>
                        <li>2. Sing up/Log in </li>
                        <li>3. Choice the bank</li>
                        <li>4. Input receiver details.</li>
                        <li>5. Send</li>
                        <li>6. Input OTP</li>
                </ul>

                <iframe  src="https://www.youtube.com/embed/SSJrsPlNFp8" title="EPS Easy Payment System" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>



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
                    <h3>Still Have a question?</h3>
            <p>If you cannot find answer to your question in our FAQ, you can always  <a
                    href="{{ route('frontend.contact') }}">contact us</a> . We will answer to you shortly!</p>
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


