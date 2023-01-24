@extends('layouts.app')

@section('main-content')

<div class="page-wrapper">

    <div class="content container-fluid">

        <!-- Page Header -->
       <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('user.index') }}">User list</a> / Create</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
@include('validate')


        <div class="row">

                <div class="col-md-10">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h4 class="card-title">Create  User</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="name" value="{{ old('name') }}"  class="form-control">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Email</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="email" value="{{ old('email') }}"   class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Phone</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="phone"  value="{{ old('phone') }}"  class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">User ID</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="user_id" placeholder="Enter User ID Provided by EPS"  value="{{ old('user_id') }}"  class="form-control">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Department</label>
                                    <div class="col-md-9">

                                        <select class="form-control post_tag_select" name="department">


                                            <option   value="">Select Department</option>


                                            @foreach ($user_department as $udpt )
                                            <option  value= "{{ $udpt->id  }}">{{ $udpt->name }}</option>
                                            @endforeach

                                        </select>


                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Designation</label>
                                    <div class="col-md-9">

                                        <select class="form-control post_tag_select" name="designation">


                                            <option   value="">Select Designation</option>

                                            @foreach ($user_designation as $udes )
                                            <option  value= "{{ $udes->id  }}">{{ $udes->name }}</option>
                                            @endforeach

                                        </select>


                                    </div>
                                </div>






                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">User Role</label>
                                    <div class="col-md-9">

                                        <select class="form-control post_tag_select" name="role">


                                            <option   value="">Select Access</option>
                                            <option  value="Admin">Admin</option>
                                            <option   value="Editor">Editor</option>
                                            <option  value="HR">HR</option>
                                            <option  value="Viewer">Viewer</option>

                                        </select>


                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Password</label>
                                    <div class="col-lg-9">
                                        <input type="password" name="password" class="form-control">


                                    </div>


                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Confirm Password</label>
                                    <div class="col-lg-9">
                                        <input type="password" name="conf_password" class="form-control">
                                    </div>
                                </div>



                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>

@endsection


