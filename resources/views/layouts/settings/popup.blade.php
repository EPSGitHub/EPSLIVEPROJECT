@extends('layouts.app')

@section('main-content')

 <div class="page-wrapper">

        <div class="content container-fluid">

  <!-- Page Header -->
  <div class="page-header">
    <div class="row">
        <div class="col-sm-12">

            <ul class="breadcrumb">
                <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / Popup post </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Page Header -->

            <div class="row">

               <br><br>

                <div class="card col-md-12">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title d-inline">Web PopUp</h4>
                        <a href="#add_cat" class="btn btn-info d-inline" style="float: right" data-toggle="modal">Add PopUp</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>popuptext</th>
                                        {{-- <th>Status</th> --}}
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_data as $data)


                                    <tr>
                                        <td>{{ $loop -> index+1 }}</td>
                                        <td><img src="{{ URL::to('') }}/media/settings/popup/{{ $data->image}}" alt="missing image" width="50px"></td>
                                        <td>{{ $data->popuptext_en}}</td>

                                           {{--  <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" popup_status_id={{ $data->id }} {{ $data-> status == true ? 'checked="checked"':'' }} id="cat_status_{{$loop->index+1 }}" class="check">
                                                    <label for="cat_status_{{ $loop->index+1 }}" class="checktoggle">checkbox</label>
                                                </div>
                                            </td> --}}

                                        <td>

                                            <a href="{{ route('webpopup.edit',$data->id) }}"  class="btn btn-sm btn-warning" data-toggle="tooltip modal" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <form action="{{ route('webpopup.destroy', $data->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                            <button class=" btn btn-sm btn-danger del_button" data-toggle="tooltip" title="Delete" @if(Auth::user()->user_role != 'super admin' ) disabled @endif><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    // MOdel for Post Create

    <div class="modal fade" id="add_cat">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Add PopUp post</h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('webpopup.store') }}" method="POST" enctype="multipart/form-data"  class="form-group">
                        @csrf
                        <textarea rows="5" cols="5" name="texten"  class="form-control"  placeholder="English Text"></textarea><br>
                        <textarea rows="5" cols="5" name="textbn"  class="form-control"  placeholder="Bangla Text"></textarea><br>
                        <input class="form-control" type="text" name="enbtntxt" placeholder=" Button Text (Eng)"><br>
                        <input class="form-control" type="text" name="bnbtntxt" placeholder=" Button Text (bangla)"><br>
                        <input class="form-control" type="text" name="link" placeholder=" link"><br>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2"> popup Image </label>
                            <div class="col-md-9">
                                <label for="bnfimg" id="first"><img src="{{ URL::to('admin/assets/img/camera.jpg') }}" style="width:100px;cursor: pointer"/></label>
                                <input class="form-control" type="file" name="bnfimg" id="bnfimg" style="display: none">
                                <img src="" alt="" id="bnfeather_img" style="max-width:30%;display:block">
                                <label for="bnfimg" style="display: none;margin-bottom: 15px" id="second"><span class="btn btn-primary mt-2 "> Change Image</span></label>
                            </div>
                        </div>

                        <input class="btn btn-sm btn-info float-right" type="submit">
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>




@endsection


