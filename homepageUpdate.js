function UpdateBrowserData(){
    document.getElementById("nav_AppName").innerHTML="AppName:" + navigator.appName;
    document.getElementById("nav_Product").innerHTML="Product:" + navigator.product;
    document.getElementById("nav_AppVersion").innerHTML="AppVersion:" + navigator.appVersion;
    document.getElementById("nav_UserAgent").innerHTML="UserAgent:" + navigator.userAgent;
    document.getElementById("nav_Product").innerHTML="Product:" + navigator.product;
    document.getElementById("nav_Language").innerHTML="Language:" + navigator.languages;


    document.getElementById("nav_innerHeight").innerHTML="InnerHeight:" + window.innerHeight;
    document.getElementById("win_innerWidth").innerHTML="InnerWidth:" + window.innerWidth;

    document.getElementById("screen_height").innerHTML="Height:" + screen.height;
    document.getElementById("screen_width").innerHTML="Width:" + screen.width;
    document.getElementById("screen_availWidth").innerHTML="AvailWidth:" + screen.availWidth;
    document.getElementById("screen_availHeight").innerHTML="AvailHeight:" + screen.availHeight;
    document.getElementById("screen_colorDepth").innerHTML="ColorDepth:" + screen.colorDepth;
    document.getElementById("screen_pixelDepth").innerHTML="PixelDepth:" + screen.pixelDepth;

    document.getElementById("location_hostname").innerHTML="Hostname:" + window.location.hostname;
    document.getElementById("location_pathname").innerHTML="Pathname:" + window.location.pathname;
    document.getElementById("location_protocol").innerHTML="Protocol:" + window.location.protocol;



  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }


function showPosition(position) {
      document.getElementById("geo_latitude").innerHTML="Latitude:" + position.coords.latitude;
      document.getElementById("geo_longitude").innerHTML="Longitude:" + position.coords.longitude;


}













}