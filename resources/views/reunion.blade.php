@extends('layouts.app')

<!--<script type="text/javascript">
 function ctnd(){
 
    var Reunion = new Date("December 25, 2017 00:01:00"); 
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



@section('content')

<div class="jumbotron" style="text-align:center; background-image: url(assets/images/work.jpg); border-radius:10px;">
<h1>Reunion Is Here</h1>


</div>

<div class="jumbotron" style=" height:150px;margin-top:10px; margin-left:20px; margin-right:20px;  text-align: center; background-image:url(assets/images/sub.jpg);">


<h2 style="float:center; margin-top:0px !important;">CountDown To Our Reunion</h2>

<div id="navcontainer">
<ul>
<li><div  class="in"  style="border-radius: 10px;" id="daysBox" ></div></li>
<li><div  class="in" id="hoursBox" ></div></li>
<li><div  class="in" id="minsBox" ></div></li>
<li><div  class="in"  style="border-radius: 10px;" id="secsBox" ></div></li>
<script type="text/javascript">ctnd();</script>
</ul><h2> <br><marquee> Days: Hours: Minutes: Seconds</marquee></h2><br>
</div>
</div>
<section class="jumbotron">
<div style="height:400px; font-size:20px; text-align:center;  ">
	<h3 style="color:maroon;">Goal</h3>
<p>This is a program that is organised annually, <br> by the Laikipia alumni to enable connection, spread of ideas, job seeking and many more. </p>
    

    <h3 style="color:maroon;">Activities</h3>
<P>The program will include arranged speakers: Motivational, gifts and a fundraising if neccessary</p>
<p><i>It is not closed to only Laikipia Alumni</i></p>
</div>
<div style="float:center; text-align:center;">
 <a href="{{ url('/gallery') }}"><i class="fa fa-btn"></i><button class="btn btn-primary">See More On Pictures</button></a>
</div>
</section>



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
    
@endsection