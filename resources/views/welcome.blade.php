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
<body class="bg-grey-lightest font-sans font-normal">
    <div class="flex flex-col">
        @if(Route::has('login'))
            <div class="absolute pin-t pin-r mt-4 mr-4">
                @auth
                    <a href="{{ route('author') }}" class="no-underline text-sm font-normal text-brand-dark uppercase">Iniciar <i class="ml-2 fa fa-arrow-right"></i></a>
                @else
                    <a href="{{ route('login') }}" class="no-underline text-sm font-normal text-brand-dark uppercase pr-6">Login</a>
                    <a href="{{ route('register') }}" class="no-underline inline-block text-sm font-bold bg-indigo text-white px-4 py-3 rounded-sm hover:bg-indigo-dark uppercase">Register</a>
                @endauth
            </div>
        @endif

        <div class="min-h-screen flex items-center justify-center">
            <div class="flex flex-col justify-around h-full">
                <div>
                    <h1 class="text-grey-darker text-center font-hairline tracking-wide text-7xl mb-6">
                        {{ config('app.name', 'Laravel') }}
                    </h1>
                    <h2 class="text-grey-darker text-center font-hairline tracking-wide text-3xl mb-6">Erik Vanderlei Fernandes</h2>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
