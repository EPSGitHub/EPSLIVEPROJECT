
<!-- Subscription section start -->

<div class="subcription animate__animated animate__fadeIn animate__slow" id="subscrip">

    <div class="subtab" onclick="subscription();searchboxhidden()">

    </div>

    <a id="arw2" onclick="subscriptionclose()" class="close"></a>
    <div id="sub" style="margin-top: -50%;"></div>

  </div>


<!-- Subscription section END -->

<div class="subform animate__animated animate__fadeIn animate__slow" id="sbtn" >
    <img src="frontend/img/subimg.png" width="158px" height="129px" alt="EPS Subscription">
    <p class="btn btn-sm text-white lbtn "  style="">Let's Make a Connection</p>
        <svg class="crsbtn"  width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"  style="cursor: pointer;" onclick="subscriptionclose()">
            <path d="M11.1824 0.34152L5.33255 6.1824C5.11085 6.4159 5 6.68849 5 6.99998C5 7.31749 5.11082 7.58703 5.33255 7.80876L11.1824 13.6586C11.41 13.8862 11.6826 14 12.0001 14C12.3237 14 12.5932 13.8861 12.8088 13.6586L13.4827 12.9847C13.7103 12.769 13.8243 12.4994 13.8243 12.1759C13.8243 11.8524 13.7103 11.5829 13.4827 11.3671L9.1245 6.99998L13.4826 2.63279C13.7101 2.41726 13.8242 2.14769 13.8242 1.82392C13.8242 1.5066 13.7101 1.23389 13.4826 1.0064L12.8087 0.332581C12.587 0.110913 12.3175 6.33818e-07 12 6.47692e-07C11.6825 6.61574e-07 11.4099 0.113746 11.1824 0.34152Z" fill="#EE2D43"/>
            <path d="M2.64179 13.6585L8.49167 7.8176C8.71337 7.5841 8.82422 7.31151 8.82422 7.00002C8.82422 6.68251 8.7134 6.41297 8.49167 6.19124L2.64179 0.341424C2.41424 0.113776 2.14161 -2.92106e-07 1.82411 -3.05985e-07C1.50056 -3.20127e-07 1.23105 0.113902 1.01546 0.341424L0.341517 1.0153C0.113964 1.23102 -3.24905e-05 1.50062 -3.25047e-05 1.82408C-3.25188e-05 2.14756 0.113933 2.4171 0.341517 2.63285L4.69971 7.00002L0.341612 11.3672C0.114122 11.5827 6.14707e-05 11.8523 6.14566e-05 12.1761C6.14427e-05 12.4934 0.114122 12.7661 0.341612 12.9936L1.01552 13.6674C1.23719 13.8891 1.50676 14 1.82417 14C2.14174 14 2.41433 13.8863 2.64179 13.6585Z" fill="#006B4F"/>
            </svg>

    <p style="">@lang('home.subscribe') </p>
    <form action="" id="subscribdata" method="post" class="from-group">
        @csrf
        <input type="text" placeholder="@lang('home.subcribeplc') " class="form-control" name="email">
        <div class="mess"></div>
        @if(Session::has('success'))
        <div class="text-success" style="font-size: 13px;margin-top:10px">
            {{Session::get('success')}}
        </div>
    @endif


    @if(Session::has('error'))
    <div class="text-danger" style="font-size: 13px;margin-top:10px">
        {{Session::get('error')}}
    </div>
@endif

        @if ($errors->has('email'))
        <span class="text-danger" style="font-size:13px" >{{ $errors->first('email') }}</span>
    @endif
        <input style=" background:#006B4F; color:white;" type="submit" value="@lang('home.subcribebtn')"  class="form-control">
    </form>
    <img src="frontend/img/Ellipse.png" alt="Easy Payment System Subscription" id="cornerimg"/>

</div>
{{-- MObile Version --}}






{{-- <div class="subform animate__animated animate__fadeIn animate__slow" id="msbtn"  >
    <img src="frontend/img/subimg.png" width="158px" height="129px" alt="">
    <p class="btn btn-sm text-white lbtn "  style="">Let's Make a Connection</p>
    <svg class="crsbtn" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg"  style="cursor: pointer;" onclick="msubscriptionclose()">
        <path d="M15.1824 0.34152L9.33255 6.1824C9.11085 6.4159 9 6.68849 9 6.99998C9 7.31749 9.11082 7.58703 9.33255 7.80876L15.1824 13.6586C15.41 13.8862 15.6826 14 16.0001 14C16.3237 14 16.5932 13.8861 16.8088 13.6586L17.4827 12.9847C17.7103 12.769 17.8243 12.4994 17.8243 12.1759C17.8243 11.8524 17.7103 11.5829 17.4827 11.3671L13.1245 6.99998L17.4826 2.63279C17.7101 2.41726 17.8242 2.14769 17.8242 1.82392C17.8242 1.5066 17.7101 1.23389 17.4826 1.0064L16.8087 0.332581C16.587 0.110913 16.3175 6.33818e-07 16 6.47692e-07C15.6825 6.61574e-07 15.4099 0.113746 15.1824 0.34152Z" fill="#EE2D43"/>
        <path d="M2.64179 13.6585L8.49167 7.8176C8.71337 7.5841 8.82422 7.31151 8.82422 7.00002C8.82422 6.68251 8.7134 6.41297 8.49167 6.19124L2.64179 0.341424C2.41424 0.113776 2.14161 -2.92106e-07 1.82411 -3.05985e-07C1.50056 -3.20127e-07 1.23105 0.113902 1.01546 0.341424L0.341517 1.0153C0.113964 1.23102 -3.24905e-05 1.50062 -3.25047e-05 1.82408C-3.25188e-05 2.14756 0.113933 2.4171 0.341517 2.63285L4.69971 7.00002L0.341612 11.3672C0.114122 11.5827 6.14707e-05 11.8523 6.14566e-05 12.1761C6.14427e-05 12.4934 0.114122 12.7661 0.341612 12.9936L1.01552 13.6674C1.23719 13.8891 1.50676 14 1.82417 14C2.14174 14 2.41433 13.8863 2.64179 13.6585Z" fill="#006B4F"/>
        </svg>

    <p style="">Subscribe and get our exclusive offers delivered directly to your inbox</p>
    <form action="" class="from-group">
        <input type="text" placeholder="Email / Phone Number" class="form-control">
        <input style=" background:#006B4F; color:white;" type="submit" value="Submit"  class="form-control">
    </form>
    <img src="frontend/img/Ellipse.png" id="cornerimg"/>

</div>
 --}}




