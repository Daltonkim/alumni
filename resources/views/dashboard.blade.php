  @extends('layouts.app')


@include('includes.message-block')


@section('content')


<section class="row new-post ">
  <h1 style="text-align:center;"><i >What did you enjoy most during your time in Laikipia University ?</i></h1>
    <div class="col-md-6 col-md-offset-3">
        <header id="fa"><h3> What do i have to say</h3></header>
           <form action="{{ route('post.create')}}" method="post">
            <div class="form-group">
                <textarea class="form-control"  name="body" id="new-post" placeholder="Say Something"></textarea>
            </div>
            <button type="submit" class="btn btn-default" value="post" >Say It</button>
           <input type="hidden" value="{{ Session::token() }}" name="_token">
         </form>
     </div> 
   </section>
  <section class="row posts">
<div class="col-md-6 col-md-offset-3">
  <header><h3>What other people say  </h3></header>
  @foreach($posts as  $post)
<article class="post" data-postid="{{ $post->id }}">
  <p>   
{{$post->body}} 
  </p>

  <div class="info">
  posted by {{$post->created_at}}
  </div>
   <div class="interaction>">
    <a href="{{ route('post.like', ['post_id' => $post->id]) }}">Like</a>
    <li>{{ $post->likes->count()}} {{ str_plural('like', $post->likes->count())}}</li>
 

    <a href="#" name="edit" class="edit" onClick="divFunction(event)">Edit|</a>
    <a href="{{route('post.delete', ['post_id' => $post->id]) }}">Delete | </a>

    
    </div>
</article>

@endforeach
</div>
  </section>  
    
<!--footer -->
<div class="footer-icons">
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
<p class="footer-company-name">Alumni &copy; 2016</p>
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
    
    
<div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Posts</h4>
      </div>
      <div class="modal-body">
        <form>
           <div class="form-group" v-on="submit: onSubmitForm($event)">
             <label for="post-body">Edit the Post </label>
             <textarea class="form-control" name="post-body" id="post-body" rows="5">   </textarea>
           </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="modal-save" onClick="Savings()">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
 </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">
var token = '{{Session::token() }}';
var urlEdit = '{{ route('edit')}}';
var urlLike='{{route('like')}}';
</script>
@endsection
 <script src="{{ URL::to('appjas/app.js') }}"></script>
<link href="css/css.css" rel="stylesheet">