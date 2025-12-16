<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Feed-Go</title>

    <link rel="icon" href="{{ asset('images/FeedGo.png') }}">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body class="flex flex-col min-h-screen">
    
    <main class="flex-grow">
        @yield('content')
    </main>
    
    @include('components.footer')

    @livewireScripts
</body>
</html>