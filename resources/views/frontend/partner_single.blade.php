@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

<div class="container-fluid pagehead" id="pagehed">
    <h3>EPS Partner</h3>
    <p><a href="{{ url('/') }}">home</a> / <a href="{{ route('frontend.partner') }}">partner</a> / partner details</p>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 partner-single">

            <div class="partneroverlay">
                <img src="{{ URL::to('')}}/frontend/img/collaboration.jpg" alt="">
              <div class="partnerbtn">
                <a href="{{ route('frontend.partner-details') }}" class="btn btn-md btn-success shadow-none" href="">Event Gallery</a>
              </div>
            </div>





            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex vitae elit. Ex elit. cumque magni dolore vitae cumque</h1>



            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus asperiores labore temporibus, non, voluptas sit architecto fuga impedit eum minus amet inventore blanditiis pariatur dignissimos harum velit et magnam adipisci sint quam nemo? Qui repudiandae earum officia quos saepe! Porro corrupti blanditiis earum similique! Dolorem, vel quas commodi minus tempora neque eius facilis quos hic ipsa. Doloremque numquam reprehenderit quam, dolores voluptatum expedita quisquam voluptatem totam exercitationem? Magnam iusto quis totam, incidunt vel saepe officiis, eius asperiores voluptas fugiat cupiditate veniam voluptatibus harum consequuntur quo blanditiis? Quam magni, fuga perspiciatis ullam ipsa, voluptatum perferendis sit eius alias nostrum consequuntur odio.</p>





        </div>


        <div class="col-md-2"></div>
    </div>
</div>






<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


