@extends('layouts.app')
@section('content')






  <!-- Table -->
  <table class="table">

<!--   <thead>
  	<td>FirstName</td>
  	 <td>Email</td>

  </thead> -->
   
    @foreach($users as $user)
    	<tr>
    		<td>{{$user->name}}</td>
    		<td>{{$user->email}}</td>
    		<td><a href="{{url('/users/edit/')}}/{{$user->id}}"/>Edit</td>
    		<td><a href="{{url('/users/delete/')}}/{{$user->id}}"/>Delete</td>


    	</tr>
    	@endforeach
  </table>



@endsection
