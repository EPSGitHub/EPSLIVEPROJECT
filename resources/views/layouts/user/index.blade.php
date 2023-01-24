@extends('layouts.app')

@section('main-content')

<style>
    #post_table td{
        vertical-align: middle;

    }
</style>

@php
$r = Auth::user()->id;
$user = App\Models\User::find($r);
 $sua = json_decode($user ->sub_access);
@endphp

 <div class="page-wrapper">

        <div class="content container-fluid">

               <!-- Page Header -->
       <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / Manage User</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

          {{--   <!-- Page Header -->
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
            <!-- /Page Header --> --}}

            <div class="row">


                <div class="card col-md-12">
                    @include('validate')
                    <div class="card-header">
                        <h4 class="card-title">User Management Section</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table class="table mb-0" id="post_table">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Department</th>
                                        <th>User Role</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>



                                @if(Auth::user()->user_role == 'Admin')

                                <tbody>
                                    @foreach ($all_data as $data)


                                    <tr>
                                        <td>{{ $data -> user_id }}</td>
                                        <td> <img src="{{ URL::to('') }}/admin/assets/img/profiles/{{$data ->image }}" alt="missing image" style="width:50px;height:50px;border-radius:50%;margin-right:10px"> {{ $data->name}}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->phone }}</td>
                                        <td>{{ $data->Userdep->name }}</td>
                                        <td>{{ $data->user_role }}</td>

                                        <td>
                                            <a href="{{ route('user.show',\Crypt::encrypt($data->id)) }}" class="btn btn-sm btn-success {{-- @if($data->user_role == 'Admin' && Auth::user()->id != $data->id  ) disabled @endif --}}"><i class="fa fa-eye" aria-hidden="true"></i> </a>


                                            <a href="{{ route('userAccessControl.edit',$data->id) }}"  class="btn btn-sm btn-danger @if($sua->user_role !='1') disabled @endif @if($data->user_role == 'Admin' && Auth::user()->id != $data->id  ) disabled @endif" data-toggle="tooltip" title="Access Control"><i class="fa-solid fa-eye-low-vision"></i></a>

{{--
                                            @if($data->user_role != 'Admin' || Auth::user()->id==$data->id ||  Auth::user()->user_role == 'super admin' )
                                            <a href="{{ route('userpasswordmanage.edit',$data->id) }}"  class="btn btn-sm btn-danger" data-toggle="tooltip" title="Password Change"><i class="fa-solid fa-key"></i></a>
                                            @endif --}}


                                            <a href="{{ route('userpasswordmanage.edit',\Crypt::encrypt($data->id)) }}"  class="btn btn-sm btn-danger  @if($data->user_role == 'Admin' && Auth::user()->id != $data->id  ) disabled @endif " data-toggle="tooltip" title="Password Change"><i class="fa-solid fa-key"></i></a>



                                            <a href="{{ route('user.edit',\Crypt::encrypt($data->id)) }}"  class="btn btn-sm btn-warning  @if($data->user_role == 'Admin' && Auth::user()->id != $data->id  ) disabled @endif" data-toggle="tooltip" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>




                                            <form action="{{ route('user.destroy', $data->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                            <button class=" btn btn-sm btn-danger del_button" data-toggle="tooltip" title="Delete" @if(Auth::user()->user_role == 'Admin' )disabled @endif ><i class="fa fa-trash" aria-hidden="true" ></i></button>
                                            </form>


                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>

                                @endif




                                @if(Auth::user()->user_role == 'super admin')

                                <tbody>
                                    @foreach ($sadmin as $data)


                                    <tr>
                                        <td>{{ $data -> user_id }}</td>
                                        <td> <img src="{{ URL::to('') }}/admin/assets/img/profiles/{{$data ->image }}" alt="missing image" style="width:50px;height:50px;border-radius:50%;margin-right:10px"> {{ $data->name}}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->phone }}</td>
                                        <td>{{ $data->Userdep->name }}</td>
                                        <td>{{ $data->user_role }}</td>

                                        <td>
                                            <a href="{{ route('user.show',\Crypt::encrypt($data->id)) }}" class="btn btn-sm btn-success"><i class="fa fa-eye" aria-hidden="true"></i> </a>


                                            <a href="{{ route('userAccessControl.edit',$data->id) }}"  class="btn btn-sm btn-danger @if($sua->user_role !='1') disabled @endif" data-toggle="tooltip" title="Access Control"><i class="fa-solid fa-eye-low-vision"></i></a>


                                            @if($data->user_role != 'Admin' || Auth::user()->id==$data->id ||  Auth::user()->user_role == 'super admin' )
                                            <a href="{{ route('userpasswordmanage.edit',\Crypt::encrypt($data->id)) }}"  class="btn btn-sm btn-danger" data-toggle="tooltip" title="Password Change"><i class="fa-solid fa-key"></i></a>
                                            @endif


                                            <a href="{{ route('user.edit',\Crypt::encrypt($data->id)) }}"  class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>




                                            <form action="{{ route('user.destroy', $data->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                            <button class=" btn btn-sm btn-danger del_button" data-toggle="tooltip" title="Delete" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>


                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                                @endif







                            </table>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>







@endsection


