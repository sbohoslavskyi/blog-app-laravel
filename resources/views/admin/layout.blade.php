<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        <title>@yield('title') | {{ config('app.name') }}</title>
    </head>
    <body>
        @include('admin.layout.header')
        <main class="container">
            @yield('content')
        </main>
        <script src="{{ asset('js/admin.js') }}"></script>
    </body>
</html>
