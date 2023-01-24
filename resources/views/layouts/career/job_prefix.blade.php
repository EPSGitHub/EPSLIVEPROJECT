@extends('layouts.app')

@section('main-content')

 <div class="page-wrapper">

        <div class="content container-fluid">

   <!-- Page Header -->
   <div class="page-header">
    <div class="row">
        <div class="col-sm-12">

            <ul class="breadcrumb">
                <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('careers.index') }}">Career post</a> / JobPrefix</li>
            </ul>
        </div>
    </div>
</div>
<!-- /Page Header -->


            <div class="row">


               <div class="card col-md-12">
                @include('validate')
                <div class="card-header">
                    <h4 class="card-title d-inline">Job Prefix   </h4>
                    <a href="#add_cat" style="float:right" class="btn btn-info d-inline" data-toggle="modal">Add prefix</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Department Name</th>
                                    <th>Job Prefix</th>
                                    <th>Time</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_data as $data)


                                <tr>
                                    <td>{{ $loop -> index+1 }}</td>
                                    <td>{{ $data->department}}</td>
                                    <td>{{ $data->prefix_id}}</td>
                                    <td>{{ $data->created_at ->diffForHumans() }}</td>

                                    <td>
                                        {{-- <a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i> --}}
                                        {{-- </a> --}}
                                        <a href="#" edit_id="{{ $data->id }}" data-toggle="modal" class="btn btn-sm btn-warning job_prefix_update" data-toggle="tooltip modal" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <form action="{{ route('jobprefix.destroy', $data->id) }}" method="POST" class="d-inline">
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


    <div class="modal fade" id="add_cat">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Add JOB  Prefix</h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('jobprefix.store') }}" method="POST"  class="form-group">
                        @csrf
                        <select  class="form-control post_tag_select mb-3"  name="department"  >
                            <option value="">Select Department</option>
                            @foreach ($job_department as $j )
                            <option  value="{{ $j->name }}">{{ $j->name }}</option>
                            @endforeach
                        </select>
                        <input class="form-control" type="text" name="prefix" placeholder="Prefix ID">
                        <span class="form-text text-muted" style="color:red!important;font-weight:600">EPS-Department Name<br>
                            Example: EPS-DM<br>
                            DM Meaning: Digital Marketing</span>

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
                    <h4>Update JOB Prefix</h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('jobprefix.update',1) }}" method="POST"  class="form-group">
                        @csrf
                        @method('PUT')

                        <select  class="form-control post_tag_select mb-3"  name="department"  >
                            <option value="">Select Department</option>
                            @foreach ($job_department as $j )
                            <option  value="{{ $j->name }}">{{ $j->name }}</option>
                            @endforeach
                        </select>

                        <input class="form-control" type="text" name="prefix_id" placeholder="JOB Prefix ID"><br>

                        <input class="form-control" type="hidden" name="id" placeholder="Category id">
                        <input class="btn btn-sm btn-info float-right" type="submit" value="Update">
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

@endsection


