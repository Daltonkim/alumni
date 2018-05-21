@extends('layouts.app')

@section('content')
<style>
    body{
        float:;
        
    }


</style>
<section class="jumbotron"  style="padding:30px; float:center;">
  <div >
<h1 class="site-title" style="  background-color: #292c2f; ;text-align: center;
color: #fff;
padding-bottom: 0;
padding-top: 0.25em;
margin-top: 0;
line-height: 1.5;
font-size: 4.8rem;
font-family: "1898Sans-Regular", sans-serif;
position: relative;
-webkit-transition: all 0.25s 0s;
-moz-transition: all 0.25s 0s;
-ms-transition: all 0.25s 0s;
-o-transition: all 0.25s 0s;
transition: all 0.25s 0s;">Donate Now</h1>

   
      
      <div class="panel-pane pane-page-title">   
  
      <h1 id="title" style="padding-top: 50px; color: grey;">Your Information For Record Purposes</h1>

      </div>
      
<form   action="{{ route('create.donate') }}" method="post" style="float:center;">
  <article class="node node-promoted clearfix" style="font:sans serif;" >
                      

  <div class="row">
    <div class="form-item col-md-5 {{ $errors->has('first_name') ? ' has-error' : '' }}" style="border-radius:10px;">
    <label>* First Name</label>
    <input class="form-control required" type="text" name="first_name" value="" size="30">
    @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif 
   </div>

   <div class="form-item col-md-5 {{ $errors->has('last_name') ? ' has-error' : '' }}">
    <label>* Last Name</label>
   <input class="form-control required" type="text" name="last_name" value="" size="60">
   @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif 

  </div>

 </div>
  <div class="row">
    <div class="form-item col-md-12">
    <label>Are you an Alumnus/a</label>
    <input class="form-radio" type="radio" name="alumnus" id="alumnus"  value="yes"> Yes&nbsp;&nbsp;
    <input class="form-radio" type="radio" name="alumnus" id="alumnus"  value="no"> No
  </div>
  </div>

  <div class="row">
    <div class="form-item col-md-12 {{ $errors->has('prefferred_address') ? ' has-error' : '' }}">
    <label>Preferred Address</label>
    <input class="form-radio" type="radio" name="preferred_address" id="preferred_address" value="home"> Home &nbsp;&nbsp;
    <input class="form-radio" type="radio" name="preferred_address"  id="preferred_address" value="business"> Business
    </div>
  </div>

   <div class="row">
    <div class="form-item col-md-6 {{ $errors->has('cityfor') ? ' has-error' : '' }}">
      <label>City</label>
      <input class="form-control" type="text" name="cityfor" id="cityfor" size="20">
        @if ($errors->has('cityfor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cityfor') }}</strong>
                                    </span>
                                @endif    

    </div>
    

  <div class="row">
    <div class="form-item col-md-7 {{ $errors->has('telephone') ? ' has-error' : '' }}">
      <label>Telephone</label>
      <input class="form-control" type="integer" id="telephone" name="telephone" placeholder="(XXX) XXX-XXXX" size="12">




      @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif    

    </div>


  </div>
    <div class="row">
    <div class="form-item col-md-12 {{ $errors->has('emailfor') ? ' has-error' : '' }}">
      <label>* Email</label>
      <input class="form-control" type="email" name="emailfor"  id="emailfor" size="30">

      @if ($errors->has('emailfor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('emailfor') }}</strong>
                                    </span>
                                @endif
    </div>
  </div>

  
<hr>

<h1 id="title">About Your Gift</h1>

<div class="row">
    <div class="form-item col-md-8 {{ $errors->has('designation') ? ' has-error' : '' }}">
    <label>Designation</label>
    <input class="form-radio" type="radio" id="designation" name="designation" value="Greatest Need" style="margin-bottom:10px"> Where the need is greatest
    <br />
    <input class="form-radio" type="radio" id="designation" name="designation" value="Student Scholarships" style="margin-bottom:10px"> Student Scholarships
    <br />
    <input class="form-radio" type="radio" id="designation" name="designation" value="Patient Care" style="margin-bottom:10px"> Patient Care
    <br />
    <input class="form-radio" type="radio" id="designation" name="designation" value="Medical Research" style="margin-bottom:10px"> Medical Research
    <br />
    <input class="form-radio" type="radio" id="designation" name="designation" value="Entrepreneurship" style="margin-bottom:10px"> Entrepreneurship
    <br />
    <input class="form-radio" type="radio" id="designation" name="designation" value="Infrastructure" style="margin-bottom:10px"> Infrastructure
    <br />
    <input class="form-radio" type="radio" id="designation" name="designation" value="Graduate School" style="margin-bottom:10px"> Graduate School
    <br />
    
    </div>
  </div>



  
<hr>

<h1 id="title">Tribute </h1>
<h5 style="margin-top:-8px;font-size: 1.3rem;
line-height: 1.95rem;
font-weight: normal;
color: #605648;
text-transform: uppercase;">Optional</h5>

<div class="row">
    <div class="form-item col-md-6 {{ $errors->has('memoryof') ? ' has-error' : '' }}">
    <label>This gift is made in memory of:</label>
    <input class="form-control" type="text" name="memoryof" id="memoryof" size="4">
     @if ($errors->has('memoryof'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('memoryof') }}</strong>
                                    </span>
     @endif
    </div>
</div>

<div class="row">
    <div class="form-item col-md-6 {{ $errors->has('honorof') ? ' has-error' : '' }}">
    <label>This gift is made in honor of:</label>
    <input class="form-control" type="text" name="honorof" size="4" id="honorof">
    @if ($errors->has('honorof'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('honorof') }}</strong>
                                    </span>
     @endif
    </div>
</div>


<div class="form-actions">
  <input class="webform-submit button-primary form-submit btn btn-default btn-primary" type="submit" name="Submit" value="submit">
</div>
<input type="hidden" value="{{Session::token() }}" name="_token">
      </div>
    </article>
      </form>
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
      
<!--<link href="css/main.css" rel="stylesheet">-->
@endsection













