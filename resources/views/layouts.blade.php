<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        @livewireStyles
    </head>
    <body >
        <nav class="navbar sticky-top navbar-dark bg-dark">
            <a class="navbar-brand" href="/">toDoList</a>
          </nav>
        @yield('content')
        @livewireScripts
    </body>
</html>
