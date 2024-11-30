<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans w-screen h-screen myBg">
        <div class="absolute top-0 left-0 right-0">
            <nav class="flex text-white items-center justify-between px-10 ">
            <div class="w-40 ">
               <img src="/storage/images/logo.png"  />
            </div>

            <div class="space-x-4">
               <a href="/login">Login</a>
               <a href="/register">Register</a>
            </div>

            <div class="space-x-4 ">
               <a href="/">Home</a>
               <a href="">About</a>
               <a href="">Contact</a>
            </div>
        </nav>
        </div>
       {{$slot}}
    </body>
</html>
