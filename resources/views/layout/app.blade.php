<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>{{ $seo->title }}</title>
        <meta name="description" content="{{$seo->description}}"/>
        <meta name="keywords" content="{{$seo->keywords}}"/>
        <meta name="og:site_name" content="{{$seo->ogSiteName}}"/>
        <meta name="og:url" content="{{$seo->ogUrl}}"/>
        <meta name="og:title" content="{{$seo->ogTitle}}"/>
        <meta name="og:image" content="{{$seo->ogImage}}"/>
        <meta name="og:description" content="{{$seo->ogDescription}}"/>


        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="{{ asset('website') }}/css/bootstrap.css" rel="stylesheet" />
        <link href="{{ asset('website') }}/css/style.css" rel="stylesheet" />
        <script src="{{ asset('website') }}/js/axios.js"></script>
        
    </head>

    <body class="d-flex flex-column h-100">
        
        <main class="flex-shrink-0">
            <!-- Navigation-->
           @include('components.nav')
            @include('components.loader')

            <div class="" id="content-div">
             @yield('content')
            </div>


            @include('components.footer')







            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
