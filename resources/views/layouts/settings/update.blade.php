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
                <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('webpopup.index') }}">PopUp post list</a> / Update</li>
            </ul>
        </div>
    </div>
</div>
<!-- /Page Header -->

        <div class="row">

                <div class="col-md-10">
                    <div class="card flex-fill">

                        <div class="card-body">

                            <form action="{{ route('webpopup.update',$data->id) }}" method="POST" enctype="multipart/form-data"  class="form-group">
                                @csrf
                                @method('PUT')
                                <label for="" style="font-weight: 600">  English Text</label>

                                <textarea rows="5" cols="5" name="texten"  class="form-control"  placeholder="English Text">{{$data->popuptext_en  }}</textarea><br>
                                <label for="" style="font-weight: 600">  Bangla Text</label>
                                <textarea rows="5" cols="5" name="textbn"  class="form-control"  placeholder="Bangla Text">{{$data->popuptext_bn  }}</textarea><br>
                                <label for="" style="font-weight: 600"> Button English Text</label>
                                <input class="form-control" type="text" name="enbtntxt" placeholder=" English Text " value="{{$data->button_text_en  }}"><br>
                                <label for="" style="font-weight: 600"> Button Bangla Text</label>
                                <input class="form-control" type="text" name="bnbtntxt" placeholder=" Bangla Text" value="{{$data->button_text_bn  }}"><br>
                                <label for="" style="font-weight: 600"> Redirect Link</label>
                                <input class="form-control" type="text" name="link" placeholder=" link" value="{{$data->link  }}"><br>



                                <div class="form-group row">
                                    <label class="col-form-label col-md-2"> POPUP image </label>
                                    <div class="col-md-9">
                                        <label for="bnfimg" id="bnfirst"><img src="{{ URL::to('')}}/media/settings/popup/{{ $data->image }}" style="max-width:800px;cursor: pointer"/></label>
                                        <input class="form-control" type="hidden" name="old_bnimage" value="{{ $data->image }}"  id="" style="display: none">
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


