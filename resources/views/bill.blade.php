@extends('layouts.app')

@section('content')


<h1 style="color:navy;   text-align:center;">Congratulations, We have received your Information SuccessfullY...</h1>

<section class="jumbotron">
<div style="height:400px; font-size:20px; text-align:center;  ">
	<h3 style="color:maroon;">Via Mpesa</h3>
<p><b>+254727222889</b>, <br> Thank you for your enormous support </p>
    

    <h3 style="color:maroon;">PayPal</h3>
<P>No account numbers yet</p>
<p><i>Come Back Again</i></p>
</div>
<div style="float:center; text-align:center;">
 <a href="{{ url('/reunion') }}"><i class="fa fa-btn"></i><button class="btn btn-primary">Check Out there is A Reunion</button></a>
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
          <a href="#">Contact</a>
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