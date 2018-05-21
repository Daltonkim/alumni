
@extends('layouts.app')
<style>
.search-form .form-group {
  float: right !important;
  transition: all 0.35s, border-radius 0s;
  width: 32px;
  height: 32px;
  background-color: #fff;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
  border-radius: 25px;
  border: 1px solid #ccc;
}
.search-form .form-group input.form-control {
  padding-right: 20px;
  border: 0 none;
  background: transparent;
  box-shadow: none;
  display:block;
}
.search-form .form-group input.form-control::-webkit-input-placeholder {
  display: none;
}
.search-form .form-group input.form-control:-moz-placeholder {
  /* Firefox 18- */
  display: none;
}
.search-form .form-group input.form-control::-moz-placeholder {
  /* Firefox 19+ */
  display: none;
}
.search-form .form-group input.form-control:-ms-input-placeholder {
  display: none;
}
.search-form .form-group:hover,
.search-form .form-group.hover {
  width: 100%;
  border-radius: 4px 25px 25px 4px;
}
.search-form .form-group span.form-control-feedback {
  position: absolute;
  top: -1px;
  right: -2px;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  color: #3596e0;
  left: initial;
  font-size: 14px;
}
</style>


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1> Search Alumni</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <form action="{{ route ('search.results')}}" class="search-form">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="search" placeholder="Search">
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
                  <div class="col-lg-12" id="search-results">
            	</div>
                </div>
            </form>
    </div>
</div>


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
