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


<div id="fullwidth-video">
  <div class="fullwidth-video-bg">
   <video playsinline autoplay muted onplaying="this.controls=false" loop>
      <source src="/assets/videos/my-video.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
     
   </video>
  </div>
</div>
</body>
</html>

