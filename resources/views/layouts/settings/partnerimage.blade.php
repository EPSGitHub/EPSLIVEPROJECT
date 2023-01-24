@extends('layouts.app')

@section('main-content')

 <div class="page-wrapper">

        <div class="content container-fluid">

  <!-- Page Header -->

  <!-- Page Header -->
  <div class="page-header">
    <div class="row">
        <div class="col-sm-12">

            <ul class="breadcrumb">
                <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / Partner Images </li>



            </ul>
        </div>
    </div>
</div>
<!-- /Page Header -->

    <div class="row mt-5">
        <div class="col-md-10 offset-md-1">
            <h3 class="text-center mb-4">Partner Images </h3>
            <a href="#add_cat" class="btn btn-info d-inline mb-5" style="float: right" data-toggle="modal">Add Partner</a>
            <table id="table" class="table table-bordered">
              <thead>
                <tr>
                  <th width="30px">#</th>
                  <th>Title</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="tablecontents">
              <!-- get all data from Table by Controller -->
                @foreach($posts as $post)
    	            <tr class="row1" data-id="{{ $post->id }}">
    	              <td class="pl-3"><i class="fa fa-sort"></i></td>
    	              <td>{{ $post->name }}</td>
                      <td>

                        <a href="{{ route('partnerimg.edit',$post->id) }}"  class="btn btn-sm btn-warning" data-toggle="tooltip modal" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{ route('partnerimg.destroy', $post->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                        <button class=" btn btn-sm btn-danger del_button" data-toggle="tooltip" title="Delete" @if(Auth::user()->user_role != 'super admin' ) disabled @endif><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </td>




                    </td>
    	            </tr>
                @endforeach
              </tbody>
            </table>
            <hr>

    	</div>
    </div>


    {{-- MOdel for Partner Create --}}

    <div class="modal fade" id="add_cat">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Add New Partner </h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('partnerimg.store') }}" method="POST" enctype="multipart/form-data"  class="form-group">
                        @csrf

                        <input class="form-control" type="text" name="name" placeholder="name"><br>
                        <input class="form-control" type="text" name="link" placeholder=" link"><br>
                        <input class="form-control" type="text" name="alttxt" placeholder=" Image Alt-Text"><br>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2"> Partner Image </label>
                            <div class="col-md-9">
                                <label for="bnfimg" id="first"><img src="{{ URL::to('admin/assets/img/camera.jpg') }}" style="width:100px;cursor: pointer"/></label>
                                <input class="form-control" type="file" name="bnfimg" id="bnfimg" style="display: none">
                                <img src="" alt="" id="bnfeather_img" style="max-width:30%;display:block">
                                <label for="bnfimg" style="display: none;margin-bottom: 15px" id="second"><span class="btn btn-primary mt-2 "> Change Image</span></label>
                            </div>
                        </div>

                        <input class="btn btn-sm btn-info float-right" type="submit" value="Submit">
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    @endsection


