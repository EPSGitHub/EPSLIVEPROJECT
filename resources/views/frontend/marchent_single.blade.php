@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

<div class="container-fluid pagehead" id="pagehed">
    <h3>Merchant  Details</h3>
    <p>Home / Merchant / Details</p>
</div>


<div class="container mt-4">
    <div class="row">

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 marchentDetails">

                        <div class="row">

                            <div class="col-md-2">
                                <img src="frontend/img/logo-png1.png" alt="">
                            </div>
                            <div class="col-md-4 merchantpageheading">
                                <h2>South Corner Media</h2>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1"><i class="fa-solid fa-location-dot"></i></div>
                                        <div class="col-md-11"><p>Your location store here
                                            now, you can see....</p></div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1"><i class="fa-regular fa-envelope"></i></div>
                                        <div class="col-md-11"><p>email@gmail.com</p></div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1"><i class="fa-solid fa-phone-volume"></i></div>
                                        <div class="col-md-11"><p>+8801255422251</p></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-1"><i class="fa-solid fa-tags"></i></div>
                                        <div class="col-md-11"><p>Electronics</p></div>
                                    </div>
                                </div>



                            </div>
                            <div class=" col-md-5">
                                <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.4261153278258!2d90.38741071481776!3d23.87450408452829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c56159ed9f25%3A0x1eaccd1117a4a3c7!2sEPS%20-%20Easy%20Payment%20System!5e0!3m2!1sen!2sbd!4v1650696340227!5m2!1sen!2sbd"
                                width="100%" height="250" style="border:0;margin-top:20px;" allowfullscreen=""
                                referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>

                        </div>

                </div>
                <div class="col-md-1"></div>
            </div>
     </div>

    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-12  ">
            <div class="row">
                <div class="col-md-1 "> </div>
            <div class="col-md-10 merchanttext">

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">

                        <h4>Joining Date: 14th Sep 2022</h4>
                        <p>We are currently looking for Product Desginer for our latest exciting project. Data Path Ltd. is an Equal Opportunity Employer. Applicants regardless of gender, color, race and religion are encouraged to apply.
                            Job Responsibilities <br><br>
                            Producing high quality UI design solutions through wireframes and prototypes.<br>
                            To design user interface using visual assets like layout, patterns, typography, colors, working in highly collaborative and agile teams.

                            Maintain design principles in terms of accessibility, responsiveness, and user interaction.</p>


                    </div>
                    <div class="col-md-2"></div>
                </div>

            </div>
            <div class="col-md-1 "> </div>
            </div>
        </div>


    </div>
</div>


<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


