# TheFirst
First Times Github


https://www.techiediaries.com/php-jwt-authentication-tutorial/

https://medium.com/better-programming/simple-example-using-json-web-tokens-with-php-and-jquery-c648a80854c

https://www.hackandphp.com/blog/simple-ajax-polling-system-with-php-mysql-jquery-ajax

https://www.phpzag.com/poll-and-voting-system-with-php-and-mysql/

https://www.webslesson.info/2017/08/display-online-users-using-php-mysql-with-ajax-jquery.html

https://www.xspdf.com/resolution/50693359.html


https://css-tricks.com/snippets/css/media-queries-for-standard-devices/

https://codepen.io/onlyveen/pen/KmoaVR



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  


https://serverok.in/amazon-rds-too-many-connections

https://aws.amazon.com/blogs/database/best-practices-for-configuring-parameters-for-amazon-rds-for-mysql-part-3-parameters-related-to-security-operational-manageability-and-connectivity-timeout/


    #fullwidth-video{
    height: 50vw; 
    min-height:50vh;
    position: relative;
    }
   
    #fullwidth-video .fullwidth-video-bg {
    position: absolute; 
    z-index: 1; 
    top: 0px; 
    left: 0px; 
    bottom: 0px; 
    right: 0px; 
    overflow: hidden;
    background-size: cover; 
    background-color: transparent; 
    background-repeat: no-repeat;
    background-position: 0% 50%; background-image:url(http://mysite.com/assets/images/bg/myvideobg.jpg);  
    }
   
   
   #fullwidth-video video {
    margin: auto;
    position: absolute;
    z-index: 1;
    top: 50%;
    left: 0%;
    transform: translate(0%, -50%);
    visibility: visible;
    opacity: 1;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
   
   
    /** For Edge**//
   
    @supports (-ms-ime-align:auto){ 
     #fullwidth-video video
     { object-fit:none; margin:none;position:inherit;
       z-index:1;
       top:50%;
       left:0%;transform:translate(0%, -50%);
       height:auto;width:100%; } 
     } 
  
  </style>
</head>
<body>

how to create error report of max_connection error in rds
<div id="fullwidth-video">
  <div class="fullwidth-video-bg">
   <video playsinline autoplay muted onplaying="this.controls=false" loop>
      <source src="/assets/videos/my-video.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
     
   </video>
  </div>
</div>
</body>
</html>




Here are this week's five links that are worth your time:

1. freeCodeCamp just published an epic 17-hour Data Visualization course. You'll learn: D3.js, SVG graphics, React, React hooks – all while building several data visualization projects. (17 hour YouTube course): https://www.freecodecamp.org/news/learn-data-visualization-in-this-free-17-hour-course/

2. We are translating freeCodeCamp's curriculum into 30 world languages, and both Spanish and Chinese versions are now live. If you are fortunate enough to be bilingual, I encourage you to help translate, and make these learning resources more accessible for people around the world. (5 minute read): https://www.freecodecamp.org/news/world-language-translation-effort/

3. What is a file system? This computer architecture tutorial will teach you how operating systems handle files, partitions, and data storage. (40 minute read): https://www.freecodecamp.org/news/file-systems-architecture-explained/

4. How to code Python apps right on your Android phone – no laptop required. You'll use Pydroid, a powerful integrated development environment, to build a Django project using an Android phone's touch screen. (12 minute read): https://www.freecodecamp.org/news/how-to-code-on-your-phone-python-pydroid-android-app-tutorial/

5. My friend uncovered 1,600 Coursera university courses that you can still take for free. And he shows you step-by-step how to access them. (browsable list): https://www.freecodecamp.org/news/coursera-free-online-courses-6d84cdb30da/


https://www.phpcluster.com/how-to-force-download-a-file-with-php/



44

After much banging-head-on-table, I have a bit better understanding of the issue that I wanted to post for anyone else who may have had this issue.

While the UTF-8 character set will display special characters on the client, the server, on the other hand, may not be so accomodating and would print special characters such as à and è as � and �.

To make sure your server will print them correctly, use the ISO-8859-1 charset:

<?php
    /*Just for your server-side code*/
    header('Content-Type: text/html; charset=ISO-8859-1');
?>












$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 $needle = "view-source:";
 $rre = $needle.$url;
 $rrr = $needle.$url;
 if ($rre == $rrr ) 
 {
	exit(); 
	//header("Location: https://google.com/");
 }
 
<body oncontextmenu="return false">
<script>
$(document).keydown(function(e){
    if(e.which === 123){
        return false;
    }
});
document.addEventListener("keydown", function (event) {
    if (event.ctrlKey) {
        event.preventDefault();
    }   
});
</script>
</body>








https://laratutorials.com/laravel-8-ajax-crud-tutorial/


https://techvblogs.com/blog/build-crud-app-with-laravel-and-reactjs

https://www.google.com/search?q=laravel+8+and+react+crud&ei=exHoYe3yMIqvoASyyq34DQ&oq=laravel+8+and+re&gs_lcp=Cgdnd3Mtd2l6EAEYADIFCAAQgAQyBQgAEIAEMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjoHCAAQRxCwAzoFCAAQkQJKBAhBGABKBAhGGABQlhJY4CFguU1oAXACeACAAaUBiAG0B5IBAzAuNpgBAKABAcgBCMABAQ&sclient=gws-wiz



