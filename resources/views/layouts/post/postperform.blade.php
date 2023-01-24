@extends('layouts.app')

@section('main-content')

 <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Home / Blog post / view</li>
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
                        <h4 class="card-title">Post Performance & Manage Top Viewing post </h4>
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
                                        <th style="text-align: center">Total Views</th>
                                        {{-- <th>Author</th> --}}

                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_data as $data)


                                    <tr>
                                        <td>{{ $loop -> index+1 }}</td>
                                        <td><img src="{{ URL::to('') }}/media/post/{{ $data->images_en}}" alt="missing image" width="50px"></td>
                                        <td>{{ $data->title_en}} <br> {{ $data->title_bn}}</td>
                                   <td>{{ $data->postCat->name_en }} <br> {{ $data->postCat->name_bn }}</td>


                                        <td style="text-align: center">
                                            {{ $data->views }}
                                        </td>
                                       {{-- <td>{{ $data ->Author->name }}</td> --}}



                                        <td>
                                            <div class="status-toggle">
                                                <input type="checkbox" blogview_status_id={{ $data->id }} {{ $data-> editable == true ? 'checked="checked"':'' }} id="cat_status_{{$loop->index+1 }}" class="check">
                                                <label for="cat_status_{{ $loop->index+1 }}" class="checktoggle">checkbox</label>
                                            </div>
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


