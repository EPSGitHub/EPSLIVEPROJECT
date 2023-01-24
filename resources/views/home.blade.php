@extends('layouts.app')

@php

   $user= App\Models\user::count();
   $user_dep= App\Models\UserDepartment::count();
   $user_des= App\Models\UserDesignation::count();
   $contacts= App\Models\contact::count();

   $tpost= App\Models\post::count();
   $unpost= App\Models\career::where('status','=','0')->count();
   $total= App\Models\post::sum('views');
   $shortlist= App\Models\jobapplication::where('status','=','2')->count();

   $jobapplication= App\Models\jobapplication::count();
   $ongoing_job= App\Models\career::where('status','=','1')->count();
   $newapply= App\Models\jobapplication::where('status','=','1')->count();
   $shortlist= App\Models\jobapplication::where('status','=','2')->count();
@endphp

@php
$r = Auth::user()->id;
$users = App\Models\User::find($r);
 $ua = json_decode($users ->access);
@endphp

@section('main-content')

<style>
    a {
        color:black;
    }
    a:hover{
        color: red;
    }
</style>

<div class="page-wrapper">

    <div class="content container-fluid">

          <!-- Page Header -->
          <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Welcome {{ Auth::user()->name }}</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

@if ($ua-> user == 1 )

<h4 style="font-size:22px; font-weight:600;font-family:'poppins',sans-serif">User Summary</h4>
<div class="row">

    <div class="col-xl-4 col-sm-6 col-12">
        <a href="{{ route('user.index') }}">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon text-primary border-primary">
                        <i class="fa-solid fa-users"></i>
                    </span>
                    <div class="dash-count">
                        <h3>{{ $user }}</h3>
                    </div>
                </div>
                <div class="dash-widget-info">
                    <h6 class="text-muted">Total User</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-primary w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    </div>

    <div class="col-xl-4 col-sm-6 col-12">
        <a href="{{ route('department.index')}}">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon text-success">
                        <i class="fa-solid fa-layer-group"></i>
                    </span>
                    <div class="dash-count">
                        <h3>{{   $user_dep }}</h3>
                    </div>
                </div>
                <div class="dash-widget-info">

                    <h6 class="text-muted">User Department</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    </div>
    <div class="col-xl-4 col-sm-6 col-12">
        <a href="{{ route('designation.index')}}">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon text-danger border-danger">
                        <i class="fa-solid fa-address-book"></i>
                    </span>
                    <div class="dash-count">
                        <h3>{{   $user_des }}</h3>
                    </div>
                </div>
                <div class="dash-widget-info">

                    <h6 class="text-muted">User Designation</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-danger w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    </div>



</div>

@endif



@if ($ua-> blog == 1 )

<h4 style="font-size:22px; font-weight:600;font-family:'poppins',sans-serif">Blog Summary</h4>

<div class="row">
    <div class="col-xl-4 col-sm-6 col-12">
        <a href="{{ route('postview.index') }}">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon text-primary border-primary">
                        <i class="fa-regular fa-copy"></i>
                    </span>
                    <div class="dash-count">
                        <h3>{{ $tpost }}</h3>
                    </div>
                </div>
                <div class="dash-widget-info">
                    <h6 class="text-muted">Total post</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-primary w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    </div>

    <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon text-success border-success">
                        <i class="fa-regular fa-eye"></i>
                    </span>
                    <div class="dash-count">
                        <h3>{{ $total }}</h3>
                    </div>
                </div>
                <div class="dash-widget-info">

                    <h6 class="text-muted">Total Viewers</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
            <a href="{{ route('postperformance.index') }}">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon text-warning border-warning">
                        <i class="fa-solid fa-chart-line"></i>
                    </span>
                    <div class="dash-count">

                    </div>
                </div>
                <div class="dash-widget-info">

                    <h6 class="text-muted"> Post Performance</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-warning w-50"></div>
                    </div>
                </div>
            </div>
        </a>
        </div>
    </div>
</div>

@endif

@if ($ua-> career == 1 )

<h4 style="font-size:22px; font-weight:600;font-family:'poppins',sans-serif">Career Summary</h4>

<div class="row">
    <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon text-primary border-primary">
                        <i class="fa-solid fa-desktop"></i>
                    </span>
                    <div class="dash-count">
                        <h3>{{ $ongoing_job }}</h3>
                    </div>
                </div>
                <div class="dash-widget-info">
                    <h6 class="text-muted">Ongoing Job post</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-primary w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon text-danger border-danger">
                        <i class="fa-solid fa-person-arrow-down-to-line"></i>
                    </span>
                    <div class="dash-count">
                        <h3>{{ $newapply }}</h3>
                    </div>
                </div>
                <div class="dash-widget-info">

                    <h6 class="text-muted">New Application</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-danger w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon text-warning border-warning">
                        <i class="fa-solid fa-user-check"></i>
                    </span>
                    <div class="dash-count">
                        <h3>{{ $shortlist }}</h3>
                    </div>
                </div>
                <div class="dash-widget-info">

                    <h6 class="text-muted"> Shortlisted Candidate</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-warning w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif


@endsection
