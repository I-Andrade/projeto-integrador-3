<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content=""> <!-- website name -->
    <meta property="og:site" content=""> <!-- website link -->
    <meta property="og:title" content=""> <!-- title shown in the actual shared post -->
    <meta property="og:description" content=""> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article">

    <!-- Website Title -->
    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{URL::asset('https://fonts.googleapis.com/css?family=Roboto&display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css\bootstrap.css')}}" >
    <link rel="stylesheet" href="{{URL::asset('css\fontawesome-all.css')}}" >
    <link rel="stylesheet" href="{{URL::asset('css\swiper.css')}}" >
    <link rel="stylesheet" href="{{URL::asset('css\magnific-popup.css')}}" >
    <link rel="stylesheet" href="{{URL::asset('css\styles.css')}}" >
    <link rel="stylesheet" href="{{URL::asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}">

    <!-- Favicon  -->
    <link rel="icon" href="/favicon.ico">

</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Navigation -->

    @include('layouts.navbar')
    <!-- end of navbar -->





    <!-- end of header -->
    <!-- end of navigation -->

    @yield('content')

    @include('layouts.footer')
    @include('layouts.scripts')

    <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

</body>

</html>
