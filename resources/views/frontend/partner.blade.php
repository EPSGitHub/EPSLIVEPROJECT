@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->

<!-- // Start Code From Here -->

<div class="container-fluid pagehead" id="pagehed">
    <h3>EPS Partners</h3>
    <p><a href="{{ url('/') }}">home</a> / Partner</p>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 epspartner ">

            <div class="container text-center ">

                <div class="portfolio-menu ">
                    <ul>
                      <li class="active" data-filter="*">All</li>
                      <li data-filter=".bank">Bank</li>
                      <li data-filter=".mfs">MFS</li>
                      <li data-filter=".finance">Financial Institute</li>
                    </ul>
                </div>
              </div>


              <div class="row portfolio-item">



                    <div class="row item partnerphoto  finance" >

                        <img src="frontend/img/partner/Robi.png" style="width:130px;"  alt="">
                        <div class="overlay ">
                            <a href="{{ route('frontend.partner-details') }}" class="btn btn-success shadow-none" href="">View Details</a>
                        </div>


                    </div>



                    <div class="row item partnerphoto  bank" >

                        <img src="frontend/img/partner/Islami_Bank.png" alt="">
                        <div class="overlay ">
                            <a class="btn btn-success shadow-none" href="">View Details</a>
                        </div>


                    </div>


                    <div class="row item partnerphoto   bank finance" >

                        <img src="frontend/img/partner/Airtel.png" alt="">
                        <div class="overlay ">
                            <a class="btn btn-success shadow-none" href="">View Details</a>
                        </div>


                    </div>


                    <div class="row item partnerphoto   finance" >

                        <img src="frontend/img/partner/Master_Card.png" style="width:180px" alt="">
                        <div class="overlay ">
                            <a class="btn btn-success shadow-none" href="">View Details</a>
                        </div>


                    </div>


                    <div class="row item partnerphoto   mfs" >

                        <img src="frontend/img/partner/nagad.png" alt="">
                        <div class="overlay ">
                            <a class="btn btn-success shadow-none" href="">View Details</a>
                        </div>


                    </div>


                    <div class="row item partnerphoto  " >

                        <img src="frontend/img/partner/Visa.png" alt="">
                        <div class="overlay ">
                            <a class="btn btn-success shadow-none" href="">View Details</a>
                        </div>


                    </div>


                    <div class="row item partnerphoto   bank" >

                        <img src="frontend/img/partner/Southeast Bank Limited.png" alt="">
                        <div class="overlay ">
                            <a class="btn btn-success shadow-none" href="">View Details</a>
                        </div>


                    </div>





                </div>










        <div class="col-md-1"></div>
    </div>
</div>




 @endsection


