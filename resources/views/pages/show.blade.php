@extends('layouts.app')

@section('title')
  {{$post->title}}
@endsection

@section('home-banner')
<div class="alert text-center alert-warning alert-dismissible fade show" role="alert">
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         Enjoy your read <i class="fas fa-smile text-success"></i>
  </div>
@endsection

@section('home-main')

    <div class="bg-light p-4 mt-2">
    {{-- <img src="/storage/img/cover_images/{{$post->cover_image}}" alt="" class="img-fluid"> --}}
        <h1 class="text-danger fw-bolder mt-2">{{$post->title}}</h1>
         <p>{!!$post->body!!}</p>
         <small class="text-secondary"><i class="fas fa-user"></i> <strong>{{$post->user->name}}</strong></i></small> <br>
           <small class="text-secondary"><i class="fas me-1 fa-calendar"></i><i>{{$post->created_at}}</i></small>
           {{-- facebook share button  --}}
           <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="false"></div>
           {{-- twitter share button  --}}
<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<!-- begin wwww.htmlcommentbox.com -->
<div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Form</a> is loading comments...</div>
<link rel="stylesheet" type="text/css" href="https://www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
<script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="https://www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%249W.zh.4ve7fR1%2FPMHO.Rx1"+"&opts=16862&num=10&ts=1607471029329");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
<!-- end www.htmlcommentbox.com -->
    </div>
@endsection

@section('home-aside')
<a href="{{url('/create')}}" class="btn btn-warning mb-2">Create Card</a>
  {{-- facebook page embed  --}}
  <div class="fb-page" data-href="https://www.facebook.com/cypriandev" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/cypriandev" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cypriandev">Cyprien-dev</a></blockquote></div>
       <h3 class="text-dark mt-2 fw-bold">Categories</h3>
       <ul class="list-group shadow">
           @foreach ($categories as $category)
              <li class="list-group-item"><a href="#0">{{$category->category}}</a></li>
           @endforeach 
       </ul>
@endsection

@section('home-footer')
<div class="text-center">
  <hr>
  <p>&copycopyright 2020 | Nwaerema Cyprian Jacob</p> 
<a href="#0" class="link-warning">www.somthingmore.com</a>
<a href="#0"><i class="fab fa-facebook"></i></a>
<a href="#0"><i class="fab fa-twitter"></i></a>
<a href="#0"><i class="fab fa-github text-dark"></i></a>
<a href="#0"><i class="fab fa-instagram text-danger"></i></a>
<a href="#0"><i class="fab fa-youtube text-danger"></i></a>

<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://yahoo.us20.list-manage.com/subscribe/post?u=de77c4c31d421811fb1a0001d&amp;id=27fc1d432a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_de77c4c31d421811fb1a0001d_27fc1d432a" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-outline-dark"></div>
    </div>
</form>

</div>

<!--End mc_embed_signup-->
</div>  
@endsection