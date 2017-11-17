<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="bg-grey-lightest h-screen">
    <div id="app">
        @include('layouts.navbar')

        @if (auth()->check() && ! isset($manifest))
            <div class="container mx-auto mb-8">
                <div class="flex -mx-4">
                    <div class="md:w-3/4 mx-4">
                       @yield('content')
                    </div>
                    <div class="md:w-1/4 mx-4">
                        <a href="{{ route('home') }}" class="no-underline block bg-indigo px-4 py-3 text-center rounded text-white hover:bg-indigo-dark shadow-md">Inicio</a>
                        @include('layouts.topics')
                    </div>
                </div>
            </div>
        @else
            @yield('content')
        @endif
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
