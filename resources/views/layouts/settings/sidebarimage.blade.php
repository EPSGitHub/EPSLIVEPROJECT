@extends('layouts.app')

@section('main-content')



<div class="page-wrapper">



  @php
    $post = App\Models\settings::find(1);
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
        <h4 class="card-title">Update Blog Page Sidebar Images</h4>
    </div>
    <div class="card-body">
        <form action="{{route('settings.blogSidebarImageaUpdate')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')





           <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-form-label col-md-12"> English Version image </label>
                        <div class="col-md-12">
                            <label for="fimg" id="first"><img src="{{ URL::to('')}}/media/settings/blogsidebar/{{  $post->blogsidebarimg_en }}" style="width:100px;cursor: pointer"/></label>
                            <input class="form-control" type="hidden" name="old_image" value="{{ $post->blogsidebarimg_en }}"  id="" style="display: none">
                            <input class="form-control" type="file" name="new_image" id="fimg" style="display: none">
                            <img src="" alt="" id="feather_img" style="max-width:30%;display:block">
                            <label for="fimg" style="display: ;margin-bottom: 15px" id="second"><span class="btn btn-sm btn-primary mt-2 "> Change Image</span></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-form-label col-md-12"> Bangla Version image </label>
                        <div class="col-md-12">
                            <label for="bnfimg" id="bnfirst"><img src="{{ URL::to('')}}/media/settings/blogsidebar/{{  $post->blogsidebarimg_bn }}" style="width:100px;cursor: pointer"/></label>
                                                <input class="form-control" type="hidden" name="old_bnimage" value="{{ $post->blogsidebarimg_bn }}"  id="" style="display: none">
                                                <input class="form-control" type="file" name="new_bnimage" id="bnfimg" style="display: none">
                                                <img src="" alt="" id="bnfeather_img" style="max-width:30%;display:block">
                                                <label for="bnfimg" style="display: ;margin-bottom: 15px" id="second"><span class="btn btn-sm btn-primary mt-2 "> Change Image</span></label>
                        </div>
                    </div>
                </div>
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
