<style type="text/css">
.error{

	border: 0px solid red;
	background-color: #f9b5af;
	color:red;
	border-radius: 10px;
}
.success{
   
   border: 0px solid green;
   background-color:#d1f9da;
   color: green;
   border-radius: 10px;
}
.error ul {
   list-style: none;
   margin:0;
   padding: 0;
}
.error,
.success{
 text-align: center;
}

</style>


@if(count($errors)> 0)
   <div class="row">
   	  <div class="col-md-4 col-md-offset-4 error">
   	  	<ul>
   	  		@foreach($errors->all() as $error)
   	  		  <li>{{$error}}</li>
   	  		  @endforeach
   	    </ul>
   	   </div>
   	</div>
 @endif 
 @if(Session::has('message'))
 <div class="row">
   	  <div class="col-md-4 col-md-offset-4 success">
   	  	{{Session::get('message')}}
   	   </div>
   	</div>

 @endif