@extends('frontend.layout.appsin')

@section('title')
{{ $posts->seo_title }}
@endsection

@section('metadescription')
{{ $posts->seo_meta }}
@endsection

@section('metaimgproperty')
{{ URL::to('') }}/media/post/{{ $posts->{'images_'.app()->getLocale()} }}
@endsection



@section('maincontent')


<style>



    #social-links{
        margin-left: -12%;

    }
     #social-links ul{
          padding-left: 0;
          margin: 10px;
     }
     #social-links ul li {
          display: inline-block;
     }
     #social-links ul li a {
          padding: 6px;
          /* border: 1px solid #ccc; */
          border-radius: 5px;
          margin: 1px;
          font-size: 21px;
     }

     #social-links ul li a:hover{
        background: transparent;
        color:#0e76a8;
     }

     #social-links .fa-facebook{
        color: #666666;
     }
     #social-links .fa-twitter{
        color: #666666;
     }
     #social-links .fa-linkedin{
        color: #666666;
     }
     #social-links .fa-whatsapp{
        color: #666666;
     }





    #social-links .fa-facebook:hover{
           color: blue;
     }

     #social-links .fa-twitter:hover{
           color: deepskyblue;
     }
     #social-links .fa-linkedin:hover{
           color: #0e76a8;
     }
     #social-links .fa-whatsapp:hover{
          color: #25D366
     }





     .socialsharebutton{
        background:white;


    border-radius: 8px;
    padding: 5px 15px 7px;
    margin-bottom: 20px;
    text-align: center;
     }
     </style>


<!-- // Start Code From Here -->

	<!-- page heading  start-->


<!-- page header start -->
<div class="container-fluid pagehead" id="pagehed">
    <h3>@lang('blog.blog_details_heading')</h3>
    <p><a href="{{ route('fontend.home') }}">@lang('blog.breadcumFirstlink')</a> / <a href="{{ route('frontend.blog') }}">@lang('blog.breadcumSecondlink')</a> / @lang('blog.blog_details_bredcum')</span>
</div>



<!-- page header END -->

	<!-- page heading  END-->

<div class=" container col-md-12 blogsec">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">

         <div class="row blogsingle">

            <h1>{{ $posts->{'title_'.app()->getLocale()} }}</h1>
            <h6> — {{  $posts->postCat->{'name_'.app()->getLocale()} }}</h6>
            <div class="blogtext">
                {!! htmlspecialchars_decode($posts->{'description_'.app()->getLocale()}) !!}
            </div>
         </div>




         {{-- <div class="rpost_title">
            <h4>Related Post</h4>
        </div>


         <div class="row blogpostrlt">
            <div class=" col-md-5  blogpostrlt ">
                <img src="{{ URL::to('') }}/frontend/img/blog/Fintech.jpg">
              <div class="bloginsec">
                <h2>Lorem ipsum dolor sit amet, consectetur...</h2>
                <h5>9 MINS READ   <a href=""> Read More</a> </h5>

              </div>
            </div>

            <div class=" col-md-5 blogpostrlt ">
                <img src="{{ URL::to('') }}/frontend/img/blog/Fintech.jpg">
                <div class="bloginsec">
                <h2>Lorem ipsum dolor sit amet, consectetur...</h2>
                <h5>9 MINS READ   <a href=""> Read More</a> </h5>
                </div>
            </div>

        </div> --}}



        </div>

        <div class="col-md-3">



            {{--   <div class="blogcat">
                <p>Category</p>
                <ul>
                    <li>
                        <a href=""> <i class="fa-solid fa-circle-chevron-right"></i> Economy</a>
                    </li>
                    <li>
                        <a href=""><i class="fa-solid fa-circle-chevron-right"></i> Finance</a>
                    </li>
                    <li>
                        <a href=""><i class="fa-solid fa-circle-chevron-right"></i> Business</a>
                    </li>
                    <li>
                        <a href=""><i class="fa-solid fa-circle-chevron-right"></i> Development</a>
                    </li>
                </ul>
              </div> --}}

             {{--  <div class="blogsearch">
                <form action="" class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                </form>

              </div> --}}

@php
  $r = $posts->category;
 $rpost = App\Models\post::where('category','=',$r) ->where('status', '=', 1) ->skip(0)->take(5)->get();
@endphp

              <div class="rpost">
                <p>@lang('blog.related_post')</p>
                <ul>
                    @foreach ($rpost as $re )
                    <li>
                        <a href="{{ route('frontend.postdetails',$re->slug) }}"> {{ $re->{'title_'.app()->getLocale()} }} </a>
                    </li>

                    @endforeach


                </ul>
              </div>





              <div class="offeradd">
                <img src="{{ URL::to('') }}/frontend/img/blog/offerads/appdwn.svg" alt="">

              </div>


              <div class="socialsharebutton mt-3">
                <p style="margin-top: 5%;font-size:17px;font-weight:500;font-family:'poppins',sans-serif">@lang('blog.share')</p>
                {!! $shareButtons1 = \Share::currentPage()
              ->facebook()
              ->twitter()
              ->linkedin()
              ->whatsapp()
               !!}
            </div>




            </div>
    </div>
</div>


<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


