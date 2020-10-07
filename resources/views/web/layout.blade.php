<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @yield('meta')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>@yield('title') | Elegeia</title>
    </head>
    <body>
        @include('web.layout.header')
        <main>
            @yield('content')
            @include('web.layout.footer')
        </main>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
