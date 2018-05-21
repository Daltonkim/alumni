<div>
<a class="pull-left" href="{{ route('profile.index', ['name' => $user->name])}}">
<!--<img class="media-object" alt=""  src="/uploads/avatars/{{$user->avatar}}" style="width:32px; height:32px; top:10px; left:10px; position:absolute; border-radius:50%;">-->
</a>
<div class="jumbotron" style="float:center;">
<div class="media-body ">

<h4 class="media-heading"><a href="{{ route('profile.index', ['name' => $user->name])}}">{{ $user->name}} {{ $user->second }}</a></h4>
<img class="media-object" alt=""  src="/uploads/avatars/{{$user->avatar}}" style="width:32px; height:32px; top:10px; left:10px; position:absolute; border-radius:50%;">
@if($user->city)

<p>{{ $user->city}}</p>

@endif
	</div>


</div>
</div>
