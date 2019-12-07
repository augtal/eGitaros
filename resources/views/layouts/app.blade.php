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

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="body">
        <div id="header">
            <div class="headerLeft">
                <h3 id="slogan"><a href="/">eGitaros</a></h3>
            </div>

            <div class="headerRight">
            @guest
                <a class="button" href="{{ route('login') }}">Prisijungti</a>

                @if (Route::has('register'))
                    <a class="button" href="{{ route('register') }}">Registruotis</a>
                @endif

            @else
                <a class="userInfo">Vartotojas: {{ Auth::user()->name }}</a>

                <a class="button" href="#">Mano Uzsakymai</a>

                <a class="button" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Atsijungti</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                </form>
            @endguest
            </div>
        </div>
        <div id="content">
                <div class="navbar">
                    <div class="navbar-left">
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
                    </div>

                    <div class="navbar-right">
                            <a href="/about">Apie mus</a>
                            <a href="/contact">Kontaktai</a>

                            <div class="cartdropdown">
                                @if(session('cart'))
                            <button class="cartdropbtn"><i class="fa fa-shopping-cart"></i> Vezimelis <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></button>
                                <div class="cartdropdown-content">
                                    <a href="/rfc/0"><i class="fa fa-trash-o"></i>Isvalyti viska</a>

                                    <table style="width:100%">
                                        <tr>
                                            <th> </th>
                                            <th>Pavadinimas</th>
                                            <th>Kaina</th>
                                            <th>Kiekis</th>
                                            <th> </th>
                                        </tr>
                                    @foreach(session('cart')->items as $id => $preke)
                                        <tr>
                                            <th><img src="{{ asset('storage/images/'.$preke['pav'].'.jpg') }}" alt="{{$preke['pav']}}.jpg" height="47" width="47"></th>
                                            <th>{{$preke['pav']}}</th>
                                            <th>{{$preke['price'] }}</th>
                                            <th>{{$preke['qty'] }}</th>
                                            <th><a href="/rfc/{{$id}}"><i class="fa fa-trash-o"></i></a></th>
                                        </tr>
                                    @endforeach
                                    </table>

                                    <h4>Bendra suma: {{ Session::get('cart')->totalPrice }}</h4>
                                    <a href="#">Patvirtinti</a>
                                </div>

                                @else
                                <button class="cartdropbtn"><i class="fa fa-shopping-cart"></i> Vezimelis </span></button>
                                @endif
                            </div>
                    </div>
                </div>

                @yield('content')

            </div>
    </div>
</body>
</html>
