

<div class="col-md-12 navbg sticky-top">
    <div class="col-md-3 topmenu1">
      <a class="search"  onclick="searchboxshow()"><i class="fa-solid fa-magnifying-glass" style="color:#666666"></i></a>
      @include('frontend.layout.Menu.allpageswitcher')
      <button class="btn btn-success shadow-none hddownbtn" class="rgb-border-content" type="submit" data-bs-toggle="modal"
        data-bs-target="#exampleModal">@lang('menu.download')</button>
     {{--  <button class="btn btn-sm btn-danger shadow-none hddownbtn" type="submit">English</button> --}}
    </div>

    <nav class="navbar navbar-expand-lg hd" style="position: relative;">



      @include('frontend.layout.Menu.menu-item')







      <div class="col-md-3 header_buttons topmenu2">

       <a class="search" onclick="searchboxshow()"><i class="fa-solid fa-magnifying-glass"
            style="color:#666666;cursor: pointer;"></i></a>
            @include('frontend.layout.Menu.allpageswitcher')
        <button class="btn btn-success shadow-none hddownbtn" class="rgb-border-content" type="submit"
          data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="searchboxhidden()">@lang('menu.download')</button>

      </div>


    </nav>
  </div>




    @include('frontend.layout.Menu.appdwnmodal')



      <!-- Search Area Design -->
      <div class="searchbox" id="searchdiv">
        <div class="row">
          <div class=" col-md-12 srcimg ">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-3"></div>
              <div class="col-md-7"></div>
              <div class="col-md-1">
                <button type="button" onclick="searchboxhidden();" class="btn-close btn-close-white"
                  aria-label="Close"></button>
              </div>
            </div>
          </div>


          <div class="col-md-12 searchform">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <form action="{{ route('web.search') }}" method="POST">
                    @csrf
                  <div class="input-group">
                    <input type="text" class="form-control shadow-none" id="name" name="name" autocomplete="off" placeholder="Type Words and Hit Enter"/>
                    <div id="search_list">

                    </div>


                    <div class="input-group-append">
                      <input type="submit" class="btn  btn-danger shadow-none " value="Search"/>



                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-2"></div>
            </div>
          </div>


        </div>
      </div>



{{--
      <script type="text/javascript">
       var path = "{{ route('getresult')}}";
        $('input.typeahead').typeahead({
            source:function(value,process){
                return $.get(path,{value:value},function(data){
                    return process(data);
                });
            }

        });
      </script> --}}
      <!-- Search Area Design -->





