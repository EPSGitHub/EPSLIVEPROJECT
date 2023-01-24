@extends('frontend.layout.app')

@section('title')
Media | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

<section id="">
	<div class="container ">
		<div class="row">

			<div class="col-md-12  front_banner  ">
				<h1>Media & Gallery</h1>
				<h5><span> Media</span> </h5>
                <p><a href="{{ url('/') }}">home</a> / media</span>
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
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner offer">
                  <div class="carousel-item active">
                    <img src="{{ URL::to('') }}/frontend/img/offer_banner.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <h5>Lorem ipsum dolor sit amet...</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                        <a class="btn btn-md btn-success shadow-none " href="">View Details</a>
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


<div class="container mediagallery mediamobile">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 ">
            <div class="container text-center ">

                <div class="portfolio-menu">
                    <ul>
                      <li class="active" data-filter="*">All</li>
                      <li data-filter=".web">Web Design</li>
                      <li data-filter=".seo">Seo</li>
                      <li data-filter=".graphics">Graphics</li>
                    </ul>
                </div>
              </div>
              <div class="row portfolio-item">






                <div class="row item eventphoto web" data-bs-toggle="modal" data-bs-target="#exampleModal11" >

                    <img src="frontend/img/media/event1.png" class="hvr-grow" alt="">
                    <h3>Lorem ipsum dolor</h3>
                    <p>7 photos</p>

                </div>


                <div class="row item eventphoto seo" data-bs-toggle="modal" data-bs-target="#exampleModal11">

                    <img src="frontend/img/media/event3.png" class="hvr-grow" alt="">
                    <h3>Lorem ipsum dolor</h3>
                    <p>7 photos</p>

                </div>

                <div class="row item eventphoto web" data-bs-toggle="modal" data-bs-target="#exampleModal11">

                    <img src="frontend/img/media/event4.png" class="hvr-grow" alt="">
                    <h3>Lorem ipsum dolor</h3>
                    <p>7 photos</p>

                </div>

                <div class="row item eventphoto seo" data-bs-toggle="modal" data-bs-target="#exampleModal11">

                    <img src="frontend/img/media/event2.png" class="hvr-grow" alt="">
                    <h3>Lorem ipsum dolor</h3>
                    <p>7 photos</p>

                </div>

                <div class="row item eventphoto web" data-bs-toggle="modal" data-bs-target="#exampleModal11">

                    <img src="frontend/img/media/event1.png" class="hvr-grow" alt="">
                    <h3>Lorem ipsum dolor</h3>
                    <p>7 photos</p>

                </div>


                <div class="row item eventphoto seo" data-bs-toggle="modal" data-bs-target="#exampleModal11">

                    <img src="frontend/img/media/event3.png" class="hvr-grow" alt="">
                    <h3>Lorem ipsum dolor</h3>
                    <p>7 photos</p>

                </div>

                <div class="row item eventphoto web" data-bs-toggle="modal" data-bs-target="#exampleModal11">

                    <img src="frontend/img/media/event4.png" class="hvr-grow" alt="">
                    <h3>Lorem ipsum dolor</h3>
                    <p>7 photos</p>

                </div>

                <div class="row item eventphoto web" data-bs-toggle="modal" data-bs-target="#exampleModal11">

                    <img src="frontend/img/media/event4.png" class="hvr-grow" alt="">
                    <h3>Lorem ipsum dolor</h3>
                    <p>7 photos</p>

                </div>








        </div>


        <div class="col-md-2"></div>
    </div>
    </div>


</div>

<div class="container col-md-12">
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-6">
            <a href="{{ route('frontend.media_single') }}" class="btn btn-md btn-success  mediamore">More</a>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

    <div class=" container col-md-12">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mediavideo">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Our Video Gallery</h2>
                        <iframe  src="https://www.youtube.com/embed/SSJrsPlNFp8" title="EPS Easy Payment System" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h1>How to Make Send money to bank to Bank</h1>

                    </div>
                    <div class="col-md-4 mediaVideoRight">
                      <div class="col-md-12 mediaVideoRightPart">
                        <div class="row">
                            <div class="col-md-4 ">
                                <img src="frontend/img/media/event4.png" alt="">
                            </div>
                            <div class="col-md-8 mediavideolink">
                                <a href="">How to Make Send money to bank to Bank</a>
                            </div>

                        </div>
                      </div>

                      <div class="col-md-12 mediaVideoRightPart">
                        <div class="row">
                            <div class="col-md-4 ">
                                <img src="frontend/img/media/event4.png" alt="">
                            </div>
                            <div class="col-md-8 mediavideolink">
                                <a href="">How to Make Send money to bank to Bank</a>
                            </div>

                        </div>
                      </div>


                      <div class="col-md-12 mediaVideoRightPart">
                        <div class="row">
                            <div class="col-md-4 ">
                                <img src="frontend/img/media/event4.png" alt="">
                            </div>
                            <div class="col-md-8 mediavideolink">
                                <a href="">How to Make Send money to bank to Bank</a>
                            </div>

                        </div>
                      </div>

                      Watch More on <a href=""><i style="color:red" class="fa-brands fa-youtube"></i> <span style="color: red;font-weight:600;">Youtube<span> </a>
                    </div>
                </div>

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

@include('frontend.layout.media-modal')


 @endsection


