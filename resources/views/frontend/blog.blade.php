@extends('frontend.layout.app')

@section('title')
Blog | EPS
@endsection



@section('maincontent')

<!-- // Start Code From Here -->

	<!-- page heading  start-->


	<div class="container ">
        <div class="row">
            <div class="col-md-12  front_banner bnpagehead ">
                <h1>@lang('blog.heading1')</h1>
                <h5>@lang('blog.heading2f') <span>@lang('blog.heading2l')</span> </h5>
                <p><a href="{{ route('fontend.home') }}">@lang('blog.breadcumFirstlink')</a> / @lang('blog.breadcumSecondlink')</span>
            </div>
        </div>
    </div>



	<!-- page heading  END-->

<div class=" container  blogsec">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7 blogcontentdiv">

            @foreach ($ptype1 as $c )
            <div class="col-md-12 blogcard">

              <div class="row mb-3">
                <div class="col-md-5">
                    <img src="{{ URL::to('') }}/media/post/{{ $c->{'images_'.app()->getLocale()} }}" alt="{{ $c->alt_en }}">
                </div>
                <div class="col-md-7 blogcard_details">
                    <h5>{{  $c->postCat->{'name_'.app()->getLocale()} }}</h5>
                    <h2>{{ $c->{'title_'.app()->getLocale()} }}</h2>
                    <p>{{ $c->{'shortdes_'.app()->getLocale()} }} ...</p>
                    <a href="{{ route('frontend.postdetails',$c->slug) }}"> @lang('blog.readbtn')</a>
                </div>
              </div>

            </div>

            @endforeach

            <div class="" style="display:flex;justify-content:center;">
                {{ $ptype1->links() }}
            </div>

        </div>



{{--           <div class="col-md-12 blogcard2">
            <div class="row">

                @foreach ($ptype2 as $c )
                <div class="col-md-6 ">
                    <img src="{{ URL::to('') }}/media/post/{{ $c->{'images_'.app()->getLocale()} }}">
                  <div class="bloginsec">
                    <h2>{{ $c->title_en }} </h2>
                    <h5>{{  $c->postCat->name_en }} <a href="{{ route('frontend.postdetails',$c->slug) }}"> Read More</a> </h5>

                  </div>
                </div>
                @endforeach



            </div>
          </div>



            <div class="col-md-12 blogcard">
                @foreach ($ptype3 as $c )
                <div class="row">
                  <div class="col-md-5">
                      <img src="{{ URL::to('') }}/media/post/{{ $c->{'images_'.app()->getLocale()} }}">
                  </div>
                  <div class="col-md-7 blogcard_details">
                      <h5>Financial Technology </h5>
                      <h2>{{ $c->title_en }}</h2>
                      <p>{{ $c->shortdes_en }} ...</p>
                      <a href="{{ route('frontend.postdetails',$c->slug) }}"> Read More</a>
                  </div>
                </div>
                @endforeach
            </div> --}}



          {{--   <div class="col-md-12 blogcard">
                @foreach ($ptype4 as $c )
                <div class="row">
                  <div class="col-md-5">
                      <img src="{{ URL::to('') }}/media/post/{{ $c->{'images_'.app()->getLocale()} }}">
                  </div>
                  <div class="col-md-7 blogcard_details">
                      <h5>Financial Technology </h5>
                      <h2>{{ $c->title_en }}</h2>
                      <p>{{ $c->shortdes_en }} ...</p>
                      <a href="{{ route('frontend.postdetails',$c->slug) }}"> Read More</a>
                  </div>
                </div>
                @endforeach
            </div> --}}






         {{--  <div class="col-md-12 blogcard2">
            <div class="row">

                @foreach ($ptype5 as $c )
                <div class="col-md-6 ">
                    <img src="{{ URL::to('') }}/media/post/{{ $c->{'images_'.app()->getLocale()} }}">
                  <div class="bloginsec">
                    <h2>{{ $c->title_en }} </h2>
                    <h5>{{  $c->postCat->name_en }} <a href="{{ route('frontend.postdetails',$c->slug) }}"> Read More</a> </h5>

                  </div>
                </div>
                @endforeach

            </div>
          </div> --}}




        {{-- </div> --}}





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

          <div class="col-md-3">
          <div class="rpost">
            <p>@lang('blog.sidebar_heading')</p>
            <ul>
                @foreach ($rposts as $r )
                <li>
                    <a href="{{ route('frontend.postdetails',$r->slug) }}"> {{ $r->{'title_'.app()->getLocale()} }} </a>
                </li>
                @endforeach

            </ul>
          </div>


          <div class="rpost">
            <p>@lang('blog.categories')</p>
            <ul>

                <li>
                    <a href="{{ route('frontend.blog') }}"> @lang('blog.all') </a>
                </li>

                @foreach ($blogcat as $bcat )
                <li>
                    <a href="{{ route('frontend.blog.cat',$bcat->slug) }}"> {{ $bcat->{'name_'.app()->getLocale()} }} </a>
                </li>
                @endforeach

            </ul>
          </div>

          @php
          $post = App\Models\settings::find(1);
          @endphp

          <div class="offeradd">
            <img src="{{ URL::to('') }}/media/settings/blogsidebar/{{  $post->{'blogsidebarimg_'.app()->getLocale()} }}" alt="">

          </div>




        </div>
        <div class="col-md-1"></div>
    </div>
</div>


<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


