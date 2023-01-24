@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->

<!-- // Start Code From Here -->

<div class="container-fluid pagehead" id="pagehed">
    <h3>Media Gallery</h3>
    <p><a href="{{ url('/') }}">home</a> / <a href="{{ route('frontend.media') }}">Media</a> / Event Gallery</p>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mediaSingleGallery">

            <h1>Our Photo Gallery</h1>
            <div class="container text-center mediagalleryMenu ">

                <div class="portfolio-menu ">
                    <ul>
                      <li class="active" data-filter="*">All</li>
                      <li data-filter=".web">Web Design</li>
                      <li data-filter=".seo">Seo</li>
                      <li data-filter=".graphics">Graphics</li>
                    </ul>
                </div>
              </div>
              <div class="row portfolio-item">


                <div class="row item eventphoto seo " data-bs-toggle="modal" data-bs-target="#exampleModal11">

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












        </div>

        <div class="col-md-2"></div>
    </div>
</div>







@include('frontend.layout.media-modal')

 @endsection


