@extends('frontend.layout.app')

@section('title')
Team EPS
@endsection


@section('maincontent')







	<!-- // Start Code From Here -->


	<section>
		<div class="container ">
			<div class="row">

				<div class="col-md-12  front_banner  ">
					<h1>MEET OUR EXPERTS</h1>
					<h5>Our Team<span></span> </h5>
				</div>

			</div>
		</div>
	</section>

	<section>

		<!-- MAIN (Center website) -->





		<!-- Portfolio Gallery Grid -->


		<div class=" container ">

			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div id="myBtnContainer" style="margin-bottom: -20px; color:green">
						<button class="btn active" style="background: red; color:white"
							onclick="filterSelection('all')">ALL</button>
						<button class="btn" onclick="filterSelection('management')"> Management</button>
						<button class="btn" onclick="filterSelection('team')"> Team</button>
						<hr>
					</div>
					<div class="row" id="gallery">
						<div class="col-md-4 sigdiv column management">
							<a href="#" data-bs-toggle="modal" data-bs-target="#teamview"><img
									src="{{ URL::to('') }}/frontend/img/employee.png" alt=""></a>
							<div class="dtl">
								<a href="#" data-bs-toggle="modal" data-bs-target="#teamview">
									<h6>MD. XYZ Hasan</h6>
								</a>
								<p>Executive</p>
							</div>
						</div>

						<div class="col-md-4 sigdiv column management">
							<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img
									src="{{ URL::to('') }}/frontend/img/employee.png" alt=""></a>
							<div class="dtl">
								<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<h6>MD. XYZ Hasan</h6>
								</a>
								<p>Executive</p>
							</div>
						</div>

						<div class="col-md-4 sigdiv column management">
							<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img
									src="{{ URL::to('') }}/frontend/img/employee.png" alt=""></a>
							<div class="dtl">
								<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<h6>MD. XYZ Hasan</h6>
								</a>
								<p>Executive</p>
							</div>
						</div>

						<div class="col-md-4 sigdiv column management">
							<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img
									src="{{ URL::to('') }}/frontend/img/employee.png" alt=""></a>
							<div class="dtl">
								<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<h6>MD. XYZ Hasan</h6>
								</a>
								<p>Executive</p>
							</div>
						</div>

						<div class="col-md-4 sigdiv column management">
							<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img
									src="{{ URL::to('') }}/frontend/img/employee.png" alt=""></a>
							<div class="dtl">
								<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<h6>MD. XYZ Hasan</h6>
								</a>
								<p>Executive</p>
							</div>
						</div>

						<div class="col-md-4 sigdiv column management">
							<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img
									src="{{ URL::to('') }}/frontend/img/employee.png" alt=""></a>
							<div class="dtl">
								<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<h6>MD. XYZ Hasan</h6>
								</a>
								<p>Executive</p>
							</div>
						</div>

						<div class="col-md-4 sigdiv column team">
							<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img
									src="{{ URL::to('') }}/frontend/img/employee.png" alt=""></a>
							<div class="dtl">
								<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<h6>MD. XYZ Hasan</h6>
								</a>
								<p>Executive</p>
							</div>
						</div>

						<div class="col-md-4 sigdiv column team">
							<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img
									src="{{ URL::to('') }}/frontend/img/employee.png" alt=""></a>
							<div class="dtl">
								<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<h6>MD. XYZ Hasan</h6>
								</a>
								<p>Executive</p>
							</div>
						</div>

						<div class="col-md-4 sigdiv column team">
							<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img
									src="{{ URL::to('') }}/frontend/img/employee.png" alt=""></a>
							<div class="dtl">
								<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<h6>MD. XYZ Hasan</h6>
								</a>
								<p>Executive</p>
							</div>
						</div>




						<!-- END GRID -->
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>


		</div>


		<section id="teamend">
			<p style="margin-bottom: 200px; color:white">H</p>
		</section>
		<!-- END MAIN -->
		</div>


	</section>


    <!-- Modal start-->
<div class="modal fade  " id="teamview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body mbody">
                <div class="container col-md-12">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-11"></div>
                                <div class="col-md-1">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">


                            <img class="mmg" src="{{ URL::to('') }}/frontend/img/profile.png" alt="">

                            <img class="qr" src="{{ URL::to('') }}/frontend/img/qrcode.png" alt="">

                        </div>
                        <div class="col-md-6">

                            <!-- <button type="button" class="btn-close"data-bs-dismiss="modal" aria-label="Close"></button>  -->
                            <h4>MD. XYZ Hashan</h4>
                            <span>Executive</span>
                            <p> Here is sort description of about employer. Here is sort description of about
                                employer. Here is sort description of about employer</p>

                            <a href="{{ route('frontend.singledetails') }}" class="btn btn-lg">Full details</a>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>
<!-- Modal End -->

	<!-- // Start Social Icon -->

	@include('frontend.layout.social')


	<!-- // End Social Icon -->




	<script>
		filterSelection("all")
		function filterSelection(c) {
			var x, i;
			x = document.getElementsByClassName("column");
			if (c == "all") c = "";
			for (i = 0; i < x.length; i++) {
				w3RemoveClass(x[i], "show");
				if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
			}
		}

		function w3AddClass(element, name) {
			var i, arr1, arr2;
			arr1 = element.className.split(" ");
			arr2 = name.split(" ");
			for (i = 0; i < arr2.length; i++) {
				if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
			}
		}

		function w3RemoveClass(element, name) {
			var i, arr1, arr2;
			arr1 = element.className.split(" ");
			arr2 = name.split(" ");
			for (i = 0; i < arr2.length; i++) {
				while (arr1.indexOf(arr2[i]) > -1) {
					arr1.splice(arr1.indexOf(arr2[i]), 1);
				}
			}
			element.className = arr1.join(" ");
		}


		// Add active class to the current button (highlight it)
		var btnContainer = document.getElementById("myBtnContainer");
		var btns = btnContainer.getElementsByClassName("btn");
		for (var i = 0; i < btns.length; i++) {
			btns[i].addEventListener("click", function () {
				var current = document.getElementsByClassName("active");
				current[0].className = current[0].className.replace(" active", "");
				this.className += " active";
			});
		}
	</script>



@endsection
