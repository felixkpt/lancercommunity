<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Fiverr Review - {{ \Site::name() }}</title>
    <link rel="icon" href="{{ url('') }}favicon.png">
    <link href="{{ asset('') }}css/style.css" rel="stylesheet">
    <link href="{{ asset('') }}css/themify-icons/themify-icons.css" rel="stylesheet">
    <link href="{{ asset('') }}css/app.bdb0a3d3.css" rel="preload" as="style">
    <link href="{{ asset('') }}css/chunk-vendors.f8cd87c4.css" rel="preload" as="style">
    <link href="{{ asset('') }}css/chunk-vendors.f8cd87c4.css" rel="stylesheet">
    <link href="{{ asset('') }}css/app.bdb0a3d3.css" rel="stylesheet">
    <script src="{{ asset('') }}js/bootstrap.min.js"></script>
</head>
<body class="blue-skin" id="">
    @include('/templates/nav')
    <div class="clearfix"></div>
    <!-- Start sidenav + content -->
    <div class="container-fluid p-0 bg-light">
        <div class="container-fluid">
            <div class="row">
            @if (isset($hide_sidebar) && $hide_sidebar)
                <main class="col-md-12 p-1" style="overflow-x:hidden">
                    <div class="row">
                @else 
                <main class="col-md-9" style="overflow-x:hidden">
                    <div class="row">
                        <div class="col">
                            <div class="row justify-content-center p-1 p-md-3">
                @endif
                    @if (!isset($hide_notification) || !$hide_notification)
                    @include('/components/notification')
                    @endif
