@extends('layouts.app')

@section('main-content')

<div class="page-wrapper">
 @php
    $scl = json_decode($sitt ->social);
@endphp
@include('validate')
    <div class="content col-md-10">

                <!-- Page Header -->
  <div class="page-header">
    <div class="row">
        <div class="col-sm-12">

            <ul class="breadcrumb">
                <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / Social Platform Links </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Page Header -->

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Update Social Links</h4>
    </div>
    <div class="card-body">
        <form action="{{route('settings.socialupdate')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label class="col-form-label col-md-2">Facebook</label>
                <div class="col-md-9">
                    <input type="text" value="{{ $scl->facebook }}" name="fb" class="form-control form-control-lg" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-2">LinkedIn</label>
                <div class="col-md-9">
                    <input type="text" value="{{ $scl->linkedin }}" name="ln" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group  row">
                <label class="col-form-label col-md-2">Twitter</label>
                <div class="col-md-9">
                    <input type="text" name="tw" value="{{$scl -> twitter}}" class="form-control form-control" placeholder="">
                </div>
            </div>
            <div class="form-group  row">
                <label class="col-form-label col-md-2">Youtube</label>
                <div class="col-md-9">
                    <input type="text" name="yu" value="{{ $scl->youtube }}" class="form-control form-control" placeholder="">
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
