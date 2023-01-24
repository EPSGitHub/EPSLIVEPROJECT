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



                    <h1>Bangladesh Bank granted Payment System Operator (PSO) license to Easy Payment System (EPS)</h1>

                    <p>Easy Payment System (EPS) is an innovative payment solution permitted by Bangladesh Bank as a Payment System Operator (PSO). Developed by a global technology solution provider Optimum Solution and Services Ltd. (OSSL), EPS aims to provide Fintech solutions for all financial Institutions. </p>

                    <p>The ecosystem of the digital financial promises to be expanded by EPS. The theme of EPS was then and has always been an Easy Solution for All Transactions.</p>

                    <p>News on EPS license was published by Bangladesh Post, a prominent English online portal in Bangladesh.</p>


                    <hr>
                    <img src="frontend/img/media/bpost.png" alt="">

                    <h4>“Optimum Solution gets PSO licence from BB</h4>
                    <p> — By Bangladesh Post</p>


                    <h4>Bangladesh Bank granted Payment System Operator (PSO) license to Easy Payment System (EPS)</h4>
                    <p>Technology solution providing company Optimum Solution and Services Ltd. (OSSL) received the Payment System Operator (PSO) license from Bangladesh Bank on Tuesday</p>

                    <p>With this, OSSL will be able to operate as a PSO under the brand name Easy Payment System (EPS).</p>

                    <p>A circular regarding the license was issued by the Payment Systems Department (PSD) of Bangladesh Bank. The issued circular has been sent to the Managing Directors/Chief Executives of all Scheduled Banks, Mobile Financial Services Providers, Payment System Operators and Payment Service Providers in the country.</p>

                    <p>The circular states that, “According to the ‘Bangladesh Payment and Settlement Systems Regulation–2014’ issued under Section 7(A) (E) of Bangladesh Bank Order 1972, OSSL has been given the license as a PSO to run its operations within under the brand name of Easy Payment System (EPS)”.</p>

                    <p>PSD of Bangladesh Bank has so far granted licenses to a total of seven institutions as PSO. EPS is one of them. With this authorization, EPS is able to provide financial transaction services to individuals and businesses.
                        EPS promises to unveil new horizons to the digital financial ecosystem. The theme of EPS is ‘Easy Solution for All Transactions’.”
                        </p>



                    <img src="img/eventblog.png" alt="" width="300px" class="mb-2">
                    <img src="img/eventblog.png" alt="" width="300px" class="mb-2">
                    <img src="img/eventblog.png" alt="" width="300px">
                    <img src="img/eventblog.png" alt="" width="300px">



                    <hr>

                    <b>Source link:</b> <a style="margin-left:5px;text-decoration:underline" href="https://www.bangladeshpost.net/posts/optimum-solution-gets-pso-licence-from-bb-93127" target="_blank">Optimum Solution gets PSO licence from BB </a>








                </div>

                <div class="col-md-3 ">

                    <div class="job_details_side">
                        <h4>Publication Overview</h4>
                        <div class="job_side_item">
                            <p>Published On</p>
                            <span>25 Aug 2022 09:16 PM</span>
                            <hr>
                        </div>
                        <div class="job_side_item">
                            <p> Published By</p>
                            <span>Business Desk </span>
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


