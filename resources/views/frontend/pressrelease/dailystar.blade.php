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


                    <h1>OSSL received Payment System Operator (PSO) license from Bangladesh Bank</h1>

                    <p>Technology solution-providing company Optimum Solution and Services Ltd. (OSSL) received the Payment System Operator (PSO) license from Bangladesh Bank on 23 August 2022. This license allows OSSL to operate as a PSO under the brand Easy Payment System (EPS). </p>

                    <p>With this authorization, EPS is able to provide financial transaction services to individuals and businesses. EPS promises to unveil new horizons to the digital financial ecosystem. Thereupon, the theme of EPS always remained <b>- Easy Solution for All Transactions</b>.</p>

                    <p>News on EPS license was published by The Daily Star, a leading English newspaper in Bangladesh.</p>


                    <hr>




                    <h4>Optimum Solution gets licence to run payment system </h4>
                    <p> — By The Daily Star</p>

                    <img src="frontend/img/media/dailystar.png" alt="">
                    <h4>OSSL received Payment System Operator (PSO) license from Bangladesh Bank </h4>



                   <p>Optimum Solution & Services Ltd has received a licence from the Bangladesh Bank to operate as a payment system operator.  </p>

                   <p>The company will run the operation under the brand name of Easy Payment System (EPS), according to a notice of the central bank yesterday.</p>

                   <p>Optimum Solution is an information solution developer that provides services and solutions and supports industries such as IT, agriculture, telecommunications, manufacturing, and health, said its website</p>

                   <p>PSOs operate a settlement system for payment activities between or among participants of which the principal participant must be a scheduled bank or financial institution. They are also known as payment gateways and payment aggregators.</p>

                   <p>Authorised PSOs in Bangladesh include IT Consultants Ltd, Software Shop Ltd, ShurjoMukhi Ltd, Portonics Ltd, Walletmix Ltd, and Soft Tech Innovation Ltd.”</p>



                    <hr>

                    <b>Source link:</b> <a style="margin-left:5px;text-decoration:underline" href="https://www.thedailystar.net/business/organisation-news/news/optimum-solution-gets-licence-run-payment-system-3101666" target="_blank">Optimum Solution gets licence to run payment system</a>








                </div>

                <div class="col-md-3 ">

                    <div class="job_details_side">
                        <h4>Publication Overview</h4>
                        <div class="job_side_item">
                            <p>Published On</p>
                            <span>Wed Aug 24, 2022 12:00 AM </span>
                            <hr>
                        </div>
                        <div class="job_side_item">
                            <p> Published By</p>
                            <span>The Daily Star</span>
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


