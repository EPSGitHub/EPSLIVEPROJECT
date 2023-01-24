@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

<div class="container-fluid pagehead" id="pagehed">
    <h3>Offers</h3>
    <p><a href="{{ url('/') }}">home<a> / <a href="{{ route('frontend.offer') }}"> offer</a>/ offer details</p>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-8 offersingle">
                    <h6>Send Money</h6>
                    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, voluptate?</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt cumque reprehenderit, doloribus voluptatum natus nulla atque officiis aut labore fugiat.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore, quo vitae consectetur quisquam id itaque libero, in voluptatum eius sint molestiae a. Accusantium mollitia perferendis doloribus ipsam optio. Aliquid odio quis quibusdam eligendi laboriosam impedit magnam, similique nemo accusamus libero dolorum adipisci quam quaerat assumenda consectetur hic mollitia perferendis vero. Totam dolores eligendi vitae, molestias dolorem consectetur tenetur enim rem amet cumque maxime ab expedita aliquam hic voluptates, dignissimos eum!</p>

                    <img src="{{ URL::to('') }}/frontend/img/offer/spoffer6.png"  alt="">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet necessitatibus asperiores, pariatur iure officiis qui aspernatur consectetur soluta et temporibus sapiente, repellendus magnam. Quibusdam aliquam aliquid repudiandae exercitationem amet quae dolorum at voluptatem labore voluptates. Cum veniam quo delectus vel.</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3 relatedoffer">
                    <h2>Releted Offers</h2>
                    <div class="offercard2">
                        <a href=""><img src="{{ URL::to('') }}/frontend/img/offer/spoffer2.png" alt=""></a>
                        <p href="">Special Offer</p>
                    </div>

                    <div class="offercard2">
                        <a href=""><img src="{{ URL::to('') }}/frontend/img/offer/spoffer2.png" alt=""></a>
                        <p href="">Special Offer</p>
                    </div>

                    <div class="offercard2">
                        <a href=""><img src="{{ URL::to('') }}/frontend/img/offer/spoffer2.png" alt=""></a>
                        <p href="">Special Offer</p>
                    </div>

                </div>




            </div>
        </div>


        <div class="col-md-2"></div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 offerSingleBannerads">

            <img src="frontend/img/offer/single_d_ads.png" alt="">

        </div>
        <div class="col-md-2"></div>
    </div>
</div>




<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


