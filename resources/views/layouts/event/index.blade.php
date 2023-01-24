@extends('layouts.app')

@section('main-content')

 <div class="page-wrapper">

        <div class="content container-fluid">
       <!-- Page Header -->
       <div class="page-header">
        <div class="row">
            <div class="col-sm-12">

                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / Event list</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

            <div class="row">

               <br><br>

                <div class="card col-md-12">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title">Manage Event</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0" id="post_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>image</th>
                                        <th>Title</th>
                                        <th>Event Type</th>

                                        <th>Status</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_data as $data)


                                    <tr>
                                        <td>{{ $loop -> index+1 }}</td>
                                        <td><img src="{{ URL::to('') }}/media/event/{{ $data->featured_images_en}}" alt="missing image" width="50px"></td>
                                        <td>{{ $data->title_en}} <br> {{ $data->title_bn}}</td>
                                        <td>{{ $data->EventCat->title_en }}</td>
                                        <td>
                                            <div class="status-toggle" style="margin-left:30%">
                                                <input type="checkbox" event_id={{ $data->id }} {{ $data-> status == 1 ? 'checked="checked"':'' }} id="cat_status_{{$loop->index+1 }}" class="check">
                                                <label for="cat_status_{{ $loop->index+1 }}" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>









                                        <td>
                                            <a href="{{ route('frontend.event_details',$data->slug) }}" target="_blank" class="btn btn-sm btn-info"><i class="fa fa-eye" aria-hidden="true"></i> preview </a>
                                            {{-- <a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i> </a> --}}

                                            <a href="{{ route('eventpost.edit',$data->id) }}"  class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <form action="{{ route('eventpost.destroy', $data->id) }}" method="POST" class="d-inline">
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


