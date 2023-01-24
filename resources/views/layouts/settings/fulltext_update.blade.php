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
                <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('fulltext.index') }}">FullText Search Items</a> / Update</li>
            </ul>
        </div>
    </div>
</div>
<!-- /Page Header -->

        <div class="row">

                <div class="col-md-10">
                    <div class="card flex-fill">

                        <div class="card-body">

                            <form action="{{ route('fulltext.update',$data->id) }}" method="POST"  class="form-group">
                                @csrf
                                @method('PUT')
                                <label for="" style="font-weight: 600">English Section</label>
                                <input class="form-control" type="text" name="entitle" value="{{ $data->title_en }}"  placeholder=" English Title (Eng)"><br>
                                <textarea rows="5" cols="5" name="endes" maxlength="250"  class="form-control"  placeholder="English Description">{{ $data->des_en }}</textarea><br>
                                <input class="form-control" type="text" value="{{ $data->link_en }}" name="enlink" placeholder="link for English option"><br>


                                <label for="" style="font-weight: 600">বাংলা অংশ </label>
                                <input class="form-control" type="text" value="{{ $data->title_bn }}" name="bntitle" placeholder=" টাইটেল "><br>
                                <textarea rows="5" cols="5" name="bndes" maxlength="250"  class="form-control"  placeholder="সংক্ষিপ্ত  বিবরণ ">{{ $data->des_bn }}</textarea><br>
                                <input class="form-control" type="text" name="bnlink" value="{{ $data->link_bn }}" placeholder=" লিংক "><br>




                                <input class="btn btn-sm btn-info float-right" type="submit" value="Update">
                            </form>

                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>

@endsection


