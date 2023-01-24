@extends('layouts.app')

@section('main-content')

 <div class="page-wrapper">

        <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('pressManage.index') }}">Press Post list</a> / Category</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->


            <div class="row">


                <div class="card col-md-12">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title d-inline">Category</h4>
                        <a href="#add_cat" class="btn btn-info d-inline" style="float:right" data-toggle="modal">Add Category</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>English Name</th>
                                        <th>Bangla Name</th>
                                        <th>Time</th>
                                        {{-- <th>Status</th> --}}
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_data as $data)


                                    <tr>
                                        <td>{{ $loop -> index+1 }}</td>
                                        <td>{{ $data->name_en}}</td>
                                        <td>{{ $data->name_bn}}</td>
                                        <td>{{ $data->created_at ->diffForHumans() }}</td>

                                            {{-- <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" status_id={{ $data->id }} {{ $data-> status == true ? 'checked="checked"':'' }} id="cat_status_{{$loop->index+1 }}" class="check">
                                                    <label for="cat_status_{{ $loop->index+1 }}" class="checktoggle">checkbox</label>
                                                </div>
                                            </td> --}}

                                        <td>
                                            {{-- <a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i> --}}
                                            {{-- </a> --}}
                                            <a href="#" edit_id="{{ $data->id }}" data-toggle="modal" class="btn btn-sm btn-warning update_cat" data-toggle="tooltip modal" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <form action="{{ route('pressCategory.destroy', $data->id) }}" method="POST" class="d-inline">
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
                    <h4>Add Category</h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('pressCategory.store') }}" method="POST"  class="form-group">
                        @csrf
                        <input class="form-control" type="text" name="cat_name_en" placeholder="Category Name"><br>
                        <input class="form-control" type="text" name="cat_name_bn" placeholder=" Bangla Category Name"><br>
                        <input class="btn btn-sm btn-info float-right" type="submit">
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="edit_cat_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Update Category</h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('pressCategory.update',1) }}" method="POST"  class="form-group">
                        @csrf
                        @method('PUT')

                        <input class="form-control" type="text" name="cat_name_en" placeholder="Category Name"><br>
                        <input class="form-control" type="text" name="cat_name_bn" placeholder="Bangla Category Name"><br>
                        <input class="form-control" type="hidden" name="cat_id" placeholder="Category id">
                        <input class="btn btn-sm btn-info float-right" type="submit" value="Update">
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

@endsection


