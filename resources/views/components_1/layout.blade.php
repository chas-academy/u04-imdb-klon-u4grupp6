<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite('resources/css/app.css')
    </head>
    <body clas="h-screen">

<nav class="flex justify-between align-content-center bg-lime-950 h-20">
    <img src="https://d197nivf0nbma8.cloudfront.net/uploads/2014/09/Guy-David-expert-2021-scaled.jpeg">
<!--hamburger -->
    <div>
    <div class="flex flex-col"><button onclick="">
        <div class="bg-stone-950 w-10 h-2 rounded-3xl m-0.5"></div>
        <div class="bg-stone-950 w-10 h-2 rounded-3xl m-0.5"></div>
        <div class="bg-stone-950 w-10 h-2 rounded-3xl m-0.5"></div>
    </button></div>
        <ul>
            <li></li>
        </ul>
    </div>
    <div class="text-white bg-stone-400 w-20 h-14 text-center">
        <p><a href="/login">Log in</a></p>
    </div>
</nav>
    {{ $slot }}
    </body>
</html>