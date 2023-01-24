<footer class="container-fluid  footer fixed-bottom">
    <div class="row">
      <div class="col-md-12 ">
        <ul class="sd">
          <li>
            <a href="{{ route('frontend.press_release') }}" class=" {{ request()->is('press-details/*') ? 'nav-link active' : ''}}">
              <i class="fa-solid fa-arrow-up-right-from-square"></i> @lang('footer.press')</a>
          </li>
          <li>
            <a href="{{ route('frontend.event') }}" class=" {{ request()->is('event-details/*') ? 'nav-link active' : ''}}">
              <i class="fa-solid fa-arrow-up-right-from-square"></i>  @lang('footer.event') </a>
          </li>
          <li>
            <a href="{{ route('frontend.career') }}" class=" {{ request()->is('career-details/*') ? 'nav-link active' : ''}}">
              <i class="fa-solid fa-arrow-up-right-from-square"></i>  @lang('footer.career') </a>
          </li>
          {{-- <li>
            <a href="{{ route('frontend.support') }}">
              <i class="fa-solid fa-arrow-up-right-from-square"></i> Support </a>
          </li> --}}
       {{--    <li>
            <a class="" href="{{ route('frontend.terms') }}">
              <i class="fa-solid fa-arrow-up-right-from-square"></i> Terms & Conditions </a>
          </li> --}}
          <li>
            <a class="" href="{{ route('frontend.privacy') }}">
              <i class="fa-solid fa-arrow-up-right-from-square"></i>  @lang('footer.privacy') </a>
          </li>
          <li>
            <a  class="" href="{{ route('frontend.cookie') }}">
              <i class="fa-solid fa-arrow-up-right-from-square"></i>  @lang('footer.cookie') </a>
          </li>
          {{-- <li>
            <a href="{{ route('frontend.media') }}">
              <i class="fa-solid fa-arrow-up-right-from-square"></i> Media </a>
          </li> --}}
          <li>
            <a href="{{ route('frontend.sitemap') }}">
              <i class="fa-solid fa-arrow-up-right-from-square"></i>  @lang('footer.sitemap') </a>
          </li>
          {{-- <li>
            <a href="{{ route('frontend.merchant') }}">
              <i class="fa-solid fa-arrow-up-right-from-square"></i> Merchant Locator </a>
          </li>
          <li>
            <a href="{{ route('frontend.terrif') }}" class="btn hvr-grow shadow-none terrif" >
              <i class="fa-solid fa-arrow-up-right-from-square"></i> Tariff Calculator</a>
          </li> --}}


        </ul>
      </div>
      <div class="col-md-12 ">
        <div class="mobilesocial center">
          <div class="div">
            <hr style="color: white;height:2px;width:100%">
          </div>
          <ol class="msocial">
            <li>
              <a href="https://www.youtube.com/channel/UC2AHw4Dlwfy56ifCPTbPlOw">
                <i class="fa-brands fa-youtube"></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/EpsPay">
                <i class="fa-brands fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/company/epspay">
                <i class="fa-brands fa-linkedin-in"></i>
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/EPSpay" class="active">
                <i class="fa-brands fa-facebook-f"></i>
              </a>
            </li>
          </ol>
        </div>
      </div>
      <div class="col-md-12">
        <div class="copyright">
          <p> © Copyrights 2022 EPS All rights reserved.</p>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
    </div>
  </footer>


