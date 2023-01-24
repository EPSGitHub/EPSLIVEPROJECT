 <!--  App Download Modal Modal -->

 @php

$popup =App\Models\webpopup::find(1) ;
// $popup =App\Models\webpopup::find();
 @endphp

 <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:99999999">
    <div class="modal-dialog modal-lg modal-dialog-centered ">
      <div class="modal-content appdownloads" style=" background-color: transparent;   border: 0px solid rgba(0,0,0,.2);">



          <div class="col-md-12" >
            <a class="webpopclose"  data-bs-dismiss="modal"  style="" ><i class="fa-solid fa-xmark"></i></a>

              <div class="col-md-12 wpopupview">

                <img  src="{{ URL::to('') }}/media/settings/popup/{{ $popup->image }}" class="img-responsive webpopupimg" alt="">
                <div class="wpopupviewtextblock">
                    <div class="row">
                        <div class="col-md-9">
                            <p class="webpopuptxt">{{ $popup->popuptext_en }}</p>
                        </div>
                        <div class="col-md-3 webpoplink">
                            <a href="{{ $popup->link }}" class="btn btn-sm btn-success shadow-none ">{{ $popup->button_text_en  }}</a>
                        </div>
                    </div>
                </div>



              </div>







          </div>


      </div>
    </div>
</div>
