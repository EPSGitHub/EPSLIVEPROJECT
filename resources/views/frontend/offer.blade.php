@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

<section id="">
	<div class="container ">
		<div class="row">

			<div class="col-md-12  front_banner  ">
				<h1>GET Your</h1>
				<h5><span> Offers</span> </h5>
                <p><a href="{{ url('/') }}">home</a> / offers</span>
			</div>

		</div>
	</div>
</section>





<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner offer">
                  <div class="carousel-item active" data-bs-interval="600000">
                    <img src="{{ URL::to('') }}/frontend/img/offer_banner.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <h5>Lorem ipsum dolor sit amet...</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                        <a class="btn btn-md btn-success shadow-none" href="">View Details</a>
                    </div>
                  </div>

                <div class="carousel-item ">
                    <img src="{{ URL::to('') }}/frontend/img/offer_banner.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <h5>Lorem ipsum dolor sit amet...</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                        <a class="btn btn-md btn-success shadow-none" href="">View Details</a>
                    </div>
                  </div>


                  <div class="carousel-item ">
                    <img src="{{ URL::to('') }}/frontend/img/offer_banner.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <h5>Lorem ipsum dolor sit amet...</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                        <a class="btn btn-md btn-success shadow-none" href="">View Details</a>
                    </div>
                  </div>



                </div>
              </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>








<!-- // Start Social Icon -->



<!-- // End Social Icon -->
@include('frontend.layout.social')


<div class="container offergallery">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="container text-center">

                <div class="portfolio-menu">
                    <ul>
                      <li class="active" data-filter="*">All</li>
                      <li data-filter=".web">Fund Transfer</li>
                      <li data-filter=".seo">Bill Pay</li>
                      <li data-filter=".graphics">Mobile Recharge</li>
                      <li data-filter=".web">Corporate</li>
                    </ul>
                </div>
              </div>
              <div class="portfolio-item">

                <div class="row item seo">
                    <div class="col-md-6 ">
                       <div class="offercard1 hvr-grow">
                      <a href="{{ route('frontend.offer_single') }}">  <img src="{{ URL::to('') }}/frontend/img/offer/spoffer6.png"  alt=""></a>
                       </div>
                    </div>
                    <div class="col-md-3">
                       <div class="offercard2 hvr-grow">
                        <a href=""><img src="{{ URL::to('') }}/frontend/img/offer/spoffer2.png" alt=""></a>
                        <p href="">Special Offer</p>
                       </div>
                    </div>

                    <div class="col-md-3">
                        <div class="offercard2 hvr-grow">
                         <a href=""><img src="{{ URL::to('') }}/frontend/img/offer/spoffer2.png" alt=""></a>
                         <p href="">Special Offer</p>
                        </div>
                     </div>

                     <div class="col-md-12 offsec2">
                        <div class="row">
                            <div class="col-md-6 hvr-grow ">
                                <div class="row offsec2content ">
                                    <div class="col-md-6">
                                        <div class="offercard3 ">
                                            <a href="">  <img src="{{ URL::to('') }}/frontend/img/offer/spoffer4.png"  alt=""></a>
                                             </div>
                                    </div>
                                    <div class="col-md-6 offsec2contentdtl ">
                                        <h3>Special Offer</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur</p>
                                        <a href="" class="btn btn-sm btn-success shadow-none">Check Details</a>


                                    </div>
                                </div>
                             </div>


                             <div class="col-md-6 hvr-grow ">
                                <div class="row offsec2content">
                                    <div class="col-md-6">
                                        <div class="offercard3 ">
                                            <a href="">  <img src="{{ URL::to('') }}/frontend/img/offer/spoffer4.png"  alt=""></a>
                                             </div>
                                    </div>
                                    <div class="col-md-6 offsec2contentdtl ">
                                        <h3>Special Offer</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur</p>
                                        <a href="" class="btn btn-sm btn-success shadow-none">Check Details</a>


                                    </div>
                                </div>
                             </div>

                        </div>
                     </div>


                     <div class="col-md-12 offsec3">
                        <div class="row">
                            <div class="col-md-6 hvr-grow ">

                                  <div class="offsec3content">
                                    <a href=""> <img src="{{ URL::to('') }}/frontend/img/offer/spoffer5.png"  alt=""></a>
                                    <h3>Special Offer</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur</p>
                                   <div class="offsec3btn">
                                    <a href="" class="btn btn-sm btn-success shadow-none">Check Details</a>
                                   </div>

                                  </div>


                            </div>
                            <div class="col-md-6 ">

                                <div class="col-md-12 hvr-grow offsec3contentright mb-3 ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="offercard3 mb-3 ">
                                                <a href="">  <img src="{{ URL::to('') }}/frontend/img/offer/spoffer4.png"  alt=""></a>
                                                 </div>
                                        </div>
                                        <div class="col-md-6 offsec2contentdtl ">
                                            <h3>Special Offer</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur</p>
                                            <a href="" class="btn btn-sm btn-success shadow-none">Check Details</a>


                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12 hvr-grow offsec3contentright">
                                  <div class="row">
                                    <div class="col-md-6">
                                        <div class="offercard3 mb-3 ">
                                            <a href="">  <img src="{{ URL::to('') }}/frontend/img/offer/spoffer4.png"  alt=""></a>
                                             </div>
                                    </div>
                                    <div class="col-md-6 offsec2contentdtl ">
                                        <h3>Special Offer</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur</p>
                                        <a href="" class="btn btn-sm btn-success shadow-none">Check Details</a>


                                    </div>
                                  </div>
                                </div>


                            </div>
                        </div>
                     </div>


                </div>




             {{--    <div class="item web">
                    <div style="background-image: url(http://www.esse90.it/wp-content/uploads/2017/07/img-placeholder.png);"></div>
                </div>
                <div class="item web">
                    <div style="background-image: url(https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97150&w=350&h=150);"></div>
                </div>
                <div class="item seo">
                    <div style="background-image: url(http://unitel.com.br/wp-content/uploads/2014/03/img-3.gif);"></div>
                </div>
                <div class="item graphics">
                    <div style="background-image: url(http://www.dracorion.com/wp-content/uploads/2012/03/placeholder4-480x300-crop.jpg);"></div>
                </div>
                <div class="item seo">
                    <div style="background-image: url(http://dummyimage.com/600x250/666666/fff&text=Dynamic+Dummy+Image+Generator);"></div>
                </div>
                <div class="item web">
                    <div style="background-image: url(http://fpoimg.com/600x250/For%20Place%20Only%20Image);"></div>
                </div> --}}



        </div>


        <div class="col-md-2"></div>
    </div>
    </div>


    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 upoffer">
                <div class="div">
                    <h3>Upcoming Offer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt perspiciatis earum nisi est inventore? Sequi esse eveniet reprehenderit adipisci incidunt!</p>
                </div>
                <div class="div">
                    <a href="">  <img src="{{ URL::to('') }}/frontend/img/offer/spoffer6.png"  alt=""></a>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

 @endsection


