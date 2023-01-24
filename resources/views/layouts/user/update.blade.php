@extends('layouts.app')

@section('main-content')

<div class="page-wrapper">

    <div class="content container-fluid">
@include('validate')
        <!-- Page Header -->
       <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('user.index') }}">User list</a> / profile Update</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

        <div class="row">

                <div class="col-md-10">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h4 class="card-title">Update  {{ $user->name }} profile</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="name" value="{{ $user->name }}"  class="form-control">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Email</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="email" value="{{ $user->email }}"  class="form-control"  @if(Auth::user()->user_role == 'Admin' && $user->user_role != 'Editor' && $user->user_role != 'HR' && $user->user_role != 'viewer' && $user->user_role != 'super admin'  ) readonly @endif>

                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Phone</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="phone" value="{{ $user->phone }}"  class="form-control">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">User ID</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="user_id" placeholder="Enter User ID Provided by EPS"  value="{{ $user->user_id }}"  class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Department</label>
                                    <div class="col-md-9">

                                        <select class="form-control post_tag_select"  name="department">

                                            <option value="{{ $user->Userdep->id }}">{{ $user->Userdep->name}}</option>

                                            @foreach ($user_dep as $udt )

                                            <option  value= "{{ $udt->id  }}">{{ $udt->name }}</option>
                                            @endforeach


                                        </select>




                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Designation</label>
                                    <div class="col-md-9">

                                        <select class="form-control post_tag_select"  name="designation">

                                            <option value="{{ $user->Userdes->id }}">{{ $user->Userdes->name }}</option>

                                            @foreach ($user_des as $udes )

                                            <option  value= "{{ $udes->id  }}">{{ $udes->name }}</option>
                                            @endforeach


                                        </select>




                                    </div>
                                </div>







                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">User Role</label>
                                    <div class="col-md-9">



                                        <select class="form-control post_tag_select" name="role">



                                            <option value="{{ $user->user_role }}">{{ $user->user_role }}</option>

                                            <option  value="Admin">Admin</option>
                                            <option   value="Editor">Editor</option>
                                            <option  value="HR">HR</option>
                                            <option  value="Viewer">Viewer</option>

                                        </select>




                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Address</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="address" value="{{ $user->address }}"  class="form-control">
                                    </div>
                                </div>
{{--
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Password</label>
                                    <div class="col-lg-9">
                                        <input type="password" value="{{ $user->password }}" name="password" class="form-control" readonly>
                                    </div>
                                </div> --}}

                                <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Photos</label>
                                <div class="change-avatar col-lg-9">
                                    <div class="profile-img">
                                        <label for="fimg" id="first"><img src="{{ URL::to('') }}/admin/assets/img/profiles/{{ $user ->image }}" style="width:150px;cursor: pointer"/></label>
                                        <img src="" alt="" id="feather_img" style="width:150px;display:block;cursor: pointer">

                                    </div>
                                    <div class="upload-img mt-3">
                                        <div class="change-photo-btn">
                                            {{-- <span><i class="fa fa-upload"></i> Change Photo</span> --}}




                                            <input class="form-control" type="hidden" name="old_image" value="{{ $user->image }}"  id="" style="display: none">
                                            <input type="file" style="display: none" class="upload" name="new_image"  id="fimg">
                                            <label for="fimg" style="margin-bottom: 15px" id="second"><span class="btn btn-success "> Change Image</span></label>

                                        </div>
                                        <p></p>
                                        <small class="form-text text-muted">Allowed JPG or PNG. Max size of 2MB</small>
                                    </div>
                                </div>

                                </div>




                                <div class="text-right">
                                    <button type="submit" class="btn btn-lg btn-info">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>

@endsection


