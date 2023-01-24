@extends('layouts.app')

@section('main-content')

<div class="page-wrapper">

    <div class="content container-fluid">
@include('validate')
      <!-- Page Header -->
  <div class="page-header">
    <div class="row">
        <div class="col-sm-12">

            <ul class="breadcrumb">
                <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('partnerimg.index') }}">partner Images</a> / Update</li>
            </ul>
        </div>
    </div>
</div>
<!-- /Page Header -->

        <div class="row">
            <div class="col-md-3"></div>

                <div class="col-md-6 mt-5">
                    <div class="card flex-fill">

                        <div class="card-body">

                            <form action="{{ route('partnerimg.update',$data->id) }}" method="POST" enctype="multipart/form-data"  class="form-group">
                                @csrf
                                @method('PUT')

                        <input class="form-control" type="text" name="name" placeholder="name" value="{{ $data->name }}"><br>
                        <input class="form-control" type="text" name="link" placeholder=" link" value="{{ $data->link }}"><br>
                        <input class="form-control" type="text" name="alttxt" placeholder=" Image Alt-Text" value="{{ $data->alt_text }}"><br>





                                <div class="form-group row">
                                    <label class="col-form-label col-md-2"> partner image </label>
                                    <div class="col-md-9">
                                        <label for="bnfimg" id="bnfirst"><img src="{{ URL::to('')}}/media/settings/partner/{{ $data->images }}" style="max-width:800px;cursor: pointer"/></label>
                                        <input class="form-control" type="hidden" name="old_bnimage" value="{{ $data->images }}"  id="" style="display: none">
                                        <input class="form-control" type="file" name="new_bnimage" id="bnfimg" style="display: none">
                                        <img src="" alt="" id="bnfeather_img" style="max-width:30%;display:block">
                                        <label for="bnfimg" style="display: ;margin-bottom: 15px" id="second"><span class="btn btn-sm btn-primary mt-2 "> Change Image</span></label>
                                    </div>
                                </div>


                                <input class="btn btn-sm btn-info float-right" type="submit" value="Update">
                            </form>

                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>

@endsection


