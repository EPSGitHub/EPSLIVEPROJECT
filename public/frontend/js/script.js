/***Cookie policy Home Popup Script start *****/






 $(document).ready(function() {
        if(sessionStorage.getItem('#myModal')!=='true')
        {
            setTimeout(function() {
                $('#myModal'). modal('show');
                }, 8000);
            sessionStorage.setItem('#myModal',true);
        }
    });





/*     setTimeout(showModal,1000);
function showModal(){
  $("#myModal").show()
}

var is_modal_show = sessionStorage.getItem('alreadyShow');
if(is_modal_show != 'alredy shown'){
  $("#myModal").show()
  sessionStorage.setItem('alreadyShow','alredy shown');
} */







   /*  $(document).ready(function() {
        if(sessionStorage.getItem('#myModal2')!=='true')
        {
            setTimeout(function() {
                $('#myModal2'). modal('show');
                }, 35000);
            sessionStorage.setItem('#myModal2',true);
        }
    }); */





  /*   var loader;
function loadNow(opacity) {
  if (opacity <= 0){
    displayContent();
  } else{
    loader.style.opacity = opacity;
    window.setTimeout(function(){
      loadNow(opacity - 1)}, 5000);
    }
  }
function displayContent() {
  loader.style.display = 'none';
  document.getElementById('content').style.display = 'block';
}

document.addEventListener("DOMContentLoaded", function(){
  loader = document.getElementById('loader');
  loadNow(1);
});
 */





 //Loading PopUP
$(document).ready(function () {



    //select the POPUP FRAME and show it
    $("#loading").hide(10000).fadeIn(10000);

    //close the POPUP if the button with id="close" is clicked
    $("#close").on("click", function (e) {
        e.preventDefault();
        $("#loading").fadeOut(1000);
    });

});

//Stop image Dragable
$('img').on('dragstart', function(event) { event.preventDefault(); });




function twitterShow() {
  document.getElementById("twitter").innerHTML = ' — <i class="fa-brands fa-twitter" style="color:#00acee" ></i> — Twitter ';
  document.getElementById("twt").style.transform = "rotate(-90deg)";
  document.getElementById("twt").style.margin = "50px 0px 50px -50px";
  document.getElementById("facebook").innerHTML = '<i class="fa-brands fa-facebook-f"></i>';
  document.getElementById("linkedin").innerHTML = '<i class="fa-brands fa-linkedin-in"></i>';
  document.getElementById("youtube").innerHTML = '<i class="fa-brands fa-youtube"></i>';

}

function twitterOut() {
  document.getElementById("twitter").innerHTML = '<i class="fa-brands fa-twitter"></i>';
  document.getElementById("twt").style.transform = "rotate(0deg)";
  document.getElementById("twt").style.margin = "0px 0px 0px 0px";
  //   document.getElementById("facebook").innerHTML = '<i class="fa-brands fa-facebook-f"></i>';
}

function FacebookShow() {

  document.getElementById("facebook").innerHTML = ' — <i class="fa-brands fa-facebook-f" style="color:#4267B2"></i>— Facebook ';
  document.getElementById("fb").style.transform = "rotate(-90deg)";
  document.getElementById("fb").style.margin = "50px 0px 50px -55px";
  document.getElementById("twitter").innerHTML = '<i class="fa-brands fa-twitter"></i>';
  document.getElementById("linkedin").innerHTML = '<i class="fa-brands fa-linkedin-in"></i>';
  document.getElementById("youtube").innerHTML = '<i class="fa-brands fa-youtube"></i>';
}

function FacebookOut() {

  document.getElementById("facebook").innerHTML = '<i class="fa-brands fa-facebook-f"></i>';
  document.getElementById("fb").style.transform = "rotate(0deg)";
  document.getElementById("fb").style.margin = "0px 0px 0px 0px";
}

function LinkedInShow() {

  document.getElementById("linkedin").innerHTML = ' — <i class="fa-brands fa-linkedin-in" style="color:#0072b1"></i> — LinkedIn ';
  document.getElementById("lnk").style.transform = "rotate(-90deg)";
  document.getElementById("lnk").style.margin = "50px 0px 50px -55px";
  document.getElementById("facebook").innerHTML = '<i class="fa-brands fa-facebook-f" </i>';
  document.getElementById("twitter").innerHTML = '<i class="fa-brands fa-twitter" </i>';
  document.getElementById("youtube").innerHTML = '<i class="fa-brands fa-youtube"</i>';
}
function LinkedInOut() {

  document.getElementById("linkedin").innerHTML = '<i class="fa-brands fa-linkedin-in"></i>';
  document.getElementById("lnk").style.transform = "rotate(0deg)";
  document.getElementById("lnk").style.margin = "0px 0px 0px 0px";
}

function YoutubeShow() {

  document.getElementById("youtube").innerHTML = '— <i class="fa-brands fa-youtube" style="color:red"></i> — Youtube';
  document.getElementById("ytb").style.transform = "rotate(-90deg)";
  document.getElementById("ytb").style.margin = "50px 0px 50px -55px";
  document.getElementById("facebook").innerHTML = '<i class="fa-brands fa-facebook-f"></i>';
  document.getElementById("linkedin").innerHTML = '<i class="fa-brands fa-linkedin-in"></i>';
  document.getElementById("twitter").innerHTML = '<i class="fa-brands fa-twitter"></i>';
}

function YoutubeOut() {

  document.getElementById("youtube").innerHTML = '<i class="fa-brands fa-youtube"></i>';
  document.getElementById("ytb").style.transform = "rotate(0deg)";
  document.getElementById("ytb").style.margin = "0px 0px 0px 0px";
}

//ENd  Social
function subscription() {

    document.getElementById("sbtn").style.display = "block";
    document.getElementById("subscrip").style.display = "none";
}

/* window.addEventListener("load", function () {
    setTimeout(
      function open(event) {
        document.getElementById("sbtn").style.display = "block";
        document.getElementById("subscrip").style.display = "none";
      },
      13000
    )

    setTimeout(
        function open(event) {
            document.getElementById("subscrip").style.display = "block";
            document.getElementById("sbtn").style.display = "none";
        },
        18000
      )
  }); */


function subscriptionclose() {

// document. getElementById("sbtn"). className = "subform animate__animated animate__fadeOut animate__slow";
document.getElementById("subscrip").style.display = "block";
document.getElementById("sbtn").style.display = "none";

}




// Search box show and hide

function searchboxshow() {
  document.getElementById("searchdiv").style.display = "block";
/*   document.getElementById("subscrip").style.display = "none";
  document.getElementById("sbtn").style.display = "none"; */

}
function searchboxhidden() {
  document.getElementById("searchdiv").style.display = "none";
/*   document.getElementById("subscrip").style.display = "block";
  document.getElementById("sbtn").style.display = "none"; */

}


//About Us

/* function singlepageheadshow(){
    document.getElementById("pagehed").style.margin = "-140px 0px 0px 0px ";
}
function singlepageheadhidden(){
    document.getElementById("pagehed").style.margin = "0px 0px 0px 0px ";
} */

function sendMonyout() {
  document.getElementById("phases").innerHTML = '';
}
function billpayout() {
  document.getElementById("phases").innerHTML = '';
}

function corporateout() {
  document.getElementById("phases").innerHTML = '';
}
function marchentout() {
  document.getElementById("phases").innerHTML = '';
}
function paymentgatewayout() {
  document.getElementById("phases").innerHTML = '';
}


$('.filters ul li').click(function(){
    $('.filters ul li').removeClass('active');
    $(this).addClass('active');

    var data = $(this).attr('data-filter');
    $grid.isotope({
      filter: data
    })
  });

/*   var $grid = $(".grid").isotope({
    itemSelector: ".all",
    percentPosition: true,
    masonry: {
      columnWidth: ".all"
    }
  }) */


/** Count Down start */

// BY KAREN GRIGORYAN

$(document).ready(function() {
    /******************************
        BOTTOM SCROLL TOP BUTTON
     ******************************/

    // declare variable
    var scrollTop = $(".scrollTop");

    $(window).scroll(function() {
      // declare variable
      var topPos = $(this).scrollTop();

      // if user scrolls down - show scroll to top button
      if (topPos > 200) {
        $(scrollTop).css("opacity", "1");


      } else {
        $(scrollTop).css("opacity", "0");
      }

    }); // scroll END

    //Click event to scroll to top
    $(scrollTop).click(function() {
      $('html, body').animate({
        scrollTop: 0
      }, 0);
      return false;

    }); // click() scroll top EMD

  }); // ready() END

/** Count Down end */

/** Email Subscription start */






   $(document).on('submit','form#subscribdata',function(e){

    e.preventDefault();

    let email = $('form#subscribdata input[name="email"]').val();
    if(email == ''){
        $('.mess').html('<p class="text-danger text-center"> Email Required</p>')
    }

    else if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email) == false){
        $('.mess').html('<p class="text-danger text-center"> Input a valid Email</p>')

    }

    else{
        $.ajax({
            url : 'subscribe',
            method : "POST",
            contentType : false,
            processData : false,
            data : new FormData(this),
            success: function(data){
                if(data == 'not_unique')
                {
                $('.mess').html('<p class="text-danger text-center">Email already Subscribed</p>')

                }

                else{
                    $('.mess').html('<p class="text-success text-center">Subscription Completed Successfully</p>')
                    $('form#subscribdata')[0].reset();
                }
          }});
    }



  });


/** Email Subscription End */


