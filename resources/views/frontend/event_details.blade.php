@extends('frontend.layout.appsin')

@section('title')
{{ $events->seo_title }}
@endsection

@section('metadescription')
{{ $events->seo_meta }}
@endsection


@section('maincontent')

<meta property="og:image" content="{{ URL::to('') }}/media/event/{{ $events->{'featured_images_'.app()->getLocale()} }}" />

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
    <h3>{{ $events->EventCat->{'title_'.app()->getLocale()}   }}</h3>
    <p><a href="{{ route('fontend.home') }}">@lang('event.eventDetails_bredcum_1')</a> / <a href="{{ route('frontend.event')}}">@lang('event.eventDetails_bredcum_2')</a> / @lang('event.eventDetails_bredcum_3')</p>
</div>
<!-- page header END -->

<div class="container ">
    <div class="row">
        <div class="col-md-12 job_details">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-7 job_details_page ">

                    <img class="event_details_info" src="img/eventblog.png" alt="">




                    <h2 style="text-align: left">{{ $events->{'title_'.app()->getLocale()}  }}</h2>




                    {!! htmlspecialchars_decode($events->{'description_'.app()->getLocale()} ) !!}

                    <img src="img/eventblog.png" alt="" width="300px" class="mb-2">
                    <img src="img/eventblog.png" alt="" width="300px" class="mb-2">
                    <img src="img/eventblog.png" alt="" width="300px">
                    <img src="img/eventblog.png" alt="" width="300px">




                                       <hr>








                </div>

                <div class="col-md-3 ">

                    <div class="job_details_side">
                        <h4>@lang('event.event_summary')</h4>

                        <div class="job_side_item">
                            <p>@lang('event.event_type')</p>
                            <span>{{ $events->EventCat->{'title_'.app()->getLocale()}  }}</span>
                            <hr>
                        </div>

                        <div class="job_side_item">
                            <p>@lang('event.event_date')</p>
                            <span>{{ $events->{'event_date_'.app()->getLocale()}  }}</span>
                            <hr>
                        </div>

                        <div class="job_side_item">
                            <p>@lang('event.event_published_date')</p>
                            @if(app()->getLocale()=='bn')

                            <span> @php
                                Carbon\Carbon::setLocale('bn');
                               echo $events->created_at->translatedFormat(' jS F Y');
                           @endphp</span>

                            @endif

                            @if(app()->getLocale()=='en')

                            <span> @php
                                Carbon\Carbon::setLocale('en');
                               echo $events->created_at->translatedFormat(' jS F Y');
                           @endphp</span>
                            @endif

                            <hr>
                        </div>



                        <div class="job_side_item">
                            <p>@lang('event.event_location')</p>
                            <span>{{ $events->{'location_'.app()->getLocale()}  }}</span>
                            <hr>
                        </div>
                        {{-- <div class="job_side_item">
                            <p>Registration Price</p>
                            <span>Free</span>
                            <hr>
                        </div>
                        <div class="job_side_item">
                            <p>Registration deadline</p>
                            <span>10 June 2022</span>

                        </div> --}}
                    </div>

                    <div class="socialsharebutton mt-3" style="box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.16);">
                        <p style="margin-top: 5%;font-size:17px;font-weight:500;font-family:'poppins',sans-serif">@lang('event.event_share')</p>
                        {!! $shareButtons1 = \Share::currentPage()
                      ->facebook()
                      ->twitter()
                      ->linkedin()
                      ->whatsapp()
                       !!}
                    </div>


                   {{--  <div class="job_details_side">
                        <h4>Subscription for Event Notification</h4>
                        <form action="" class="form-group mt-3">
                            <input type="text" class="form-control" placeholder="Email">

                        </form>


                    </div> --}}


                   {{--  <div class="job_apply_side">
                        <a href="" data-bs-toggle="modal" data-bs-target="#jobapply"
                            class="btn btn-sm btn-success  shadow-none">Event Registration</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>











<!-- Modal start-->
{{-- <div class="modal fade  " id="jobapply" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body mbody jobapp">
                <div class="container col-md-12">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-11 jobform_head">
                                    <h3>Event Registration </h3>
                                    <span>Bangladesh Finanace Institute </span>

                                </div>
                                <div class="col-md-1 jobform_head_close">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 jobform">
                            <form action="" class="form-group">
                                <label for="">Full Name</label>
                                <input type="text" class="form-control">

                                <label for="">Email</label>
                                <input type="text" class="form-control">

                                <label for="">Phone Number</label>
                                <input type="text" class="form-control">

                                <label for="">Address</label>
                                <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>


                                <label for="">Transection ID</label>
                                <input type="text" class="form-control">

                                <input type="submit" class="form-control bg-success text-white mt-2" value="Submit">

                            </form>
                        </div>


                    </div>
                </div>


            </div>
            <!-- <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div> -->
        </div>
    </div>
</div> --}}
<!-- Modal End -->




<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


