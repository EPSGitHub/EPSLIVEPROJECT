@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')



<!-- // Start Code From Here -->


	<!-- page header start -->
	<div class="container-fluid pagehead" id="pagehed">
		<h3>Tariff Calculator</h3>
        <p><a href="">Home</a>/ Tariff Calculator</p>

	</div>
	<!-- page header END -->

<div class="container-fluid service-single">


        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 fundTransferService mb-3" >

                        <div class="col-md-12 TraffifCal">

                            <h2>EPS Cost Calculator</h2>
                            <div class="row">

                                <div class="col-md-12  ">
                                    <div class="row">
                                       <div class="col-md-6">
                                        <select class="form-select shadow-none " aria-label="Default select example">
                                            <option selected> EPS Service</option>
                                            <option value="1">Bank to Bank</option>
                                            <option value="2">Bank to MFS</option>
                                            <option value="3">MFS to MFS</option>
                                            <option value="3">MFS to Bank</option>
                                        </select>
                                       </div>
                                       <div class="col-md-6">
                                        <select class="form-select shadow-none" aria-label="Default select example">
                                            <option selected> EPS Service</option>
                                            <option value="1">Bank to Bank</option>
                                            <option value="2">Bank to MFS</option>
                                            <option value="3">MFS to MFS</option>
                                            <option value="3">MFS to Bank</option>
                                        </select>
                                       </div>

                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                       <div class="col-md-6">
                                        <select class="form-select shadow-none" aria-label="Default select example">
                                            <option selected> EPS Service</option>
                                            <option value="1">Bank to Bank</option>
                                            <option value="2">Bank to MFS</option>
                                            <option value="3">MFS to MFS</option>
                                            <option value="3">MFS to Bank</option>
                                        </select>
                                       </div>
                                       <div class="col-md-6 ">
                                        <select class="form-select shadow-none" aria-label="Default select example">
                                            <option selected> EPS Service</option>
                                            <option value="1">Bank to Bank</option>
                                            <option value="2">Bank to MFS</option>
                                            <option value="3">MFS to MFS</option>
                                            <option value="3">MFS to Bank</option>
                                        </select>
                                       </div>

                                    </div>

                                </div>

                                <div class="col-md-12 terrifcal">
                                    <input type="text" class="form-control trafficimg" placeholder=" &#2547;  00,000.00 " >
                                </div>

                                <div class="col-md-12 terrifcalfield2">

                                   <p>Charge</p>
                                   <p class="terrifcalfield2charges"> &#2547; 100</p>


                                </div>

                                <div class="col-md-12 terrifcalfield3">

                                    <p>Total amount with Charge</p>
                                    <p class="totalchrg"> &#2547; 100.000</p>


                                 </div>




                            </div>




                        </div>




                    </div>


                </div>

            </div>
            <div class="col-md-2">

            </div>

        </div>

</div>




<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


