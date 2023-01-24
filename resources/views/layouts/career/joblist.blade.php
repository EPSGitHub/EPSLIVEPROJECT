@extends('layouts.app')

@section('main-content')

 <div class="page-wrapper">

        <div class="content container-fluid">

             <!-- Page Header -->
             <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">

                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('careers.index') }}">Career post</a> / Joblist</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
              {{--  <div class="div">
                <h4 class="float-right d-inline"><a href="{{ route('careers.create') }}" class="btn btn-info" >Add post</a></h4>
               </div>
               <br><br> --}}

                <div class="card col-md-12">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title">Job Applications</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0" id="post_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>JOB ID</th>
                                        <th>Job Title</th>
                                        <th>Department</th>
                                        <th>New Application</th>
                                        <th>Total Application</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_data as $data)


                                    <tr>
                                        <td>{{ $loop ->index+1}}</td>
                                        <td>{{ $data ->job_id }}
                                        <td>{{ $data ->title }} <br>

                                            @if ($data->status == 0)
                                            <span class="badge badge-warning">unpublished</span>
                                            @endif
                                            @if ($data->status == 1)
                                            <span class="badge badge-success">ongoing</span>
                                            @endif

                                            @php
                                                $today = date("Y-m-d");
                                                $expireday= $data->apply_deadline;

                                                $today_time = strtotime($today);
                                                $expire_time = strtotime($expireday);
                                            @endphp

                                            @if ($expire_time < $today_time )

                                                <span class="badge badge-danger">Expired</span>
                                            @endif

                                        </td>
                                      <td>{{ $data->CareerDep->name }}</td>

                                        <td>

                                            @php
                                            $jobt = App\Models\jobapplication::where('job_id','=',$data ->job_id)->where('status','=','1')-> count();;
                                            @endphp

                                            <p style="margin-left:30%">{{ $jobt }}</p>

                                        </td>


                                        <td>

                                            @php
                                            $jobt = App\Models\jobapplication::where('job_id','=',$data ->job_id)->count();;
                                            @endphp

                                            <p style="margin-left:30%">{{ $jobt }}</p>

                                        </td>








                                        <td>
                                            <a href="{{ route('job.applicantview',$data->job_id) }}" class="btn btn-md btn-info">View </a>

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







@endsection


