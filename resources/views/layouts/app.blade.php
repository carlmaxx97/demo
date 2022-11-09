<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @production
        @php
            $manifest = json_decode(file_get_contents(asset('build/manifest.json')), true);
        @endphp
        <link rel="stylesheet" href="{{ asset('build/'.$manifest['resources/sass/app.scss']['file']) }}">
        <script type="module" src="{{ asset('build/'.$manifest['resources/js/app.js']['file']) }}"></script>
    @else
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @endproduction
</head>
<body>
    <div id="app">
        @include('layouts.navigation')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
