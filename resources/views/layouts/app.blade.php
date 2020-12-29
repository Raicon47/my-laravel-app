<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- You can use open graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="{{ asset('fontawesome-free-5.7.0-web/css/all.min.css') }}" rel="stylesheet">
</head>
<style>
    body {
        font-family: Helvetica, Arial, 'Lato', sans-serif;
    }
    p {
        -webkit-column-break-inside: avoid; /* Chrome, Safari, Opera */
          page-break-inside: avoid; /* Firefox */
               break-inside: avoid; /* IE 10+ */
    }
</style>
<body>
    
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId=282045356268823&autoLogAppEvents=1" nonce="Ys3QtuVp"></script>

    <div id="app">

        @include('inc.navbar')
        @include('inc.messages')
        <main class="py-4">
            @yield('content')
        </main>

        {{-- home layout start --}}
    <div class="container">
        <div class="row">

           <div class="col-md-12">
               @yield('home-banner')
           </div>

           <div class="col-md-9">
               @yield('home-main')
           </div>

           <div class="col-md-3">
               @yield('home-aside')
           </div>

           <div class="col-md-12">
            @yield('home-footer')
        </div>

        </div>
    </div>
    {{-- home layout end --}}

    {{-- about layout start --}}
    <div class="container mt-5">
        <div class="row">      

            <div class="col-md-12">
                @yield('about_header')
            </div>

            <div class="col-md-4">
                @yield('about_aside')
            </div>

            <div class="col-md-8">
                  @yield('about_main')
            </div>

            <div class="col-md-12">
                @yield('about_footer')
            </div>

        </div>
    </div>
    {{-- about layout end --}}
    </div>

    <script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
    <script>CKEDITOR.replace('article-ckeditor');</script> 

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    
    

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fc98c2d6fc8d4e0"></script>

</body>
</html>