@extends('layouts.app')

@section('main-content')

 <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / Career post </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

            @php
            $all= App\Models\career::all()->count();
            $published= App\Models\career::where('status','=','1')->count();
            $draft= App\Models\career::where('status','=','2')->count();
            $unpublished= App\Models\career::where('status','=','0')->count();


             @endphp



            <div class="row">
             {{--   <div class="div">
                <h4 class="float-right d-inline"><a href="{{ route('careers.create') }}" class="btn btn-info" >Add post</a></h4>
               </div>
               <br><br> --}}

                <div class="card col-md-12">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title">All Job Post </h4>
                        <div class="d-inline" style="float:right">
                            <a href="{{ route('careers.index') }}" class="badge badge-secondary shadow-none">All ({{ $all }})</span></a>
                            <a href="{{ route('jobpublished.index') }}" class="badge badge-success shadow-none">Published ({{ $published }})</span></a>
                            <a href="{{ route('jobpostdraft.index') }}" class="badge badge-info shadow-none">Draft ({{$draft  }})</span></a>
                            <a href="{{ route('jobunpublished.index') }}" class="badge badge-warning shadow-none">Unpublished ({{ $unpublished }})</span></a>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0" id="post_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>JOB ID</th>
                                        <th>Job Title</th>

                                        <th>published on</th>

                                        <th> Deadline</th>


                                        <th>Status</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_data as $data)


                                    <tr>
                                        <td>{{ $loop ->index+1}}</td>
                                        <td>{{ $data ->job_id }}</td>
                                        <td>{{ $data ->title }} <br>

                                            @if ($data->status == 0)
                                            <span class="badge badge-warning">unpublished</span>
                                            @endif

                                            @if ($data->status == 1)
                                            <span class="badge badge-success">published</span>
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




                                        <td style="text-align: center;">{{ date('d-m-Y', strtotime($data->created_at))}}</td>
                                        <td style="text-align: center;">{{ date('d-m-Y', strtotime($data->apply_deadline))}}</td>
                                        {{-- <td>{{ $data->apply_deadline ->isoFormat('MMM Do YYYY')}}</td> --}}
                                        {{-- <td>{{ $data ->Author->name }}</td> --}}



                                            <td>
                                                <div class="status-toggle" style="margin-left:30%">
                                                    <input type="checkbox" status_id={{ $data->id }} {{ $data-> status == 1 ? 'checked="checked"':'' }} id="cat_status_{{$loop->index+1 }}" class="check">
                                                    <label for="cat_status_{{ $loop->index+1 }}" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>

                                        <td>

                                            <a href="{{ url('career-details',$data->slug) }}" target="_blank" class="btn btn-sm btn-info"><i class="fa fa-eye" aria-hidden="true"></i> preview </a>

                                            <a href="{{ route('careers.show',$data->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i> </a>

                                            <a href="{{ route('careers.edit',$data->id) }}"  class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <form action="{{ route('careers.destroy', $data->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                            <button class=" btn btn-sm btn-danger del_button" data-toggle="tooltip" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
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







@endsection


