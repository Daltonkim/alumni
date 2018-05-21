@extends('layouts.app')
<style type="text/css">
 #navcontainer ul{
    margin:0;
    padding-left: 400px;
    list-style-type: none;;
    text-align: center;
    float: center;
    font-size: 50px;

}
 ul li .in{
  float: left;
}
#navcontainer ul li .in{
  text-decoration: none;
  padding: .2em 1em;
  color: #fff;
  background-color:maroon ;

}
</style>
<!--<script type="text/javascript">
function ctnd(){
 
    var Reunion = new Date("December 25, 2016 00:01:00"); 
    var Now = new Date();
    var timeDiff = Reunion.getTime() - Now.getTime();
    if ( timeDiff <= 0){

      clearTimeout(timer);
      document.write("Christmas is here");

    }
     
    var seconds = Math.floor(timeDiff / 1000);
    var minutes = Math.floor(seconds / 60);
    var hours = Math.floor(minutes / 60);
    var days = Math.floor(hours / 24);

    hours %=24;

    minutes %=60;

    seconds %=60;

    document.getElementById("daysBox").innerHTML = days;
       document.getElementById("hoursBox").innerHTML = hours;
          document.getElementById("minsBox").innerHTML = minutes;
             document.getElementById("secsBox").innerHTML = seconds;


    var timer = setTimeout ('ctnd()', 1000);
 }



</script>-->
@section('content')
  <!-- Site made with Mobirise Website Builder v2.6.1, http://mobirise.com -->
  <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">-->
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise-slider/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
 


<section class="mbr-slider mbr-section mbr-section--no-padding carousel slide" data-ride="carousel" data-wrap="true" data-interval="5000" id="slider-1" style="background-color:white; margin-left:20px; margin-right:20px; ">
    <div class="mbr-section__container">
        <div>
            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#slider-1" data-slide-to="0" class="active"></li><li data-app-prevent-settings="" data-target="#slider-1" class="" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider-1" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#slider-1" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height active" style="background-image: url(assets/images/teacher.png);">
                    <div class="mbr-box__magnet mbr-box__magnet--sm-padding">
                        <div class=" container">
                            
                            <div class="row"><div class="col-sm-8 col-sm-offset-2">
                                <div class="mbr-hero">
                                    <h1 class="mbr-hero__text">Kenya's Teacher Of The Year</h1>
                                    <p class="mbr-hero__subtext">Alumnus Of Laikipia</p>
                                </div>
                                <div class="mbr-buttons btn-inverse mbr-buttons--center"><a class="mbr-buttons__btn btn btn-lg btn-info" href="/dashboard">Congratulate Her</a> </div>
                            </div></div>
                        </div>
                    </div>
                </div><div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height" style="background-image: url(assets/images/slide2.jpg);">
                    <div class="mbr-box__magnet mbr-box__magnet--sm-padding">
                        <div class=" container">
                            
                            <div class="row"><div class="col-sm-8 col-sm-offset-2">
                                <div class="mbr-hero">
                                    <h1 class="mbr-hero__text">Look at Your Profile</h1>
                                    <p class="mbr-hero__subtext">Advertise Your Profile</p>
                                </div>
                                <div class="mbr-buttons btn-inverse mbr-buttons--center"><a class="mbr-buttons__btn btn btn-lg btn-danger" href="/profile">Profile</a> </div>
                            </div></div>
                        </div>
                    </div>
                </div><div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height" style="background-image: url(assets/images/presentation.png);">
                    <div class="mbr-box__magnet mbr-box__magnet--sm-padding">
                        <div class=" container">
                            
                            <div class="row"><div class="col-sm-8 col-sm-offset-2">
                                <div class="mbr-hero">
                                    <h1 class="mbr-hero__text">Laikipia</h1>
                                    <p class="mbr-hero__subtext">Send Your Donation.</p>
                                </div>
                                <div class="mbr-buttons btn-inverse mbr-buttons--center"><a class="mbr-buttons__btn btn btn-lg btn-success" href="/donate">Donate</a> </div>
                            </div></div>
                        </div>
                    </div>
                </div><div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height" style="background-image: url(assets/images/work.jpg);">
                    <div class="mbr-box__magnet mbr-box__magnet--sm-padding">
                        <div class=" container">
                            
                            <div class="row"><div class="col-sm-8 col-sm-offset-2">
                                <div class="mbr-hero">
                                    <h1 class="mbr-hero__text">We Have A Forum</h1>
                                    <p class="mbr-hero__subtext">Hows Work Out There</p>
                                </div>
                                <div class="mbr-buttons btn-inverse mbr-buttons--center"><a class="mbr-buttons__btn btn btn-lg btn-success" href="/dashboard">Post</a> </div>
                            </div></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-1">
                <span class="glyphicon glyphicon-menu-left" aria-hidden=""></span>
                <span class="sr-only">Previous</span>
            </a>
            <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-1">
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
 <div class="jumbotron" style=" height:150px;margin-top:10px; margin-left:20px; margin-right:20px;  text-align: center; background-image:url(assets/images/sub.jpg);">



<div id="navcontainer">
<ul>
<li><div  class="in"  id="daysBox" ></div></li>
<li><div  class="in" id="hoursBox" ></div></li>
<li><div  class="in" id="minsBox" ></div></li>
<li><div  class="in" id="secsBox" ></div></li>
<script type="text/javascript">ctnd();</script>
</ul>
<h2 style="float:center; margin-top:0px !important;">CountDown To Our Reunion <br> Days Hours Minutes Seconds</h2>
</div>
</div>


<<section class="jumbotron">
<div style="height:400px; font-size:20px; text-align:center;  ">
  <h3 style="color:maroon;">About Laikipia Alumni</h3>
<p>This is a program that is organised annually, <br> by the Laikipia alumni to enable connection, spread of ideas, job seeking and many more. </p>
    

    <h3 style="color:maroon;">Who Is ALUMNI</h3>
<P> Graduate or former student, of Laikipia, university or other campuses of Affiliated.</p>
<p><i>It is not closed to only Laikipia Alumni</i></p>
</div>
<div style="float:center; text-align:center;">
 <a href="{{ url('/gallery') }}"><i class="fa fa-btn"></i><button class="btn btn-primary">See More On Pictures</button></a>
</div>
</section>
<script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/mobirise/js/script.js"></script>

 <!DOCTYPE html>
<html>
<body>

<h1 style="text-align:center;">Our Location</h1>

<div id="map" style="width:96%;height:400px; margin:20px;"></div>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(0.0289, 36.2764),
    zoom: 15
  }
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>

</body>
</html> 


<div class="footer-icons">
<footer class="footer-distributed">
<div class="footer-left">
        <h3>Laikpia<span>logo</span></h3>
                <p class="footer-links">
          <a href="#">Home</a>  ·
          <a href="#">something</a>
          <a href="#">something</a>
          <a href="#">About</a>
          <a href="#">Faq</a>
                    <a href="#">Contact</a>a>
        </p>
<p class="footer-company-name">Company Name &copy; 2015</p>
      </div>
      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"></i>
          <p><span></span> Kenya, Nyahururu</p>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <p>+254727222889</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="">AlumniLaikipia.com</a></p>
        </div>

      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>About the Alumni</span>
          About Alumni
        </p>
        <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>
        </div>
      </div>
    </footer>
                <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=16207774"></script>

@endsection
<script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
