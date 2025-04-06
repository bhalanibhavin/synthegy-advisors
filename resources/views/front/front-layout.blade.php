<!DOCTYPE html>
<html lang="en-US" prefix="og: https://ogp.me/ns#">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')" />
        <meta name="keywords" content="@yield('keywords')" />      
        <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/x-icon" />
        @include('front.layout.css')
        @yield('pagelevelcss')
    </head>
    <body class="home page-template page-template-elementor_header_footer page page-id-12 elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-12">
        <div class="bodycontent ei">
            @include('front.layout.header')
            @yield('content')
            @include('front.layout.footer')
        </div>
    </body>
    @include('front.layout.js')
    @yield('pageleveljs')
</html>