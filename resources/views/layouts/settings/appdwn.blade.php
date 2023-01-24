@extends('layouts.app')

@section('main-content')



<div class="page-wrapper">



  @php
    $popupdwn = App\Models\settings::find(1);
@endphp
@include('validate')
    <div class="content col-md-10">
        <!-- Page Header -->
  <div class="page-header">
    <div class="row">
        <div class="col-sm-12">

            <ul class="breadcrumb">
                <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / App Download Popup Update </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Page Header -->
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Update App Download PopUp Info</h4>
    </div>
    <div class="card-body">
        <form action="{{route('settings.appdwnupdate')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')


            <div class="form-group row">
                <label class="col-form-label col-md-2">PopUP Text</label>
                <div class="col-md-9">
                    <textarea rows="5" cols="5" name="poptexten"  class="form-control"  placeholder="Enter text here">{{ $popupdwn->apptxt_en}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-md-2">PopUP Text (বাংলা)</label>
                <div class="col-md-9">
                    <textarea rows="5" cols="5" name="poptextbn"  class="form-control"  placeholder="Enter text here">{{ $popupdwn->apptxt_bn}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-md-2">iOS Link</label>
                <div class="col-md-9">
                    <input type="text" name="ioslink" value="{{ $popupdwn->ioslink }}"class="form-control form-control-lg" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-md-2">Apk Link</label>
                <div class="col-md-9">
                    <input type="text" name="apklink" value="{{ $popupdwn->apklink }}"class="form-control form-control-lg" placeholder="">
                </div>
            </div>


            <div class="form-group row">
                <label class="col-form-label col-md-2"> Slider image </label>
                <div class="col-md-9">
                    <label for="bnfimg" id="bnfirst"><img src="{{ URL::to('')}}/media/settings/app/{{ $popupdwn->appimg }}" style="max-width:250px;cursor: pointer"/></label>
                    <input class="form-control" type="hidden" name="old_bnimage" value="{{ $popupdwn->appimg }}"  id="" style="display: none">
                    <input class="form-control" type="file" name="new_bnimage" id="bnfimg" style="display: none">
                    <img src="" alt="" id="bnfeather_img" style="max-width:30%;display:block">
                    <label for="bnfimg" style="display: ;margin-bottom: 15px" id="second"><span class="btn btn-sm btn-primary mt-2 "> Change Image</span></label>
                </div>
            </div>

            <div class="form-group mb-0 row">
                <div class="col-md-9"></div>
                <div class="col-md-2">
                    <label class="col-form-label col-md-2"></label>
                    <input type="submit" class="form-control form-control-sm btn btn-sm btn-info" style="color:white"placeholder=".form-control-sm" value="Update">
                </div>
                <div class="col-md-1"></div>
            </div>




        </form>
    </div>
</div>
@endsection
