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
				<h1>Search  </h1>
				<h5>Result <span>page</span> </h5>
			</div>

		</div>
	</div>
</section>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            @if($result->isEmpty())

            <div class="srcresult mb-3">
                <h5 style="text-align: center">Search query not found</h5>


            </div>
            @endif

            @foreach ($result as $item)

            <div class="srcresult mb-3">
                <h5>{{ $item->title_en }}</h5>
                <p>{{ $item->des_en }} <a href="{{ $item->link_en }}">... Read More</a> </p>

            </div>

            @endforeach




        </div>
        <div class="col-md-2"></div>
    </div>
</div>



<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


