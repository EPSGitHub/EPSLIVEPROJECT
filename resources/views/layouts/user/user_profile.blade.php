@extends('layouts.app')

@section('main-content')

 <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
       <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('user.index') }}">User list</a> / User profile</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

            <!-- Page Header -->



            <div class="profile-header">
                <div class="row align-items-center">
                    <div class="col-auto profile-image">
                        <a href="#">
                            <img src="{{ URL::to('') }}/admin/assets/img/profiles/{{ $user_data ->image }}" style="width: 120px;height:120px;border-radius:50%"/>
                        </a>
                    </div>
                    <div class="col ml-md-n2 profile-user-info">
                        <h4 class="user-name mb-0">{{ $user_data->name }}</h4>
                        <h6 class="text-muted">{{ $user_data->Userdes->name }}</h6>
                        <div class="user-Location"><i class="fa-solid fa-chalkboard-user"></i> {{ $user_data->Userdep->name }}</div>

                    </div>

                </div>
            </div>

            @include('validate')

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-between">
                        <span>Personal Details</span>
                        <p style="text-transform:capitalize"><i class="fa fa-edit mr-1"></i>{{ $user_data->user_role }}</p>
                    </h5>
                    <div class="row">
                        <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
                        <p class="col-sm-10">{{ $user_data->name }}</p>
                    </div>
                    <div class="row">
                        <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">User ID</p>
                        <p class="col-sm-10">{{ $user_data->user_id }}</p>
                    </div>
                    <div class="row">
                        <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email</p>
                        <p class="col-sm-10">{{ $user_data->email }}</p>
                    </div>
                    <div class="row">
                        <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Contact Number</p>
                        <p class="col-sm-10">{{ $user_data->phone }}</p>
                    </div>
                    <div class="row">
                        <p class="col-sm-2 text-muted text-sm-right mb-0">Address</p>
                        <p class="col-sm-10 mb-0">{{ $user_data->address }}

                    </div>
                </div>
            </div>
            <!-- /Page Header -->



        </div>
    </div>







@endsection


