@extends('frontend.layout.app')

@section('title')
payment-gateway-registration | EPS
@endsection


@section('maincontent')

<style>


.s{

    background: #dc3545;
    color: white;



    }

    .s::placeholder{
        color:white;
    }

    ::placeholder::before{
        content: 'X';
    }

   .st{
    border: 5px solid #dc3545;;
   }


</style>

<!-- // Start Code From Here -->

@if(app()->getLocale()=='en')
	<!-- page header start -->
	<div class="container-fluid pagehead" id="pagehed">
		<h3>EPS Payment Gateway</h3>
        <p><a href="{{ url('/') }}">home<a> / <a href="{{ route('frontend.service')}}"> services </a>/ <a href="{{ route('frontend.payment') }}">payment gateway</a><a  href=""> / payment gateway support</a></p>
	</div>
	<!-- page header END -->



<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 merchantform">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                            <h2>Submit Request</h2>
                    <p>Fill the form & Submit to know more about EPS Payment Gateway Service. One of Our Relationship Specialist will get back to you shortly.</p>

                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                     @endif

                    <form action="{{ route('payment.registration.store') }}" method="POST">
                        @csrf
                        <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="company_name" id="company_name" class="form-control" placeholder="Enter Your Business Name" value="{{ old('company_name') }}">
                            @if ($errors->has('company_name'))
                            {{-- <span class="text-white">{{ $errors->first('company_name') }}</span><br> --}}
                            <script>
                                var element = document.getElementById("company_name");
                                element.classList.add("s")
                            </script>
                        @endif
                        </div>

                        <div class="col-md-4">
                            <select name="avg_sales" id="sales" class="form-select">
                                <option value="">Monthly avg. sales in BDT</option>
                                <option value="< 100,000 BDT"> < 100,000 BDT</option>
                                <option value="100,001 - 500,000 BDT">100,001 - 500,000 BDT</option>
                                <option value="500,001 - 1,000,000 BDT">500,001 - 1,000,000 BDT</option>
                                <option value="10,00,000 BDT">> 10,00,000 BDT</option>
                            </select>
                            @if ($errors->has('avg_sales'))
                            {{-- <span class="text-white">{{ $errors->first('avg_sales') }}</span> --}}
                            <script>
                                var element = document.getElementById("sales");
                                element.classList.add("st")
                            </script>

                        @endif
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="contact_person" id="contact_person" value="{{ old('contact_person') }}"  class="form-control" placeholder="Contact Person Name">
                            @if ($errors->has('contact_person'))
                            {{-- <span class="text-white">{{ $errors->first('contact_person') }}</span><br> --}}
                            <script>
                                var element = document.getElementById("contact_person");
                                element.classList.add("s")
                            </script>
                        @endif
                        </div>

                        <div class="col-md-4">
                            <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}"  placeholder="Email Address">
                            @if ($errors->has('email'))
                            {{-- <span class="text-white">{{ $errors->first('email') }}</span><br> --}}
                            <script>
                                var element = document.getElementById("email");
                                element.classList.add("s")
                            </script>
                        @endif
                        </div>


                        <div class="col-md-4">
                            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" placeholder="Phone Number">
                            @if ($errors->has('phone'))
                            {{-- <span class="text-white">{{ $errors->first('phone') }}</span><br> --}}
                            <script>
                                var element = document.getElementById("phone");
                                element.classList.add("s")
                            </script>
                        @endif
                        </div>

                        <div class="col-md-4">
                            <input type="text" name="website" class="form-control" value="{{ old('website') }}" placeholder="Company Website">
                            @if ($errors->has('website'))
                            <span class="text-white">{{ $errors->first('website') }}</span><br>
                        @endif
                        </div>
                        </div>


                        <div class="col-md-12">
                        <textarea name="company_details" id="details" cols="30" rows="5" class="form-control"  placeholder="Tell Us  About Your Query">{{ old('company_details') }}</textarea>
                        @if ($errors->has('company_details'))
                        {{-- <span class="text-white">{{ $errors->first('company_details') }}</span> --}}
                        <script>
                            var element = document.getElementById("details");
                            element.classList.add("s")
                        </script>
                         @endif

                        </div>





                        <div class="col-md-12">
                        <input type="submit" value="submit" class="btn pgsubmit btn-danger shadow-none ">
                        </div>

                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>

        </div>
        <div class="col-md-1"></div>
    </div>
</div>



<div class="container servicequery" style="margin-top:0%">
    <div class="row">
      <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h3>Still Have a question?</h3>
            <p>If you cannot find answer to your question in our <a href="{{ route('frontend.faq') }}">FAQ</a>, you can always  <a
                    href="{{ route('frontend.contact') }}">Contact Us</a> . We will answer to you shortly!</p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    <div class="col-md-2"></div>

    </div>
</div>

@endif




{{-- ================================================ Bangla Version ================================================== --}}





@if(app()->getLocale()=='bn')
	<!-- page header start -->
	<div class="container-fluid pagehead" id="pagehed">
		<h3>??????????????? ????????????????????? ??????????????????</h3>
        <p><a href="{{route('fontend.home') }}">????????? <a> / <a href="{{ route('frontend.service')}}"> ???????????????????????????  </a>/ <a href="{{ route('frontend.payment') }}">????????????????????? ?????????????????? </a><a  href=""> / ????????????????????? ?????????????????? ?????????????????????</a></p>
	</div>
	<!-- page header END -->



<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 merchantform">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                            <h2>?????????????????????????????? ?????????????????? ????????????</h2>
                    <p>??????????????? ????????????????????? ????????????????????? ????????????????????? ???????????????????????? ????????? ??????????????? ?????????????????? ???????????? ????????? ?????????????????? ??????????????? ?????????????????? ??????????????????????????? ????????????????????????????????? ?????????????????? ??????????????? ???????????? ????????????????????? ???????????????</p>

                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                     @endif

                    <form action="{{ route('payment.registration.store') }}" method="POST">
                        @csrf
                        <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="company_name" id="company_name" class="form-control" placeholder="??????????????? ????????????????????? ????????? ???????????????" value="{{ old('company_name') }}">
                            @if ($errors->has('company_name'))
                            {{-- <span class="text-white">{{ $errors->first('company_name') }}</span><br> --}}
                            <script>
                                var element = document.getElementById("company_name");
                                element.classList.add("s")
                            </script>
                        @endif
                        </div>

                        <div class="col-md-4">
                            <select name="avg_sales" id="sales" class="form-select">
                                <option value="">??????????????? ?????? ?????????????????? (???????????????)</option>
                                <option value="< 100,000 BDT"> < ?????????,????????? ???????????? </option>
                                <option value="100,001 - 500,000 BDT">?????????,?????????  - ?????????,????????? ???????????? </option>
                                <option value="500,001 - 1,000,000 BDT">?????????,????????? - ??????,??????,????????? ???????????? </option>
                                <option value="10,00,000 BDT">> ??????,??????,????????? ????????????</option>
                            </select>
                            @if ($errors->has('avg_sales'))
                            {{-- <span class="text-white">{{ $errors->first('avg_sales') }}</span> --}}
                            <script>
                                var element = document.getElementById("sales");
                                element.classList.add("st")
                            </script>

                        @endif
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="contact_person" id="contact_person" value="{{ old('contact_person') }}"  class="form-control" placeholder="??????????????????????????? ???????????? ???????????????????????? ?????????">
                            @if ($errors->has('contact_person'))
                            {{-- <span class="text-white">{{ $errors->first('contact_person') }}</span><br> --}}
                            <script>
                                var element = document.getElementById("contact_person");
                                element.classList.add("s")
                            </script>
                        @endif
                        </div>

                        <div class="col-md-4">
                            <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}"  placeholder="??????????????? ???????????????????????????">
                            @if ($errors->has('email'))
                            {{-- <span class="text-white">{{ $errors->first('email') }}</span><br> --}}
                            <script>
                                var element = document.getElementById("email");
                                element.classList.add("s")
                            </script>
                        @endif
                        </div>


                        <div class="col-md-4">
                            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" placeholder="????????? ???????????????">
                            @if ($errors->has('phone'))
                            {{-- <span class="text-white">{{ $errors->first('phone') }}</span><br> --}}
                            <script>
                                var element = document.getElementById("phone");
                                element.classList.add("s")
                            </script>
                        @endif
                        </div>

                        <div class="col-md-4">
                            <input type="text" name="website" class="form-control" value="{{ old('website') }}" placeholder="???????????????????????? ????????????????????????">
                            @if ($errors->has('website'))
                            <span class="text-white">{{ $errors->first('website') }}</span><br>
                        @endif
                        </div>
                        </div>


                        <div class="col-md-12">
                        <textarea name="company_details" id="details" cols="30" rows="5" class="form-control"  placeholder="??????????????? ???????????????????????? ?????????????????? ???????????????">{{ old('company_details') }}</textarea>
                        @if ($errors->has('company_details'))
                        {{-- <span class="text-white">{{ $errors->first('company_details') }}</span> --}}
                        <script>
                            var element = document.getElementById("details");
                            element.classList.add("s")
                        </script>
                         @endif

                        </div>





                        <div class="col-md-12">
                        <input type="submit" value="??????????????????" class="btn pgsubmit btn-danger shadow-none ">
                        </div>

                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>

        </div>
        <div class="col-md-1"></div>
    </div>
</div>



<div class="container servicequery" style="margin-top:0%">
    <div class="row">
      <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h3>@lang('service.still_title')</h3>
                    <p>???????????? ????????? ??????????????????  <a href="{{ route('frontend.faq') }}">?????????????????? ???????????????????????? </a>, ???????????? ??????????????? ??????????????? ??????????????? ?????? ????????? ??????????????? ?????????????????? ????????????   <a
                        href="{{ route('frontend.contact') }}">?????????????????????</a> ??????????????? ???????????? ?????? ??????????????? ??????????????? ????????????????????? ????????????! </p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    <div class="col-md-2"></div>

    </div>
</div>

@endif












<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


