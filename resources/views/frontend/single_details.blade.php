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
				<h1>Details View of </h1>
				<h5>Team<span> Member</span> </h5>
			</div>

		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 sin_img">
			 <img  class="single_img" src="{{ URL::to('') }}/frontend/img/profile.png" alt="">
			<div class="sing_text">
				<h4>MD. XYZ Hashan</h4>
				<span>Executive</span>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 sin_des">
			<p class="full_des">Here is sort description of about employer. Here is sort description of about employer. Here is sort description of about employer. Here is sort description of about employer. Here is sort description of about employer. Here is sort descript Here Here descript Here is sort description of about</p>
			<p class="full_des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quisquam, excepturi similique id quis debitis sequi ducimus provident est quaerat voluptatem magnam vel eos culpa odit iure, consectetur numquam nemo.</p>

		</div>
		</div>


		<div class="col-md-3"></div>
	</div>
</div>


<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


