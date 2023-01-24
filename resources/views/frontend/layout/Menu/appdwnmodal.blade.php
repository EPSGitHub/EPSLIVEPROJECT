

  @php

  $dwnpopup =App\Models\settings::find(1) ;
  // $popup =App\Models\webpopup::find();
   @endphp


 <!--  App Download Modal Modal -->

 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:99999999">
    <div class="modal-dialog modal-lg modal-dialog-centered ">
      <div class="modal-content appdownloads" style=" background-color: transparent;   border: 0px solid rgba(0,0,0,.2);">



          <div class="col-md-12" >
            <div class="row">
              <div class="col-md-4 dwnsec">
                <a class=""  data-bs-dismiss="modal"  >&times;</a>
                <img  src="{{ URL::to('') }}/media/settings/app/{{$dwnpopup->appimg }}" class="modalimg" alt="">



              </div>
              <div class="col-md-8 dwndes">

                <h4>@lang('menu.download') <img src="{{ URL::to('') }}/frontend/img/appseclogo.png"  alt=""> @lang('menu.app')</h4>
                <p style=""> {{  $dwnpopup->{'apptxt_'.app()->getLocale()} }}  {{-- <a href="{{ route('frontend.app_details') }}"> More Details</a> --}}</p>

                <div class="appicon">
                    <a href="{{ $dwnpopup->apklink }}"><img src="{{ URL::to('') }}/frontend/img/googleplay.png" class="googleplay" alt=""></a>
                <a href="{{ $dwnpopup->ioslink }}"><img src="{{ URL::to('') }}/frontend/img/appstore.png" class="appstore" alt=""></a>
                </div>

              </div>

            </div>
          </div>


      </div>
    </div>
</div>
