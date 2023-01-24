

@php
$r = Auth::user()->id;
$user = App\Models\User::find($r);
 $ua = json_decode($user ->access);
 $sua = json_decode($user ->sub_access);
@endphp

 <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>

                    <li class="{{(Route::currentRouteName()=='home')? 'active': '' }}">
                        <a href="{{route('home')}}"><i class="fa-solid fa-house"></i><span>Dashboard </span></a>
                    </li>


    @if ($ua-> user == 1 )

    <li class="submenu">
        <a href="#"><i class="fas fa-user"></i> <span> Users</span> <span class="menu-arrow"></span></a>
        <ul style="display: none;">
           <li class="{{ (Route::currentRouteName()=='user.index')? 'ok' : '' }} {{ (Route::currentRouteName()=='user.edit')? 'ok' : '' }} {{ (Route::currentRouteName()=='user.show')? 'ok' : '' }} {{ (Route::currentRouteName()=='userpasswordmanage.edit')? 'ok' : '' }} {{ (Route::currentRouteName()=='userAccessControl.edit')? 'ok' : '' }}"><a href="{{ route('user.index')}}"> <i class="fas fa-caret-right"></i> Manage Users</a></li>
        @if ($sua-> user_create == 1 )
           <li class="{{ (Route::currentRouteName()=='user.create')? 'ok' : '' }}"><a href="{{ route('user.create')}}"> <i class="fas fa-caret-right"></i> Create Users</a></li>
           {{-- @if(Auth::user()->user_role == 'hr') --}}
        @endif

        @if ($sua-> user_department == 1 )
           <li class="{{ (Route::currentRouteName()=='department.index')? 'ok' : '' }}"><a href="{{ route('department.index')}}"> <i class="fas fa-caret-right"></i> Add Department</a></li>
        @endif

        @if ($sua-> user_designation == 1 )
           <li class="{{ (Route::currentRouteName()=='designation.index')? 'ok' : '' }}"><a href="{{ route('designation.index')}}"> <i class="fas fa-caret-right"></i> Add Designation</a></li>
           {{-- <li><a href="{{ route('user.index')}}"> <i class="fas fa-caret-right"></i> Add Roles</a></li> --}}
            {{-- @endif --}}

        @endif

        </ul>
    </li>

    @endif

    @if  ($ua-> blog == 1 )


                    <li class="submenu">
                        <a href="#"> <i class="fa-solid fa-blog"></i><span> Blog</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            @if ($sua-> blog_view == 1 )
                            <li class="{{ (Route::currentRouteName()=='postview.index')? 'ok' : '' }}"><a href="{{ route('postview.index') }}"> <i class="fas fa-caret-right"></i> View post</a></li>
                            @endif

                            @if ($sua-> blog_create == 1 )
                            <li class="{{ (Route::currentRouteName()=='postCreate.create')? 'ok' : '' }}"><a href="{{ route('postCreate.create') }}"> <i class="fas fa-caret-right"></i> Add New post</a></li>
                            @endif

                            @if ($sua-> blog_manage == 1 )
                            <li class="{{ (Route::currentRouteName()=='post.index')? 'ok' : '' || (Route::currentRouteName()=='post.edit')? 'ok' : ''  }}"><a href="{{ route('post.index') }}"> <i class="fas fa-caret-right"></i> Manage Post</a></li>
                            @endif

                            @if ($sua-> blog_category == 1 )
                            <li class="{{ (Route::currentRouteName()=='postCategory.index')? 'ok' : '' }}"><a href="{{ route('postCategory.index') }}"> <i class="fas fa-caret-right"></i> Categories</a></li>
                            @endif

                            @if ($sua-> blog_tag == 1 )
                             <li class="{{ (Route::currentRouteName()=='postTag.index')? 'ok' : '' }}"><a href="{{ route('postTag.index') }}"> <i class="fas fa-caret-right"></i> Tags</a></li>
                             @endif

                        </ul>
                    </li>

     @endif





 @if ($ua-> career == 1 )

 <li class="submenu">
    <a href="#"> <i class="fa-solid fa-users-line"></i><span> Career</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">

        @if ($sua-> job_position == 1 )
        <li class="{{ (Route::currentRouteName()=='careerCategory.index')? 'ok' : '' }}"><a href="{{ route('careerCategory.index') }}"> <i class="fas fa-caret-right"></i> Add Department</a></li>
        <li class="{{ (Route::currentRouteName()=='jobdesignation.index')? 'ok' : '' }}"><a href="{{ route('jobdesignation.index') }}"> <i class="fas fa-caret-right"></i> Add Designation</a></li>

        @endif


        @if ($sua-> job_prefix == 1 )
        <li class="{{ (Route::currentRouteName()=='jobprefix.index')? 'ok' : '' }}"><a href="{{ route('jobprefix.index') }}"> <i class="fas fa-caret-right"></i> Add Job Prefix</a></li>
        @endif

        @if ($sua-> career_post == 1 )
        <li class="{{ (Route::currentRouteName()=='careers.create')? 'ok' : '' }} {{ request()->is('dashboard/careers/*') ? 'ok' : ''}}"><a href="{{ route('careers.create') }}"> <i class="fas fa-caret-right"></i> Create Job post</a></li>

        @endif

        <li class="{{ (Route::currentRouteName()=='careers.index')? 'ok' : '' }} {{ (Route::currentRouteName()=='jobunpublished.index')? 'ok' : '' }} {{ (Route::currentRouteName()=='jobpublished.index')? 'ok' : '' }} {{ (Route::currentRouteName()=='jobpostdraft.index')? 'ok' : '' }} "><a href="{{ route('careers.index') }}"> <i class="fas fa-caret-right"></i> All Job Post</a></li>



       @if ($sua-> job_application == 1 )
       <li class="{{ (Route::currentRouteName()=='career.joblist')? 'ok' : '' }}  {{ request()->is('dashboard/job-application/*') ? 'ok' : ''}} "><a href="{{ route('career.joblist') }}"> <i class="fas fa-caret-right"></i> Job Application list</a></li>

       @endif

    </ul>
</li>


@endif







@if  ($ua-> event == 1 )


    <li class="submenu">
        <a href="#"> <i class="fas fa-list-ul"></i><span> Event</span> <span class="menu-arrow"></span></a>
        <ul style="display: none;">
            @if ($sua-> event_view == 1 )
            <li class="{{ (Route::currentRouteName()=='eventshow')? 'ok' : '' }}"><a href="{{ route('eventshow') }}"> <i class="fas fa-caret-right"></i> View Event</a></li>
            @endif
            @if ($sua-> event_category == 1 )
            <li class="{{ (Route::currentRouteName()=='eventCategory.index')? 'ok' : '' }}"><a href="{{ route('eventCategory.index') }}"> <i class="fas fa-caret-right"></i> Event Category</a></li>
            @endif
            @if ($sua-> event_create == 1 )
            <li class="{{ (Route::currentRouteName()=='eventcreate.create')? 'ok' : '' }}"><a href="{{ route('eventcreate.create') }}"> <i class="fas fa-caret-right"></i> Create New Event</a></li>
            @endif
            @if ($sua-> event_manage == 1 )
            <li class="{{ (Route::currentRouteName()=='eventpost.index')? 'ok' : '' }}"><a href="{{ route('eventpost.index') }}"> <i class="fas fa-caret-right"></i> Manage Event</a></li>
            @endif


        </ul>
    </li>

 @endif


 @if  ($ua-> faq == 1 )


 <li class="submenu">
    <a href="#"> <i class="fa-solid fa-question"></i><span> FAQ</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">

        @if ($sua-> faq_create == 1 )
        <li class="{{ (Route::currentRouteName()=='faqCreate.create')? 'ok' : '' }}"><a href="{{ route('faqCreate.create') }}"> <i class="fas fa-caret-right"></i> Add New Question</a></li>
        @endif

        @if ($sua-> faq_manage == 1 )
        <li class="{{ (Route::currentRouteName()=='faqs.index')? 'ok' : '' || (Route::currentRouteName()=='faqs.edit')? 'ok' : ''  }}"><a href="{{ route('faqs.index') }}"> <i class="fas fa-caret-right"></i> Manage Q/A</a></li>
        @endif

        @if ($sua-> faq_category == 1 )
        <li class="{{ (Route::currentRouteName()=='faqCategory.index')? 'ok' : '' }}"><a href="{{ route('faqCategory.index') }}"> <i class="fas fa-caret-right"></i> Categories</a></li>
        @endif

    </ul>
</li>

@endif




@if  ($ua-> press_release == 1 )

<li class="submenu">
    <a href="#"> <i class="fa-regular fa-newspaper"></i><span> Press Release</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">

        @if ($sua-> press_view == 1 )
        <li class="{{ (Route::currentRouteName()=='pressview')? 'ok' : '' }}"><a href="{{ route('pressview') }}"> <i class="fas fa-caret-right"></i> View Post</a></li>
        @endif

        @if ($sua-> press_create == 1 )
        <li class="{{ (Route::currentRouteName()=='presscreate.create')? 'ok' : '' }}"><a href="{{ route('presscreate.create') }}"> <i class="fas fa-caret-right"></i> Add New post</a></li>
        @endif

        @if ($sua-> press_manage == 1 )
        <li class="{{ (Route::currentRouteName()=='pressManage.index')? 'ok' : '' || (Route::currentRouteName()=='pressManage.edit')? 'ok' : ''  }}"><a href="{{ route('pressManage.index') }}"> <i class="fas fa-caret-right"></i> Manage Post</a></li>
        @endif

        @if ($sua-> press_category == 1 )
        <li class="{{ (Route::currentRouteName()=='pressCategory.index')? 'ok' : '' }}"><a href="{{ route('pressCategory.index') }}"> <i class="fas fa-caret-right"></i> Categories</a></li>
        @endif

    </ul>
</li>
@endif





@if  ($ua-> settings == 1 )

<li class="submenu">
    <a href="#"> <i class="fa-solid fa-gear"></i> <span> Settings</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">

        <li class="{{ (Route::currentRouteName()=='settings.appdwn')? 'ok' : '' }}"><a href="{{route('settings.appdwn') }}"> <i class="fas fa-caret-right"></i>App Download</a></li>



        <li class="{{ (Route::currentRouteName()=='settings.socials')? 'ok' : '' }}"><a href="{{ route('settings.socials') }}"> <i class="fas fa-caret-right"></i>Social Links</a></li>



        <li class="{{ (Route::currentRouteName()=='settings.contact')? 'ok' : '' }}"><a href="{{ route('settings.contact') }}"> <i class="fas fa-caret-right"></i>Contact details</a></li>
        <li class="{{ (Route::currentRouteName()=='webpopup.index')? 'ok' : '' }} || {{ (Route::currentRouteName()=='webpopup.edit')? 'ok' : '' }}"><a href="{{ route('webpopup.index') }}"> <i class="fas fa-caret-right"></i>PopUp Message</a></li>
        <li class="{{ (Route::currentRouteName()=='fulltext.index')? 'ok' : '' }} || {{ (Route::currentRouteName()=='fulltext.edit')? 'ok' : '' }}"><a href="{{ route('fulltext.index') }}"> <i class="fas fa-caret-right"></i>Full Text Search</a></li>
        <li class="{{ (Route::currentRouteName()=='partnerimg.index')? 'ok' : '' }} || {{ (Route::currentRouteName()=='partnerimg.edit')? 'ok' : '' }}"><a href="{{ route('partnerimg.index') }}"> <i class="fas fa-caret-right"></i>Partner Images</a></li>
        <li class="{{ (Route::currentRouteName()=='settings.blogsidebar')? 'ok' : '' }}"><a href="{{ route('settings.blogsidebar') }}"> <i class="fas fa-caret-right"></i>Blog sidebar Image</a></li>



    </ul>
</li>
@endif




                </ul>
            </div>
        </div>
    </div>
