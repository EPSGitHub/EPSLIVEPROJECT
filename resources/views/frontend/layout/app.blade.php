<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="{{ URL::to('') }}/frontend/img/favicon.png">


  <title>@yield ('title') </title>
  <meta name="description" content="@yield('metadescription')">


  @include('frontend.layout.style')

  <meta name="google-site-verification" content="d716RCq3WAOL1WgpsxSY3xAmiPW6u0qjCAUuYFdAs2U" />
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-55L7QSW');</script>
<!-- End Google Tag Manager -->
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '658472041994463');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=658472041994463&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->


</head>

<body>
  <!-- Menu  Start  -->
  @include('frontend.layout.Menu.menu')

  <!-- Menu  End -->

  @section('maincontent')
  @show

  <div id="stop" class="scrollTop hvr-grow">
    <a href=""><svg width="35" height="33" viewBox="0 0 40 31" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M38.9697 19.0296L22.2315 1.813C21.5626 1.16079 20.7852 0.838151 19.8997 0.845067C18.9971 0.852116 18.2334 1.1867 17.6081 1.84911L1.11196 19.3253C0.470009 20.0051 0.152798 20.816 0.160057 21.7575C0.167455 22.7168 0.49742 23.5135 1.14915 24.1477L3.08026 26.1311C3.69871 26.8011 4.46775 27.1331 5.38726 27.126C6.30686 27.1188 7.0705 26.7749 7.67863 26.0952L19.994 13.0752L32.5087 25.901C33.1266 26.5708 33.8956 26.903 34.816 26.8958C35.718 26.8888 36.4907 26.5445 37.1322 25.8649L39.0323 23.8516C39.6574 23.1894 39.9666 22.3876 39.9593 21.4464C39.952 20.5048 39.6225 19.699 38.9697 19.0296Z" fill="#EE2D43" fill-opacity="0.6"/>
        <path d="M29.4337 25.1105L21.065 16.5025C20.7305 16.1764 20.3418 16.0151 19.8991 16.0186C19.4477 16.0221 19.0659 16.1894 18.7532 16.5206L10.5048 25.2591C10.1839 25.599 10.0252 26.0044 10.0288 26.4752C10.0325 26.9549 10.1975 27.3532 10.5233 27.6703L11.4889 28.662C11.7981 28.9969 12.1826 29.1629 12.6423 29.1593C13.1021 29.1557 13.484 28.9837 13.7881 28.6439L19.946 22.1336L26.2031 28.5463C26.512 28.8812 26.8965 29.0473 27.3567 29.0437C27.8077 29.0401 28.1941 28.868 28.5148 28.5282L29.4649 27.5215C29.7775 27.1904 29.9321 26.7895 29.9285 26.3189C29.9249 25.848 29.7601 25.4452 29.4337 25.1105Z" fill="#006B4F" fill-opacity="0.6"/>
        <path d="M24.668 28.6548L20.4836 24.3509C20.3164 24.1878 20.1221 24.1072 19.9007 24.1089C19.675 24.1107 19.4841 24.1943 19.3278 24.3599L15.2036 28.7291C15.0431 28.8991 14.9638 29.1018 14.9656 29.3372C14.9674 29.577 15.0499 29.7762 15.2128 29.9347L15.6956 30.4306C15.8502 30.5981 16.0425 30.6811 16.2723 30.6793C16.5022 30.6775 16.6932 30.5915 16.8452 30.4216L19.9242 27.1664L23.0527 30.3728C23.2072 30.5402 23.3994 30.6233 23.6295 30.6214C23.855 30.6197 24.0482 30.5336 24.2086 30.3637L24.6836 29.8604C24.8399 29.6948 24.9172 29.4943 24.9154 29.259C24.9136 29.0236 24.8312 28.8222 24.668 28.6548Z" fill="#006B4F" fill-opacity="0.6"/>
        </svg></a>
    </div>


    {{-- Model 1 --}}


  {{--   <div class="modal fade modalbanner" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  onclick="setTimeout(subscription,2000); setTimeout(subscriptionclose,8000)" >
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body  ">
                    <div class="container col-md-12">
                        <div class="row">



                            <div class="col-md-12">


                                <img src="{{ URL::to('') }}/frontend/img/epsclebration1.png" alt="">



                            </div>

                            <div class="col-md-12">



                                <a  class=" close adpopclsa " onclick="setTimeout(subscription,2000); setTimeout(subscriptionclose,8000)"  style="cursor: pointer;" data-bs-dismiss="modal">&times;</a>


                               </div>
                            <div class="col-md-12" style="">

                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8 textsection">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <p>মহান বিজয় দিবসে ইপিএস পরিবার জাতির সকল শ্রেষ্ঠ সন্তানদের জানায় বিনম্র শ্রদ্ধা। সবাইকে ‘বিজয় দিবস’ এর উষ্ণ শুভেচ্ছা।</p>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="https://eps.com.bd/event-details/ipies-pribarer-mhan-bijy-dibs-udzapn" class="  btn adpopbtn btn-md shadow-none">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>


                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div> --}}




    @include('frontend.layout.Menu.webpopup')





  <!-- Footer  Start -->
@include('frontend.layout.Footer.footer')
  <!-- Footer End -->



  @include('frontend.layout.script')

</body>

</html>
