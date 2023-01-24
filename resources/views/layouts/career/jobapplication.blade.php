@extends('layouts.app')

@section('main-content')

 <div class="page-wrapper">

        <div class="content container-fluid">


               <!-- Page Header -->
               <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">

                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('careers.index') }}">Career post</a> / Applications</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->


            <div class="row">


                @php
                    $checked= App\Models\jobapplication::where('status','=','5')->count();
                    $shortlist= App\Models\jobapplication::where('status','=','2')->count();
                    $hired= App\Models\jobapplication::where('status','=','4')->count();
                    $rejected= App\Models\jobapplication::where('status','=','3')->count();

                @endphp

               <br><br>

                <div class="card col-md-12">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title d-inline">Job Applications </h4>
                        <div class="d-inline" style="float:right">
                            <a href="{{ url('dashboard/job-application/job-application-checked') }}" class="badge badge-info shadow-none">checked ({{ $checked }})</span></a>
                            <a href="{{ url('dashboard/job-application/job-application-hired') }}" class="badge badge-success shadow-none">Hired ({{ $hired }})</span></a>
                        <a href="{{ url('dashboard/job-application/job-application-shortlisted') }}" class="badge badge-warning shadow-none">Shortlisted ({{ $shortlist }})</span></a>
                        <a href="{{ url('dashboard/job-application/job-application-rejected') }}" class="badge badge-danger shadow-none">Rejected ({{ $rejected }})</span></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0" id="post_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Applicants Name</th>
                                        <th>Job ID</th>
                                        <th>Department</th>
                                        <th>Application Date</th>
                                        <th>Attachment</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($all_data as $data)


                                    <tr>
                                        <td>{{ $loop ->index+1}}</td>
                                        <td>{{ $data ->name }}
                                            @if ($data->status == 1)
                                            <span class="badge badge-info">new</span>
                                            @elseif ($data->status == 2)
                                            <span class="badge badge-warning">shortlisted</span>
                                            @elseif ($data->status == 3)
                                            <span class="badge badge-danger">Rejected</span>
                                            @elseif ($data->status == 4)
                                            <span class="badge badge-success">Hired</span>
                                            @elseif ($data->status == 5)
                                            <span class="badge badge-info">checked</span>
                                            @endif
                                        </td>

                                        <td>{{ $data->job_id }}</td>
                                        <td>{{ $data->job_position }}</td>
                                        <td>{{ $data->created_at->diffForHumans() }}</td>
                                        <td><a href="{{ URL::to('') }}/media/resume/{{ $data->attachment}}" download="{{ $data ->name }}" onclick="view()"><i class="fa-solid fa-file-pdf" style="color:red;text-align:center;font-size:30px"></i></a></td>




                                        <td>


                                            <a href="{{ url('dashboard/application-checked',$data->id) }}" class="btn btn-sm btn-info"  data-toggle="tooltip" title="Checked"><i class="fa-solid fa-check"></i> </a>
                                            <a href="{{ url('dashboard/shorlist-update',$data->id) }}" class="btn btn-sm btn-warning"  data-toggle="tooltip" title="Shortlisted"><i class="fa-solid fa-table-list"></i> </a>
                                            <a href="{{ url('dashboard/job-hired',$data->id) }}" class="btn btn-sm btn-success"  data-toggle="tooltip" title="Hired"><i class="fa-solid fa-check-to-slot"></i> </a>
                                            <a href="{{ url('dashboard/application-rejected',$data->id) }}" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Rejected"><i class="fa fa-trash" aria-hidden="true"></i> </a>

                                        {{--     <form action="{{ route('job-applications.destroy', $data->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                            <button class=" btn btn-sm btn-danger del_button" data-toggle="tooltip" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form> --}}
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


