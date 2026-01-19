<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Daily Report') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="min-h-screen w-full">

    <!-- LEFT 30% -->
    <div class="flex-[70%] flex items-center justify-center">
        <div class="w-64 h-44 border-2 border-black flex items-center justify-center">
            <img src="/images/aventus-bg.jpg" class="w-full h-full object-cover">
        </div>
    </div>

    <!-- RIGHT 70% -->
    <div class="flex-[30%] flex items-center justify-center">
        <div class="w-3/4 h-3/4 border-2 border-black flex flex-col items-center justify-center">

            <!-- REGISTER BUTTON -->
            <a href="{{ route('register') }}"
            class="font-"> Register
            </a>

            <!-- LOGIN LINK -->
            <a href="{{ route('login') }}" class="underline">
                Login
            </a>

        </div>
    </div>

</body>

</html>