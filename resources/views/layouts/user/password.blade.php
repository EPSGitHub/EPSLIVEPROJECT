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
                    <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('user.index') }}">User list</a> / Manage Password</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

        <div class="row">

                <div class="col-md-10">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h4 class="card-title">Update Password of {{ $user->name }} </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('userpasswordmanage.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')



                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Password</label>
                                    <div class="col-lg-9">
                                        <input type="password" placeholder="Enter New Password" name="password" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Confirm Password</label>
                                    <div class="col-lg-9">
                                        <input type="password" placeholder="Confirm Password" name="conf_password" class="form-control">
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


