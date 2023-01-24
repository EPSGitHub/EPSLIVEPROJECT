@extends('layouts.app')

@section('main-content')

 <div class="page-wrapper">

        <div class="content container-fluid">

  <!-- Page Header -->
  <div class="page-header">
    <div class="row">
        <div class="col-sm-12">

            <ul class="breadcrumb">
                <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / FullText Search </li>
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
                        <h4 class="card-title d-inline">Full Text Search</h4>
                        <a href="#add_cat" class="btn btn-info d-inline" style="float:right" data-toggle="modal">Add search Item</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0" id="post_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_data as $data)


                                    <tr>
                                        <td>{{ $loop -> index+1 }}</td>
                                        <td>{{ $data->title_en}}<br> {{ $data->title_bn}}</td>



                                        <td>

                                            <a href="{{ route('fulltext.edit',$data->id) }}"  class="btn btn-sm btn-warning" data-toggle="tooltip modal" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <form action="{{ route('fulltext.destroy', $data->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                            <button class=" btn btn-sm btn-danger del_button" data-toggle="tooltip" title="Delete"{{--  @if(Auth::user()->user_role != 'super admin' ) disabled @endif --}}><i class="fa fa-trash" aria-hidden="true"></i></button>
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

    // MOdel for Post Create

    <div class="modal fade" id="add_cat">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Add PopUp post</h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('fulltext.store') }}" method="POST"  class="form-group">
                        @csrf
                        <label for="" style="font-weight: 600">English Section</label>
                        <input class="form-control" type="text" name="entitle" placeholder=" English Title (Eng)"><br>
                        <textarea rows="5" cols="5" name="endes" maxlength="250" class="form-control"  placeholder="English Description"></textarea><br>
                        <input class="form-control" type="text" name="enlink" placeholder=" link"><br>


                        <label for="" style="font-weight: 600">বাংলা অংশ </label>
                        <input class="form-control" type="text" name="bntitle" placeholder=" টাইটেল "><br>
                        <textarea rows="5" cols="5" name="bndes" maxlength="250" class="form-control"  placeholder="সংক্ষিপ্ত  বিবরণ "></textarea><br>
                        <input class="form-control" type="text" name="bnlink" placeholder=" লিংক "><br>




                        <input class="btn btn-sm btn-info float-right" type="submit" value="submit">
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>




@endsection


