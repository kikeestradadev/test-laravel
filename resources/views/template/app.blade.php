<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="@yield('meta-description', 'Sportbook - Your sports booking platform')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="@yield('meta-robots', 'index, follow')">
        <meta name="keywords" content="@yield('meta-keywords', 'sports, booking, sportbook, sports reservation')">

        <!-- Open Graph Meta Tags --><!-- Open Graph Meta Tags -->
        <meta property="og:title" content="@yield('og-title', 'Ossian Sportbook')">
        <meta property="og:description" content="@yield('meta-description', 'Sportbook - Your sports booking platform')">
        <meta property="og:type" content="@yield('og-type', 'website')">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="@yield('og-image', asset('images/og-default.jpg'))">
        <meta property="og:site_name" content="Ossian">

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="@yield('twitter-card', 'summary_large_image')">
        <meta name="twitter:title" content="@yield('og-title', 'Ossian Sportbook')">
        <meta name="twitter:description" content="@yield('meta-description', 'Sportbook - Your sports booking platform')">
        <meta name="twitter:image" content="@yield('twitter-image', asset('images/twitter-default.jpg'))">
        <meta name="twitter:site" content="@yield('twitter-site', '@ossian')">

        <!-- Additional Meta Tags -->
        @yield('additional-meta')
        <title>Ossian -  @yield('title-page')</title>

        <!-- Vite Assets -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="@yield('body_class') flex flex-col min-h-screen">
        <header class="main-header bg-[steelblue]">
            <h1 class="text-white text-center text-2xl">This is the Laravel Main Header</h1>
            @yield('header')
        </header>
        <main class="flex-grow flex flex-col">
            <h1 class="text-center text-2xl">This is the Laravel Main Container</h1>
            @yield('content')

        </main>
        <footer class="main-footer bg-[steelblue]">
        <h1 class="text-white text-center text-2xl">This is the Laravel Main Footer</h1>
            @yield('footer')
        </footer>

        @yield('js-scripts')
    </body>
</html>
