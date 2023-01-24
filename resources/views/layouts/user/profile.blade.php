@extends('layouts.app')

@section('main-content')

 <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h5 class="page-title"> Profile View of {{ Auth::user()->name }} </h5>

                    </div>
                    <div class="col-sm-12">
                        <p class="page-title d-inline">{{ $user_data->Userdes->name  }}</p> ,
                        <p class="page-title d-inline">{{ $user_data->Userdep->name }}</p>

                    </div>


                </div>
            </div>

            @include('validate')


            <div class="card">
                <div class="card-body">

                    <!-- Profile Settings Form -->
                    <form action="{{ route('profilemanage.update',$user_data ->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row form-row">
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <div class="change-avatar">
                                        <div class="profile-img">
                                            <label for="fimg" id="first"><img src="{{ URL::to('') }}/admin/assets/img/profiles/{{ $user_data ->image }}" style="width:150px;cursor: pointer"/></label>
                                            <img src="" alt="" id="feather_img" style="width:150px;display:block;cursor: pointer">

                                        </div>
                                        <div class="upload-img mt-3">
                                            <div class="change-photo-btn">
                                                {{-- <span><i class="fa fa-upload"></i> Change Photo</span> --}}




                                                <input class="form-control" type="hidden" name="old_image" value="{{ $user_data ->image }}"  id="" style="display: none">
                                                <input type="file" style="display: none" class="upload" name="new_image"  id="fimg">
                                                <label for="fimg" style="margin-bottom: 15px" id="second"><span class="btn btn-success "> Change Image</span></label>

                                            </div>
                                            <p></p>
                                            <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label> <span style="color:red">*</span> Name</label>
                                    <input type="text" name="name"  class="form-control" value="{{ $user_data -> name }}">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label> User ID</label>
                                    <input type="text" name="user_id" class="form-control" value="{{ $user_data ->user_id }}" readonly>
                                </div>
                            </div>



                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label><span style="color:red">*</span> Mobile</label>
                                    <input type="text" name="phone" value="{{ $user_data ->phone }}" class="form-control">
                                </div>
                            </div>


                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label> User Role</label>
                                    <input type="email" name="role" class="form-control" value="{{ $user_data ->user_role }}" readonly>
                                </div>
                            </div>


                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label><span style="color:red">*</span> Address</label>
                                    <input type="text" name="address" value="{{ $user_data ->address }}" class="form-control">
                                </div>
                            </div>


                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label> Email ID</label>
                                    <input type="email" name="email" class="form-control" value="{{ $user_data ->email }}" readonly>
                                </div>
                            </div>




                            <div class="col-12 col-md-6">
                                <div class="form-group">

                                    <input type="hidden" name="password" value="{{ $user_data ->password }}" class="form-control">
                                </div>
                            </div>


                        </div>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                        </div>
                    </form>
                    <!-- /Profile Settings Form -->

                </div>
            </div>
            <!-- /Page Header -->



        </div>
    </div>







@endsection


