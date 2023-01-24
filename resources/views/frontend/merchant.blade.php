@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

<div class="container-fluid pagehead" id="pagehed">
    <h3>Merchant Locator</h3>
    <p><a href="{{ url('/') }}">home</a> / merchant locator</p>
</div>



<div class="container mt-2">


                <div class="row">
                    <div class="col-md-1 "> </div>
                    <div class="col-md-10 merchantTopSec">

                        <div class="row">

                            <div class="col-md-12">

                                    <form action="" class="row g-3">

                                    <div class="col-md-2">
                                        <select class="form-select shadow-none " aria-label="Default select example">
                                            <option selected>Division</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="col-md-2">
                                        <select class="form-select shadow-none " aria-label="Default select example">
                                            <option selected>Thana</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <select class="form-select shadow-none " aria-label="Default select example">
                                            <option selected>Tag</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="search" class="form-control" placeholder="Search by Merchant Name">
                                    </div>

                                    <div class="col-md-1">
                                        <button type="submit"  class="btn btn-md btn-success form-control"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>




                                </form>



                            </div>

                        </div>
                    </div>
                    <div class="col-md-1 "> </div>
                </div>




            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 merchantDetails">
                    <div class="row">
                        <div class="col-md-3 merchantleftportion">
                               <div class="merchentcard">
                                    <h5>South Corner Media</h5>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div class="col-md-10">
                                            <p>Your location store here
                                                now, you can see....</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fa-regular fa-envelope"></i>
                                        </div>
                                        <div class="col-md-10">
                                            <p>email@gmail.com</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fa-solid fa-phone-volume"></i>
                                        </div>
                                        <div class="col-md-10">
                                            <p>+8801255422251</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <i class="fa-solid fa-tags"></i>
                                        </div>
                                        <div class="col-md-10">
                                            <p>Electronics</p>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-12">
                                            <a href="{{ route('frontend.merchant_details') }}" class="btn btn-sm btn-success shadow-none firstbtn">Details</a>
                                            <a href=""  class="btn btn-sm btn-secondary secondbtn shadow-none">Map view</a>
                                        </div>
                                    </div>

                               </div>




                               <div class="merchentcard">
                                <h5>South Corner Media</h5>
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <p>Your location store here
                                            now, you can see....</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa-regular fa-envelope"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <p>email@gmail.com</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa-solid fa-phone-volume"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <p>+8801255422251</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa-solid fa-tags"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <p>Clothing</p>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-12">
                                        <a href="{{ route('frontend.merchant_details') }}" class="btn btn-sm btn-success firstbtn shadow-none">Details</a>
                                        <a href=""  class="btn btn-sm btn-secondary secondbtn shadow-none">Map view</a>
                                    </div>
                                </div>

                           </div>




                           <div class="merchentcard">
                            <h5>South Corner Media</h5>
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="col-md-10">
                                    <p>Your location store here
                                        now, you can see....</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa-regular fa-envelope"></i>
                                </div>
                                <div class="col-md-10">
                                    <p>email@gmail.com</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa-solid fa-phone-volume"></i>
                                </div>
                                <div class="col-md-10">
                                    <p>+8801255422251</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fa-solid fa-tags"></i>
                                </div>
                                <div class="col-md-10">
                                    <p>Super Shop</p>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-12">
                                    <a href="{{ route('frontend.merchant_details') }}" class="btn btn-sm btn-success firstbtn shadow-none">Details</a>
                                    <a href=""  class="btn btn-sm btn-secondary secondbtn shadow-none">Map view</a>
                                </div>
                            </div>

                       </div>



                       <div class="merchentcard">
                        <h5>South Corner Media</h5>
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="col-md-10">
                                <p>Your location store here
                                    now, you can see....</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="col-md-10">
                                <p>email@gmail.com</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="col-md-10">
                                <p>+8801255422251</p>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-12">
                                <a href="" class="btn btn-sm btn-success firstbtn">Details</a>
                                <a href=""  class="btn btn-sm btn-secondary secondbtn">Map view</a>
                            </div>
                        </div>

                   </div>











                        </div>
                        <div class="col-md-9">
                            <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.4261153278258!2d90.38741071481776!3d23.87450408452829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c56159ed9f25%3A0x1eaccd1117a4a3c7!2sEPS%20-%20Easy%20Payment%20System!5e0!3m2!1sen!2sbd!4v1650696340227!5m2!1sen!2sbd"
                            width="100%" style="border:0;" allowfullscreen=""
                            referrerpolicy="no-referrer-when-downgrade">
                           </iframe>
                        </div>
                    </div>

                </div>
                <div class="col-md-1"></div>


            </div>


        </div>

</div>


<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


