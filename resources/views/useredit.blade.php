
@if(session()->has('success'))
<script type="text/javascript">
alert('{{session('success')}}');
</script>
@endif
 @if (Auth::user())

<form action="{{url('/users/update/')}}/{{$user->id}}"  method="POST">

	  {{ csrf_field() }+

	<input type="text" name="name" value="{{$user->name}}"><br>

	<input type="email" name="email" value="{{$user->email}}"><br>

	<input type="submit" value="Update">

</form>
@endif
