@extends('frontend.layout.appsin')

@section('title')
{{ $presspost->seo_title }}
@endsection

@section('metadescription')
{{ $presspost->seo_meta }}
@endsection


@section('maincontent')

<meta property="og:image" content="{{ URL::to('') }}/media/press/{{ $presspost-> feature_img }}" />
<style>
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

<div class="container-fluid pagehead" id="pagehed">
    <h3>@lang('press.publication')</h3>
    <p><a href="{{ route('fontend.home') }}">@lang('press.breadcumFirstlink')</a> / <a href="{{ route('frontend.press_release') }}">@lang('press.breadcumSecondlink')</a> / @lang('press.press_details_breadcum')</p>
</div>
<!-- page header END -->

<div class="container ">
    <div class="row">
        <div class="col-md-12 job_details ">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-7 job_details_page ">


                    <h1>{{ $presspost->title }}</h1>
                    {!! htmlspecialchars_decode($presspost->description) !!}


                    <hr>
                    <b>Source link:</b>
                    <a style="margin-left:5px;text-decoration:underline" href="{{ $presspost->source_link }}" target="_blank">{{ $presspost->title }} </a>




                </div>

                <div class="col-md-3 ">

                    <div class="job_details_side">
                        <h4>@lang('press.side_heading')</h4>
                        <div class="job_side_item">
                            <p>@lang('press.published_on')</p>
                            <span>{{ $presspost->published_date }}</span>
                            <hr>
                        </div>
                        <div class="job_side_item">
                            <p> @lang('press.published_by')</p>
                            <span>{{ $presspost ->published_by }}</span>
                            <hr>
                        </div>

                    </div>

                    <div class="socialsharebutton mt-3" style="box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.16);">
                        <p style="margin-top: 5%;font-size:17px;font-weight:500;font-family:'poppins',sans-serif">@lang('press.share')</p>
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
    </div>
</div>
















<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


