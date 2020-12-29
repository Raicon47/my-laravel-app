@extends('layouts.app')

@section('title')
{{config('app.name', 'Tripcard')}} | {{__('Cards')}}
@endsection

@section('home-banner')
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy Christ!</strong> You made it to the year's end <i class="far fa-smile"></i> join others
    and tell us about your journey.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    <hr>
@endsection

@section('home-main')
@if (count($posts) > 0)
@foreach ($posts as $post)
<div class="container mt-5 p-4 border bg-white mb-3 shadow-sm">
    {{-- <div class="row"> --}}

        {{-- <div class="col-md-4">
           <img src="/storage/img/cover_images/{{$post->cover_image}}" alt="" class="img-fluid">
        </div> --}}

        {{-- <div class="col-md-8"> --}}
            <h1 class="text-secondary fw-bold">{{$post->title}}</h1>
            <p style="width:100%;word-break:break-word;"><?php echo html_entity_decode(substr($post['body'], 0, 200) . '...'); ?></p>
         <small class="text-secondary"><i class="fas fa-user"></i> <strong>{{$post->user->name}}</strong></i></small> <br>
            <a href="show/{{$post->id}}" class="btn btn-danger">Read More</a>
        {{-- </div> --}}

    {{-- </div> --}}
</div>
@endforeach

{{$posts->links()}}

 @else
 <tr>
    <td colspan="3" class="text-danger">Result not found.</td>
</tr>
@endif

@endsection

@section('home-aside')
<a href="{{url('/create')}}" class="btn btn-warning mb-2">Create Card</a>
<div class="fb-page" data-href="https://www.facebook.com/cypriandev" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/cypriandev" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cypriandev">Cyprien-dev</a></blockquote></div>
       <h3>Categories</h3>
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