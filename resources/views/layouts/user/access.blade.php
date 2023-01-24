@extends('layouts.app')

@section('main-content')


@php
$ua = json_decode($user ->access);
$sua = json_decode($user ->sub_access);
@endphp

<div class="page-wrapper">

    <div class="content container-fluid">
@include('validate')
        <!-- Page Header -->
       <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><a style="color:rgb(100, 201, 231)" href="{{ route('home') }}">Dashboard</a> / <a style="color:rgb(100, 201, 231)" href="{{ route('user.index') }}">User list</a> /  Access Control</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

        <div class="row">

                <div class="col-md-10">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h4 class="card-title">Assign Access of {{ $user->name }} </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('userAccessControl.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')



                     <!-- /User Access Control-->
                                <div class="form-group row">
                                    <div class="col-md-10">

                                        <div>
                                            <input type="checkbox" onchange="checkAll(this)" /> Check All<br/>
                                            <hr>
                                        </div>


                                        <div class="checkbox">



                                            <label>

                                                <input type="hidden" name="user" value="0">
                                                <input type="checkbox" name="user" value="1"  onclick="Usercheckall(this)"

                                                @if ($ua->user == '1')
                                                checked


                                                @endif

                                                > User


                                            </label>

                                        </div>


                                        <div class="checkbox ml-3">



                                            <label>

                                                <input type="hidden" name="user_create" value="0">
                                                <input type="checkbox" class="usr" name="user_create" value="1"



                                                @if ($sua->user_create == '1')
                                                checked


                                                @endif

                                                > User Create


                                            </label>


                                            <label>

                                                <input type="hidden" name="user_dept" value="0">
                                                <input type="checkbox" class="usr" name="user_dept" value="1"

                                                @if ($sua->user_department == '1')
                                                checked


                                                @endif

                                                > User Department


                                            </label>



                                            <label>

                                                <input type="hidden" name="user_des" value="0">
                                                <input type="checkbox" class="usr" name="user_des" value="1"

                                                @if ($sua->user_designation == '1')
                                                checked


                                                @endif

                                                > User Designation


                                            </label>


                                            <label>

                                                <input type="hidden"  name="user_access" value="0">
                                                <input type="checkbox" class="usr" name="user_access" value="1"

                                                @if ($sua->user_role == '1')
                                                checked


                                                @endif

                                                > User Aceess Control


                                            </label>





                                        </div>







                                      {{-- Career Section Manage --}}








                                        <div class="checkbox">


                                            <label>

                                                <input type="hidden" name="career" value="0">
                                                <input type="checkbox" name="career" value="1" onclick="Careercheckall(this)"

                                                @if ($ua->career == '1')
                                                checked


                                            @endif

                                                > Career


                                            </label>
                                        </div>


                                        <div class="checkbox ml-3">

                                            <label>

                                                <input type="hidden" name="career_post" value="0">
                                                <input type="checkbox" class="cr" name="career_post" value="1"

                                                @if ($sua->career_post == '1')
                                                checked


                                                @endif

                                                >  Job Post


                                            </label>


                                            <label>

                                                <input type="hidden" name="job_position" value="0">
                                                <input type="checkbox" class="cr" name="job_position" value="1"

                                                @if ($sua->job_position == '1')
                                                checked


                                                @endif

                                                > Job Position


                                            </label>


                                            <label>

                                                <input type="hidden" name="job_prefix" value="0">
                                                <input type="checkbox" class="cr" name="job_prefix" value="1"

                                                @if ($sua->job_prefix == '1')
                                                checked


                                                @endif

                                                > Job Prefix


                                            </label>



                                            <label>

                                                <input type="hidden" name="job_application" value="0">
                                                <input type="checkbox" class="cr" name="job_application" value="1"

                                                @if ($sua->job_application == '1')
                                                checked


                                                @endif

                                                > job Application


                                            </label>




                                        </div>




{{-- Event Section Manage --}}



<div class="checkbox">


    <label>

        <input type="hidden" name="event" value="0">
        <input type="checkbox" name="event" value="1" onclick="Eventcheckall(this)"

        @if ($ua->event == '1')
        checked


    @endif

        > Event


    </label>
</div>






<div class="checkbox ml-3">

    <label>

        <input type="hidden" name="event_view" value="0">
        <input type="checkbox" class="ev" name="event_view" value="1"

        @if ($sua->event_view == '1')
        checked


        @endif

        >  View event


    </label>


    <label>

        <input type="hidden" name="event_category" value="0">
        <input type="checkbox" class="ev" name="event_category" value="1"

        @if ($sua->event_category == '1')
        checked


        @endif

        >  Event category


    </label>


    <label>

        <input type="hidden" name="event_create" value="0">
        <input type="checkbox" class="ev" name="event_create" value="1"

        @if ($sua->event_create == '1')
        checked


        @endif

        > Create event


    </label>



    <label>

        <input type="hidden" name="event_manage" value="0">
        <input type="checkbox" class="ev" name="event_manage" value="1"

        @if ($sua->event_manage == '1')
        checked


        @endif

        > Manage Event


    </label>




</div>










{{-- Press Release Section Manage --}}

                                        <div class="checkbox">


                                            <label>

                                                <input type="hidden" name="press_release" value="0">
                                                <input type="checkbox" name="press_release" value="1" onclick="Presscheckall(this)"

                                                @if ($ua->press_release == '1')
                                                checked


                                            @endif

                                                > Press Release


                                            </label>
                                        </div>


                                        <div class="checkbox ml-3">

                                            <label>

                                                <input type="hidden" name="press_view" value="0">
                                                <input type="checkbox" class="press" name="press_view" value="1"

                                                @if ($sua->press_view == '1')
                                                checked


                                                @endif

                                                >  View post


                                            </label>


                                            <label>

                                                <input type="hidden" name="press_category" value="0">
                                                <input type="checkbox" class="press" name="press_category" value="1"

                                                @if ($sua->press_category == '1')
                                                checked


                                                @endif

                                                > Category


                                            </label>


                                            <label>

                                                <input type="hidden" name="press_create" value="0">
                                                <input type="checkbox" class="press" name="press_create" value="1"

                                                @if ($sua->press_create == '1')
                                                checked


                                                @endif

                                                > Create post


                                            </label>



                                            <label>

                                                <input type="hidden" name="press_manage" value="0">
                                                <input type="checkbox" class="press" name="press_manage" value="1"

                                                @if ($sua->press_manage == '1')
                                                checked


                                                @endif

                                                > Manage post


                                            </label>




                                        </div>

{{-- FAQ Section Manage --}}

                                        <div class="checkbox">


                                            <label>

                                                <input type="hidden" name="faq" value="0">
                                                <input type="checkbox" name="faq" value="1" onclick="Faqcheckall(this)"

                                                @if ($ua->faq == '1')
                                                checked


                                            @endif

                                                > FAQ


                                            </label>
                                        </div>

                                        <div class="checkbox ml-3">

                                            <label>

                                                <input type="hidden" name="faq_create" value="0">
                                                <input type="checkbox" class="faq" name="faq_create" value="1"

                                                @if ($sua->faq_create == '1')
                                                checked


                                                @endif

                                                >  Create Q/A


                                            </label>


                                            <label>

                                                <input type="hidden" name="faq_manage" value="0">
                                                <input type="checkbox" class="faq" name="faq_manage" value="1"

                                                @if ($sua->faq_manage == '1')
                                                checked


                                                @endif

                                                >  Manage FAQ


                                            </label>


                                            <label>

                                                <input type="hidden" name="faq_category" value="0">
                                                <input type="checkbox" class="faq" name="faq_category" value="1"

                                                @if ($sua->faq_category == '1')
                                                checked


                                                @endif

                                                > Category


                                            </label>








                                        </div>




{{-- Blog Section Manage --}}

<div class="checkbox">


    <label>

        <input type="hidden" name="blog" value="0">
        <input type="checkbox" name="blog" value="1" onclick="Blogcheckall(this)"

        @if ($ua->blog == '1')
        checked


    @endif

        > Blog


    </label>
</div>

<div class="checkbox ml-3">

    <label>

        <input type="hidden" name="blog_view" value="0">
        <input type="checkbox" class="blog" name="blog_view" value="1"

        @if ($sua->blog_view == '1')
        checked


        @endif

        >  View post


    </label>


    <label>

        <input type="hidden" name="blog_create" value="0">
        <input type="checkbox" class="blog" name="blog_create" value="1"

        @if ($sua->blog_create == '1')
        checked


        @endif

        >  Create Post


    </label>


    <label>

        <input type="hidden" name="blog_category" value="0">
        <input type="checkbox" class="blog" name="blog_category" value="1"

        @if ($sua->blog_category == '1')
        checked


        @endif

        > Category


    </label>



    <label>

        <input type="hidden" name="blog_tag" value="0">
        <input type="checkbox" class="blog" name="blog_tag" value="1"

        @if ($sua->blog_tag == '1')
        checked


        @endif

        > Tag


    </label>

    <label>

        <input type="hidden" name="blog_manage" value="0">
        <input type="checkbox" class="blog" name="blog_manage" value="1"

        @if ($sua->blog_manage == '1')
        checked


        @endif

        > Manage


    </label>




</div>


<div class="checkbox">


    <label>

        <input type="hidden" name="settings" value="0">
        <input type="checkbox" name="settings" value="1" onclick="Careercheckall(this)"

        @if ($ua->settings == '1')
        checked


    @endif

        > Settings


    </label>
</div>







                                    </div>
                                </div>









                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>


<script>
    var checkboxes = document.querySelectorAll("input[type = 'checkbox']");
 function checkAll(myCheckbox){
     if(myCheckbox.checked == true){
         checkboxes.forEach(function(checkbox){
             checkbox.checked = true;
         });
     }
     else{
         checkboxes.forEach(function(checkbox){
             checkbox.checked = false;
         });
     }
 }
</script>

<script>
     function Usercheckall(main){

let all = document.getElementsByClassName("usr");
let a=all.length;
for (var x=0;x<a;x++){
all[x].checked = main.checked;
}

}


 function Careercheckall(main){

let all = document.getElementsByClassName("cr");
let a=all.length;
for (var x=0;x<a;x++){
all[x].checked = main.checked;
}

}


function Eventcheckall(main){

let all = document.getElementsByClassName("ev");
let a=all.length;
for (var x=0;x<a;x++){
all[x].checked = main.checked;
}

}


function Blogcheckall(main){

let all = document.getElementsByClassName("blog");
let a=all.length;
for (var x=0;x<a;x++){
all[x].checked = main.checked;
}

}


function Presscheckall(main){

let all = document.getElementsByClassName("press");
let a=all.length;
for (var x=0;x<a;x++){
all[x].checked = main.checked;
}

}

function Faqcheckall(main){

let all = document.getElementsByClassName("faq");
let a=all.length;
for (var x=0;x<a;x++){
all[x].checked = main.checked;
}

}


</script>









@endsection




