@extends('layouts.app')

@section('main-content')

 <div class="page-wrapper">

        <div class="content container-fluid">

           <!-- Page Header -->
           <div class="page-header">
            <div class="row">
                <div class="col-sm-12">

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / Manage FAQ</li>
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
                        <h4 class="card-title">Manage Q/A</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0" id="post_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Question</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Status</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_data as $data)


                                    <tr>
                                        <td>{{ $loop -> index+1 }}</td>
                                        <td>{{ $data ->ques_en }} <br> {{ $data ->ques_bn }} </td>


                                   <td>{{ $data->faqCat->name_en }} <br> {{ $data->faqCat->name_bn }}</td>



                                       <td>{{ $data ->Author->name }}</td>


                                            <td>
                                                <div class="status-toggle">
                                                    <input type="checkbox" faq_status_id={{ $data->id }} {{ $data-> status == true ? 'checked="checked"':'' }} id="cat_status_{{$loop->index+1 }}" class="check">
                                                    <label for="cat_status_{{ $loop->index+1 }}" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>

                                        <td>


                                            <a href="{{ route('faqs.edit',$data->id) }}"  class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <form action="{{ route('faqs.destroy', $data->id) }}" method="POST" class="d-inline">
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


