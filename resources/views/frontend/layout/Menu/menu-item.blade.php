<div class="container-fluid">
    <div class="logo1 col-md-2">
      <a href="{{ route('fontend.home') }}"><img src="{{ URL::to('') }}/frontend/img/logo/eps-logo.svg" class="" alt="EPS - Easy Payment System"></a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nv" id="collapsibleNavbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ui">
          <a class="nav-link " aria-current="page" href="{{ route('fontend.home') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-grid-fill" viewBox="0 0 16 16">
              <path
                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z" />
            </svg> @lang('menu.home') </a>
        </li>
       {{--  <li class="nav-item offeritem">
          <a class="nav-link " aria-current="page" href="{{ route('frontend.offer') }}">
            <img src="{{ URL::to('') }}/frontend/img/eps_gif_image.gif" width="26px"  alt="">
            <span>Offers</span>
          </a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link {{ request()->is('services/*') ? 'active' : ''}} " aria-current="page" href="{{ route('frontend.service') }}">
            <i class="fa-solid fa-hand-holding-medical"></i> @lang('menu.services') </a>
        </li>




        <li class="nav-item">
          <a class="nav-link {{ request()->is('blog-details/*') ? 'active' : ''}} {{ request()->is('bn/blog-details/*') ? 'active' : ''}} " aria-current="page" href="{{ route('frontend.blog') }}">
            <i class="fa-solid fa-file-signature"></i> @lang('menu.blog') </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{ route('frontend.faq') }}">
            <i class="fa-solid fa-circle-question"></i> @lang('menu.faq') </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('about-us/*') ? 'active' : ''}} {{ request()->is('bn/about-us/*') ? 'active' : ''}} " aria-current="page" href="{{ route('frontend.aboutus') }}">
            <i class="fa-solid fa-circle-info"></i> @lang('menu.about') </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{ route('frontend.contact') }}">
            <i class="fa-solid fa-envelope-circle-check"></i> @lang('menu.contact') </a>
        </li>
      </ul>
    </div>
  </div>
