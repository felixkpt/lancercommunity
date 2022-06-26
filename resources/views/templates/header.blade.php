<?php use Illuminate\Support\Facades\Route; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}" />
    <link rel="icon" href="{{ url('favicon.ico') }}">
    <link href="{{ asset('css/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/fontawesome-free-6.1.1-web/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.bdb0a3d3.css') }}" rel="preload" as="style">
    <link href="{{ asset('css/style.css?v='.Str::random(10)) }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/script.js?v='.Str::random(10)) }}"></script>
    @if (Route::current()->getName() == 'posts.show')
    @include('/posts/components/schema')
    @endif
</head>

<body>
    @if ($_SERVER['HTTP_HOST'] != 'localhost')
    <div id="fb-root"></div>
    <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v13.0" nonce="tdlOUxuG"></script> -->
    @endif
    @include('/templates/nav')
    <!-- Start sidenav + content -->
    <div class="container-fluid mx-0 bg-light overflow-hidden <?php if (Route::current()->getName() == 'home') { echo 'p-0'; } else { echo 'p-1';} ?>">
        <div id="content-sidebar-wrapper" class="row">
            <main class="<?php if (isset($hide_sidebar) && $hide_sidebar) { echo 'col-12'; } else { echo 'col-md-9'; } ?>">
                <div class="row <?php if (Route::current()->getName() !== 'home') { echo 'my-3'; } ?>">
                