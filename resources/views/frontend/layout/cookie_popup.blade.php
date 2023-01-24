<script>

    window.addEventListener("load", function () {
  setTimeout(
    function open(event) {
      document.querySelector(".popup").style.
        display = "block";
    },
    3000
  )
});




document.querySelector("#close").addEventListener
  ("click", function () {
    document.querySelector(".popup").style.display =
      "none";
  });


  document.querySelector("#deny").addEventListener
  ("click", function () {
    document.querySelector(".popup").style.display =
      "none";
  });

  document.querySelector("#accept").addEventListener
  ("click", function () {
    document.querySelector(".popup").innerHTML =`
    <a id="close" onclick="toggle()"> &times;</a>
    <p class="card-text" style="text-align:center; font-size:20px; font-weight:700; color:#006B4F; padding:40px 10px";> Thanks for Your Acceptence !</p>

    `
    setTimeout(function() {
        $('.popup').fadeOut('fast');
    }, 2000);


  });



  // Create cookie
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// Delete cookie
function deleteCookie(cname) {
    const d = new Date();
    d.setTime(d.getTime() + (24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=;" + expires + ";path=/";
}

// Read cookie
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

// Set cookie consent
function acceptCookieConsent(){
    deleteCookie('user_cookie_consent');
    setCookie('user_cookie_consent', 1, 15);
    document.getElementById("cookieNotice").style.display = "none";
}


let cookie_consent = getCookie("user_cookie_consent");
if(cookie_consent != ""){
    document.getElementById("cookieNotice").style.display = "none";
}else{
    document.getElementById("cookieNotice").style.display = "block";
}

/***Cookie policy Home Popup Script end *****/




</script>
