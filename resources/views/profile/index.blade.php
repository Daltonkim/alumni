@extends('layouts.app')


@section('content')

<style type="text/css">
  #hover {
  opacity: 0;
}

#hover:hover {
  opacity: 1;
}

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
            <ul>  

             <label style="color:maroon;">Course</label><p style="font:sans serif, Helvitica;"> Taking  {{$user->course}} </p></li><hr>
             <label style="color:maroon;">Email</label><p style="font:sans serif, Helvitica; font-size:20px;"><a href="http://google.mail.com">{{$user->email}} </a></p></li><hr>
            </ul>
            <h1 style="font:sans serif, Helvitica;"> </h1>
            <div class="jumbotron" style="background-color: maroon; border-radius:10px; text-align: center;">
            <p style="font:sans serif, Helvitica; color:white;">{{$user->bio}} </p>
            </div>
            <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=16207774"></script>

            </div>
          </div>
       </div>
     </div>    
</section>






    
@endsection
<link href="css/main.css" rel="stylesheet">