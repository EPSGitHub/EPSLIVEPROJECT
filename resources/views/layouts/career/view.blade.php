@extends('layouts.app')

@section('main-content')

 <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">

                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('careers.index') }}">Career post</a> / Details</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title  d-inline">Job Details</h4>
                    <a href="{{ route('careers.edit',$career->id) }}" style="float:right" class="btn btn-info d-inline">Edit post</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">

                            <tbody>
                                <tr>
                                    <td style="width:400px;font-weight:600"><p> Title</p></td>
                                    <td>{{ $career->title }}</td>

                                </tr>
                                <tr>
                                    <td style="width:400px;font-weight:600"><p> Department</p></td>
                                    <td>{{ $career->CareerDep->name }}</td>

                                </tr>

                                <tr>
                                    <td style="width:400px;font-weight:600"><p> Job Type</p></td>
                                    <td>{{ $career->job_type }}</td>

                                </tr>


                                <tr>
                                    <td style="width:400px;font-weight:600"><p> Total Vacancy</p></td>
                                    <td>{{ $career->vacancy }}</td>

                                </tr>


                                <tr>
                                    <td style="width:400px;font-weight:600"><p> Required Experiance</p></td>
                                    <td>{{ $career->experiance }}</td>

                                </tr>

                                <tr>
                                    <td style="width:400px;font-weight:600"><p> Location </p></td>
                                    <td>{{ $career->location }}</td>

                                </tr>

                                <tr>
                                    <td style="width:400px;font-weight:600"><p> Salary </p></td>
                                    <td>{{ $career->salary }}</td>

                                </tr>

                                <tr>
                                    <td style="width:400px;font-weight:600"><p>  Published Date </p></td>
                                    <td>{{ date('d-m-Y', strtotime($career->created_at)) }}</td>

                                </tr>

                                <tr>
                                    <td style="width:400px;font-weight:600"><p>  Expired Date </p></td>
                                    <td>{{ date('d-m-Y', strtotime($career->apply_deadline)) }}</td>

                                </tr>


                                <tr>
                                    <td style="width:400px;font-weight:600"><p> Posted By </p></td>
                                    <td>{{ $career->Author->name }}</td>

                                </tr>


                                <tr>
                                    <td style="width:400px;font-weight:600"><p> Last Edited By </p></td>
                                    <td>{{ $career->Editor->name }}</td>

                                </tr>




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>



@endsection


