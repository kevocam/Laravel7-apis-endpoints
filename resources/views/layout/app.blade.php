<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app_less.css') }}">
        <!-- Styles -->
       
    </head>
    <body>
    <header class="header">
    <div class="header__menu">
        <ul>
            <li> <a href="/">

                <img src="./img/mandu.png" alt="">
            </a>       
</li>
            <li>Dashboard</li>
            <li>Organización</li>
            <li>Modelos</li>
            <li>Seguimiento</li>
        </ul>
    </div>
    <div class="header__icons">
    
    </div>

    </header>
    
    <h1 class="title">@yield('title')</h1>

    <div class="content">
        @yield('contenido')

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</hmtl>


