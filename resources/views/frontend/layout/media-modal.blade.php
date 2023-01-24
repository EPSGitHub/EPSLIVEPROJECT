{{-- Media Modal Start --}}
<div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-lg  modal-dialog-centered">
        <div class="modal-content" style="background: none">

            <div class="modal-body" style="padding: 0; background:white;border-top-left-radius:15px;border-top-right-radius:15px ">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-11"></div>
                        <div class="col-md-1">
                            <button type="button" class="btn-close xpose  newdwnclose mediaclose"  data-bs-dismiss="modal" ></button>
                        </div>
                    </div>
                </div>


                <div class="slideshow-container">

                    <div class="mySlides animate__animated animate__fadeIn ">
                      <div class="numbertext">1 / 3</div>
                      <img src="{{ URL::to('') }}/frontend/img/offer/spoffer6.png" style="width:100%">

                    </div>

                    <div class="mySlides animate__animated animate__fadeIn ">
                      <div class="numbertext">2 / 3</div>
                      <img src="{{ URL::to('') }}/frontend/img/offer/spoffer6.png" style="width:100%">

                    </div>

                    <div class="mySlides animate__animated animate__fadeIn">
                      <div class="numbertext">3 / 3</div>
                      <img src="{{ URL::to('') }}/frontend/img/offer/spoffer6.png" style="width:100%">
                      {{-- <div class="text">Caption Three</div> --}}
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>

                    </div>

                    <script>
                    let slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                      showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                      showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                      let i;
                      let slides = document.getElementsByClassName("mySlides");
                      if (n > slides.length) {slideIndex = 1}
                      if (n < 1) {slideIndex = slides.length}
                      for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                      }

                      slides[slideIndex-1].style.display = "block";

                    }
                    </script>



            </div>

            <h2 style="font-family: 'poppins', sans-serif; font-size:22px;color:white; padding:10px 0px 10px 21px;background: rgba(255,255,255, 0.3);margin-bottom:-10px">Title Goes Here</h2>


            <div class="modal-footer" style="margin-top:10px;background:white;font-family: 'poppins', sans-serif;padding:10px 20px">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, asperiores fugit? Corporis dicta labore nobis sint soluta nostrum nisi illum perferendis vel? <a href="{{ route('frontend.media_single_details') }}" style="font-weight: 600;text-decoration:underline;">Read More<a></p>
              </div>

        </div>
    </div>
</div>


<style>

                    .mySlides {display: none}
                    img {vertical-align: middle;}

                    /* Slideshow container */
                    .slideshow-container {
                      max-width: 1000px;
                      position: relative;
                      margin: auto;
                    }

                    /* Next & previous buttons */
                    .prev, .next {
                      cursor: pointer;
                      position: absolute;
                      top: 50%;
                      width: auto;
                      padding: 16px;
                      margin-top: -22px;
                      color: white;
                      font-weight: bold;
                      font-size: 18px;
                      transition: 0.6s ease;
                      border-radius: 0 3px 3px 0;
                      user-select: none;
                    }

                    /* Position the "next button" to the right */
                    .next {
                      right: -100px;
                      border-radius: 3px 0 0 3px;
                    }

                    .prev {
                      left: -100px;
                      border-radius: 3px 0 0 3px;
                    }


                    /* On hover, add a black background color with a little bit see-through */


                    /* Caption text */
                    .text {
                      color: #f2f2f2;
                      font-size: 15px;
                      padding: 8px 12px;
                      position: absolute;
                      bottom: 8px;
                      width: 100%;
                      text-align: center;
                    }

                    /* Number text (1/3 etc) */










                    </style>
