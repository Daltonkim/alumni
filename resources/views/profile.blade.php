@extends('layouts.app')


@section('content')

<style type="text/css">
  #hover {
  opacity: 0;
}

#hover:hover {
  opacity: 1;
}
s
}
.jumbos{

 height:1000px;

}
;


/*--responsive design--*/
@media(max-width:1366px)

</style>
     <section>

        
         <div class="row">
          <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default">
           <div class="col-md-12 col-md-offset-1">
            <img src="/uploads/avatars/{{$user->avatar}}" style= "padding-top:15px; width:250px; height:250px; border-radius:20px; margin-right:25px; padding-bottom:10px;"> 
            <h2>{{$user-> name }} {{$user->second}}'s Profile from {{$user->city}}</h2>
           
            <form enctype="multipart/form-data" action="/profile" method="POST" id="hover">
                        
                        <label>update profile image</label>
                        <input type="file" name="avatar">
                        <input type="hidden" name ="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="pull-right btn-sm btn-default" value="Send Picture">
           </form><br/>
                <p style="color:blue;">hover to edit</p>


            
             <label style="color:maroon;">Course</label><p style="font:sans serif, Helvitica;"> Taking  {{$user->course}} </p></li><hr>
             <label style="color:maroon;">Email</label><p style="font:sans serif, Helvitica; font-size:20px;"><a href="http://google.mail.com">{{$user->email}} </a></p></li><hr>
            </ul>
            <h1 style="font:sans serif, Helvitica;"> </h1>
            <div class="jumbotron" style="background-color: maroon; border-radius:10px; border:10px; text-align: center;">
            <p style="font:sans serif, Helvitica; color:white;">{{$user->bio}} </p>

            </div>
          </div>
       </div>
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
<link href="css/main.css" rel="stylesheet">