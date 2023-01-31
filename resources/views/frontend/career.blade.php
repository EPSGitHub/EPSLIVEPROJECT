
 @extends('frontend.layout.app')

 @if(app()->getLocale()=='en')

 @section('title')
 Career | EPS | Easy Payment System
 @endsection

 @section('metadescription')

 Build your Career with EPS

 @endsection
 @endif

 @if(app()->getLocale()=='bn')

 @section('title')
 ক্যারিয়ার | ইপিএস | ইজি পেমেন্ট সিস্টেম
 @endsection

 @section('metadescription')

 আপনার ক্যারিয়ার গড়ুন ইপিএসের সাথে

 @endsection
 @endif


 @php
     $cnt = App\Models\career::where('status','=','1')->count();
 @endphp


 @section('maincontent')


     <!-- page header start -->
     <div class="container ">
		<div class="row">
			<div class="col-md-12  front_banner bnpagehead ">
				<h1>@lang('career.heading1')</h1>
				<h5>@lang('career.heading2f') <span>@lang('career.heading2l')</span> </h5>
				<p><a href="{{ route('fontend.home') }}">@lang('career.breadcumFirstlink')</a> / @lang('career.breadcumSecondlink')</span>
			</div>
		</div>
	</div>
     <!-- page header END -->

   {{--   <div class="container careersec">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 careersearch">
				<form action="">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Search Job"
							aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn  btn-danger shadow-none " type="button"><i
									class="fa-solid fa-magnifying-glass"></i></button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-1"></div>

		</div>
	</div> --}}


    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                @if ($cnt==0)


                <div class="mt-5">
                    <div class="item jobpost" style="text-align: center">

                        <h3>@lang('career.job_heading')</h3>
                        <p class="mt-3">@lang('career.job_des')</p>

                       @lang('career.email'): <a href="mailto:career@eps.com.bd">career@eps.com.bd</a>



                    </div>

                </div>


           @endif
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

	<div class="container careercat">
		<div class="row">
			<div class="col-md-1"></div>
            @if ($cnt!=0)
			<div class="col-md-3">

				<h5>@lang('career.category')</h5>

                <div class="portfolio-menu">

                    <ul>
                        <li class="active" data-filter="*"> <i class="fa-solid fa-circle-chevron-right"></i> All</li>





                     @foreach ($career_cat as $ct )

                      <li data-filter=".{{ $ct->slug }}"><i class="fa-solid fa-circle-chevron-right"></i>{{ $ct->name }}</li>

                      @endforeach

                    </ul>


                </div>

			</div>

            @endif
			<div class="col-md-7 jobblock">
            <div class="portfolio-item">
                @foreach ($career as $c )
				<div class="item {{ $c->CareerDep->slug }} jobpost">
					<p>{{ $c->CareerDep->name }}</p>
					<h3>{{ $c ->title}}</h3>
					<h6><span>Jobs Type: {{ $c->job_type }}</span><span>Salary Range: {{ $c->salary }}</span> <span>Experiance:
                        {{ $c->experiance }}+</span></h6>
					<a href="{{ route('frontend.cdetails',$c->slug) }}" class="btn btn-success shadow-none"> View Job Details</a>
					<h6 class="jdate">Last Date: {{ $c ->apply_deadline}}</h6>


				</div>

                @endforeach

            </div>


            <div class="" style="display:flex;justify-content:center;">
                {{ $career->links() }}
            </div>















			</div>
		</div>
	</div>

















	<!-- // Start Social Icon -->


	@include('frontend.layout.social')

	<!-- // End Social Icon -->


	<!-- Footer  Start -->










@endsection
