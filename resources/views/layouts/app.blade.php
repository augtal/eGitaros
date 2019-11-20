<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'eGitaros') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/custom.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>

<div id="body">
    <div id="header">
        <h3 id="slogan"><a href="/">eGitaros</a></h3>
    </div>
    <div id="content">
        <div class="navbar">
            <div class="dropdown">
                <button class="dropbtn" onclick="myDropDownFunction()">Gitaros
                    <i class="fa fa-caret-down"></i>
                </button>

                <div class="dropdown-content" id="myDropdown">
                    <a href="/guitar/1">Akustines</a>
                    <a href="/guitar/2">Elektrines</a>
                    <a href="/guitar/3">Bosines</a>
                </div>
            </div>

            <li style="float:right"><a href="/about">Apie mus</a></li>
            <li style="float:right"><a href="/contact">Kontaktai</a></li>
        </div>

        @yield('content')

    </div>
</div>

</body>
</html>
