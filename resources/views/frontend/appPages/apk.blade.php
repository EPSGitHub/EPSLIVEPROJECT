@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->


	<!-- page header start -->
	<div class="container-fluid pagehead" id="pagehed">
		<h3>Android App Download</h3>
        <p><a href="{{ url('/') }}">home<a> / <a href="{{ route('frontend.app_details')}}"> about Apps </a>/ android app</p>
	</div>
	<!-- page header END -->

    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-9 appleft">

                        <h6>Account, Payment -  10 MINS READ</h6>
                        <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos praesentium iste, doloribus, ipsa necessitatibus velit earum nemo quam cum ipsum autem, quia dolorum expedita culpa atque harum corrupti eum. Inventore.</p>

                        <h3>How to Download app</h3>

                       <ul>
                        <li>1. Visit Playstore</li>
                        <li>2. Visit Playstore</li>
                        <li>3. Visit Playstore</li>
                        <li>4. Visit Playstore</li>
                        <li>5. Visit Playstore</li>
                       </ul>

                       <iframe  src="https://www.youtube.com/embed/SSJrsPlNFp8" title="EPS Easy Payment System" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla a ipsam quod, culpa iusto corrupti placeat consequuntur dolorum, ab, mollitia similique. Nisi maxime saepe, fuga voluptate repellat dicta odit blanditiis!</p>


                    </div>
                    <div class="col-md-3">
                        <div class="col-md-12 appright card">
                            <h6>EPS Android Version</h6>
                            <img src="frontend/img/app-interface.png" alt="">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>

                            <a href="#" class="btn btn-success">Download Android App</a>

                        </div>

                        <div class="col-md-12 apprightbottom card">

                            <p style="text-align: left"> Download EPS iOS App for Apple User  .</p>

                            <a href="{{ route('frontend.ios') }}" class="btn btn-success">Download iOS App</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>




<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


