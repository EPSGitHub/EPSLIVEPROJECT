@extends('frontend.layout.app')

@section('title')
App-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

<div class="container-fluid pagehead" id="pagehed">
    <h3>App Download</h3>
    <p><a href="{{ url('/') }}">Home</a> / about app</span>
</div>






<div class="container mt-3">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8  ">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 aboutapp">
                    <div class="row">
                        <div class="col-md-8 aboutappdetails">
                            <h6>EPS for Mobile</h6>
                                <h2>Available for Android and iPhone.</h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem, natus cumque.</p>
                                <a href="{{ route('frontend.apk') }}"><img src="frontend/img/googleplay.png" alt=""></a>
                                <a href="{{ route('frontend.ios') }}"><img src="frontend/img/appstore.png" alt=""></a>
                        </div>
                        <div class="col-md-4 mobileappview">
                            <img src="frontend/img/app-interface.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>


        </div>

        <div class="col-md-2"></div>
    </div>
</div>


<div class="container appviewdetails">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8  ">
            <div class="row">

               <div class="col-md-1"></div>
               <div class="col-md-10">
                 <div class="row">
                    <div class=" col-md-6 card  appviewdetailscard appviewdetailscard1">
                        <h6>EPS Android Version</h6>
                        <img src="{{ URL::to('') }}/frontend/img/qrapp.png" alt="">
                        <p>Scan me Download app</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                        <a href="{{ route('frontend.apk') }}" class="btn btn-md btn-success">Details View</a>



                    </div>

                    <div class="col-md-6 card  appviewdetailscard appviewdetailscard2">
                        <h6>EPS iOS Version</h6>
                        <img src="{{ URL::to('') }}/frontend/img/qrapp.png" alt="">
                        <p>Scan me Download app</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                        <a href="{{ route('frontend.ios') }}" class="btn btn-md btn-success">Details View</a>



                    </div>
                 </div>
               </div>
               <div class="col-md-1"></div>

            </div>


        </div>

        <div class="col-md-2"></div>
    </div>
</div>


<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


