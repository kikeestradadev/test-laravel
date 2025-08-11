<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Sportbook">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <title>Ossian -  @yield('title-page')</title>
        
        <!-- Vite Assets -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body class="@yield('body_class') flex flex-col min-h-screen">
        <header class="main-header bg-[steelblue]">
            <h1 class="text-white text-center text-2xl">This is the Laravel Main Header</h1>
            @yield('header')
        </header>
        <main class="main-container flex-grow flex flex-col justify-center items-center">
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
