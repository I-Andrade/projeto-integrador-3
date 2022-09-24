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
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\bootstrap.css" >
    <link rel="stylesheet" href="css\fontawesome-all.css" >
    <link rel="stylesheet" href="css\swiper.css" >
    <link rel="stylesheet" href="css\magnific-popup.css" >
    <link rel="stylesheet" href="css\styles.css" >

    <!-- Favicon  -->
    <link rel="icon" href="favicon.png">
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




</body>

</html>
