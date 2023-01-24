@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->


	<!-- page header start -->
	<div class="container-fluid pagehead" id="pagehed">
		<h3>Bank to Bank</h3>
        <p><a href="{{ url('/') }}">home<a> / <a href="{{ route('frontend.service')}}"> services </a>/ <a  href="{{ route('frontend.fund_transfer')}}">Fund Transfer</a> / Bank to Bank</p>
	</div>
	<!-- page header END -->

<div class="container-fluid service-single">


        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8 serviceSinglePage">
                <img src="frontend/img/banktobank.png" alt="">

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


