@extends('layouts.app')

@section('main-content')

 <div class="page-wrapper">

        <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / Press post view</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

            <div class="row">
               <div class="div">

               </div>
               <br><br>

                <div class="card col-md-12">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title">Press Release Post view</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0" id="post_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>image</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>published By</th>

                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_data as $data)


                                    <tr>
                                        <td>{{ $loop -> index+1 }}</td>
                                        <td><img src="{{ URL::to('') }}/media/press/{{ $data->feature_img}}" alt="missing image" width="50px"></td>
                                        <td>{{ $data->title_en}} <br> {{ $data->title_bn}}</td>
                                   <td>{{ $data->postCat->name_en }} <br> {{ $data->postCat->name_bn }}</td>



                                       <td>{{ $data ->Author->name }}</td>



                                        <td>
                                            <a href="{{ url('press-details',$data->slug) }}" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i> Preview </a>



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


