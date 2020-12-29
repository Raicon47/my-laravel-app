@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section('title')
            {{config('app.name', 'Tripcard')}} | {{__('Home')}}
        @endsection     
    </head>
<body>

@section('home-banner')

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <h4 class="alert-heading text-danger">Merry Christmas!</h4>
  <p class="fst-italic text-dark">Aww yeah, you successfully made it to the end of the year, congratulations.
    <i class="far fa-smile"></i></p>
    <hr class="bg-danger">
  <p class="text-muted">This project is created for everyone irrespective of your color, idealogy, orientation, faith and
    educational background. Sign Up and write about how your life has been affected this year either by your
     career, relationship, education or the pandemic.
  </p>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<div class="container mt-3 shadow p-5 rounded">
<div class="row">

    <div class="col-md-8">
      <h1 class="font-weight-bold">Become a {{config('app.name', 'Tripcard')}} Patreon</h1>
        For every moment we laugh, learn something new, eat something delicious or see a memorable site,
        if not grabbed, we will never appreciate the inpact of each fleeting moment in our lives - 
        <span class="text-muted fst-italic">Nwaerema Cyprian Jacob</span>
      </p>
      <hr>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  SEND CHRISTMAS CARDS!
</button>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger fonr-weight-bold" id="exampleModalLabel">Merry Christmas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hello Dear, we are working on how you can send beautiful cards to your family and friends.
       <br>
        <small class="fst-italic">Cheers</small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <!-- modal end -->
    </div>

    <div class="col-md-4 p-5">
        <a href="https://flutterwave.com/pay/9fdvkblcyea0" target="_blank" class="btn btn-lg btn-danger">DONATE HERE</a> 
    </div>

</div>
</div>

@endsection

@section('home-main')

<div class="container mt-5">
    <h1 class="text-danger display-4" id="index-home-main-logo-text">
        Chris<span class="text-warning">c</span>ard!
    </h1>
</div>
<hr>
@endsection

@section('home-aside')
<a href="{{url('/cards')}}" class="mt-5 btn btn-warning mb-2">Check Out Cards</a>
<div class="fb-page" data-href="https://www.facebook.com/cypriandev" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/cypriandev" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cypriandev">Cyprien-dev</a></blockquote></div>
@endsection

@section('home-footer')
<div class="container mt-5">
    <div class="row">

     <div class="col-md-2">
        <h4 class="font-weight-bold">Highlights</h4>
        <i class="text-secondary">Social Site</i>
     </div>

     <div class="col-md-2">
        <h4 class="font-weight-bold">Resources</h4>
        <i class="text-secondary">Chriscards</i>
     </div>

     <div class="col-md-2">
        <h4 class="font-weight-bold">Partners</h4>
        <i class="text-secondary">Every visitor</i>
     </div>

     <div class="col-md-2">
        <h4 class="font-weight-bold">Ecosystem</h4>
        <i class="text-secondary">Inspiration & fun</i>
     </div>

     <div class="col-md-4">
        <small>&copyCopyright 2020 | Nwaerema Cyprian Jacob</small>
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
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-outline-dark mt-2"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
     </div>

    </div>
</div>
@endsection



</body>
</html>
