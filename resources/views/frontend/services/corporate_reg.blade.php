@extends('frontend.layout.app')

@section('title')
payment-gateway-registration | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->


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
                            <input type="text" name="company_name" class="form-control" placeholder="Enter Your Business Name" value="{{ old('company_name') }}">
                            @if ($errors->has('company_name'))
                            <span class="text-white">{{ $errors->first('company_name') }}</span><br>
                        @endif
                        </div>

                        <div class="col-md-4">
                            <select name="employee_number" class="form-select" id="">
                                <option value="">Monthly avg. sales in BDT</option>
                                <option value="< 100,000 BDT"> < 100,000 BDT</option>
                                <option value="100,001 - 500,000 BDT">100,001 - 500,000 BDT</option>
                                <option value="500,001 - 1,000,000 BDT">500,001 - 1,000,000 BDT</option>
                                <option value="10,00,000 BDT">> 10,00,000 BDT</option>
                            </select>
                            @if ($errors->has('employee_number'))
                            <span class="text-white">{{ $errors->first('employee_number') }}</span><br>
                        @endif
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="contact_person" value="{{ old('contact_person') }}"  class="form-control" placeholder="Contact Person Name">
                            @if ($errors->has('contact_person'))
                            <span class="text-white">{{ $errors->first('contact_person') }}</span><br>
                        @endif
                        </div>

                        <div class="col-md-4">
                            <input type="text" name="email" class="form-control" value="{{ old('email') }}"  placeholder="Email Address">
                            @if ($errors->has('email'))
                            <span class="text-white">{{ $errors->first('email') }}</span><br>
                        @endif
                        </div>


                        <div class="col-md-4">
                            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" placeholder="Phone Number">
                            @if ($errors->has('phone'))
                            <span class="text-white">{{ $errors->first('phone') }}</span><br>
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
                        <textarea name="company_details" id="" cols="30" rows="5" class="form-control"  placeholder="Tell Us  About Your Query">{{ old('company_details') }}</textarea>
                        @if ($errors->has('company_details'))
                        <span class="text-white">{{ $errors->first('company_details') }}</span>
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
                    href="{{ route('frontend.contact') }}">contact us</a> . We will answer to you shortly!</p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    <div class="col-md-2"></div>

    </div>
</div>














<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


