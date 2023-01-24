 @php
     $social =App\Models\settings::find(1) ;
     $scl = json_decode($social->social);
 @endphp


 <!-- // Start Social Icon -->
 <section>
    <div class="social animate__animated animate__fadeInLeft">
      <ul>
        <li id="ytb" onmouseover="YoutubeShow()" onmouseout="YoutubeOut()" >
          <a id="youtube" href="{{ $scl->youtube }}" target="_blank">
            <i class="fa-brands fa-youtube" ></i>
          </a>
        </li>
        <li id="twt" onmouseover="twitterShow()" onmouseout="twitterOut()">
          <a id="twitter" href="{{ $scl->twitter }}" target="_blank">
            <i class="fa-brands fa-twitter" ></i>
          </a>
        </li>
        <li id="lnk" onmouseover="LinkedInShow()" onmouseout="LinkedInOut()">
          <a id="linkedin" href="{{ $scl->linkedin }}" target="_blank">
            <i class="fa-brands fa-linkedin-in" ></i>
          </a>
        </li>
        <li id="fb" onmouseover="FacebookShow()" onmouseout="FacebookOut()">
          <a id="facebook" href="{{ $scl->facebook }}" target="_blank">
              <i class="fa-brands fa-facebook-f"></i>
          </a>
        </li>
      </ul>
    </div>
  </section>
  <!-- // End Social Icon -->
