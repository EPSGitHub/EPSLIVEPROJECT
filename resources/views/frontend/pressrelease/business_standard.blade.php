@extends('frontend.layout.app')

@section('title')
Press Release | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

<div class="container-fluid pagehead" id="pagehed">
    <h3>Publications</h3>
    <p><a href="{{ url('/') }}">home</a> / <a href="{{ route('frontend.press_release') }}">Press Release</a> / Press details</p>
</div>
<!-- page header END -->

<div class="container ">
    <div class="row">
        <div class="col-md-12 job_details ">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-7 job_details_page ">

                    <img class="event_details_info" src="img/eventblog.png" alt="">

                    <h1>OSSL received PSO license from Bangladesh Bank</h1>
                    <p>Bangladesh Bank granted the Payment System Operator (PSO) license to technology solution provider Optimum Solution and Services Ltd. (OSSL). Using the Easy Payment System (EPS) brand, this license enables OSSL to function as a PSO.</p>

                    <p>On Tuesday, August 23, 2022, a circular regarding the license was issued by the Payment Systems Department (PSD) of Bangladesh Bank. The issued circular has been sent to the Managing Directors/Chief Executives of all Scheduled Banks, Mobile Financial Services Providers, Payment System Operators and Payment Service Providers in the country. </p>

                    <p>The Business Standard, a top English newspaper in Bangladesh, reported on the EPS license.</p>

                    <hr>
                    <img src="frontend/img/media/bstandard.png" alt="">

                    <h4>“Optimum gets payment gateway licence </h4>
                    <p> — By The Business Standard</p>


                    <h4>Tech service provider Optimum Solution & Services Ltd received the Payment System Operator (PSO) license from the Bangladesh Bank. </h4>

                    <p>From now on, the company will be able to serve as a payment gateway for various business entities.</p>
                    <p>In a circular on Tuesday (23 August), the Payment System Department of the central bank informed all banks, mobile financial services providers, payment system operators and payment service providers of the approval.</p>
                    <p>The central bank issued the license to Optimum solution & Services as the brand name of Easy Payment System (EPS) in line with the Bangladesh Payment and Settlement Systems Regulations-2014.</p>
                    <p>Optimum Solution and Services is an information solution developer that provides services and solutions and provides support to industries like IT, agriculture, telecommunications and project management. </p>
                    <p>PSO company operates a settlement system for payment activities among participants of which the principal participant must be a scheduled bank or financial institution such as a payment gateway, payment aggregator etc.</p>
                    <p>Earlier, the central bank issued payment service provider (PSP) and payment system operator (PSO) licences to ten more companies.”</p>




                    <hr>

                    <b>Source link:</b> <a style="margin-left:5px;text-decoration:underline" href="https://www.tbsnews.net/tech/optimum-gets-payment-gateway-licence-482534" target="_blank">Optimum gets payment gateway licence</a>








                </div>

                <div class="col-md-3 ">

                    <div class="job_details_side">
                        <h4>Publication Overview</h4>
                        <div class="job_side_item">
                            <p>Published On</p>
                            <span>23 August, 2022, 07:05 pm</span>
                            <hr>
                        </div>
                        <div class="job_side_item">
                            <p> Published By</p>
                            <span>The Business Standard</span>
                            <hr>
                        </div>

                    </div>




                </div>
            </div>
        </div>
    </div>
</div>
















<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


