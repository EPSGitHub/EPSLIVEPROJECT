@extends('layouts.app')

@section('main-content')

<div class="page-wrapper">

@include('validate')
    <div class="content col-md-10">
                <!-- Page Header -->
  <div class="page-header">
    <div class="row">
        <div class="col-sm-12">

            <ul class="breadcrumb">
                <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> /  Contact info Update </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Page Header -->

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Update Contact Details</h4>
    </div>
    <div class="card-body">
        <form action="{{route('settings.contactupdate')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label class="col-form-label col-md-2">Contact Number</label>
                <div class="col-md-9">
                    <input type="text" value="{{ $sitt->contact_en }}" name="contacten" class="form-control form-control-lg" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-2">Contact Number(বাংলা )</label>
                <div class="col-md-9">
                    <input type="text" value="{{ $sitt->contact_bn }}" name="contactbn" class="form-control form-control-lg" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-2">Email</label>
                <div class="col-md-9">
                    <input type="email" value="{{ $sitt->email }}" name="email" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group  row">
                <label class="col-form-label col-md-2">Address</label>
                <div class="col-md-9">
                    <input type="text" name="addressen" value="{{$sitt->address_en}}" class="form-control form-control" placeholder="">
                </div>
            </div>
            <div class="form-group  row">
                <label class="col-form-label col-md-2">Address (বাংলা )</label>
                <div class="col-md-9">
                    <input type="text" name="addressbn" value="{{$sitt->address_bn}}" class="form-control form-control" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-2">Maps</label>
                <div class="col-md-9">
                    <textarea rows="5" cols="5" name="map"  class="form-control"  placeholder="Enter text here">{{$sitt->Maps}}</textarea>
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
