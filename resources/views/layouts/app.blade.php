<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title> {{ request()->is('/', 'home') ? 'Impact' : '' }} {{ request()->is('about') ? 'About' : '' }} {{ request()->is('service') ? 'Service' : '' }} {{ request()->is('portfolio') ? 'Portfolio' : '' }} {{ request()->is('blog') ? 'Blog' : '' }} {{ request()->is('templates') ? 'Templates' : '' }} {{ request()->is('contact') ? 'Contact' : '' }} Login </title>
    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div id="app">


       <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="img/svg/earth.svg"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav justify-content-end res">
                            <li class=" nav-item  {{ request()->is('/', 'home') ? 'active' : '' }} "><a class="nav-link" href=" {{ url('../home') }} ">Home</a></li>
                            <li class="nav-item  {{ request()->is('about') ? 'active' : '' }}"><a class="nav-link" href=" {{ url('../about') }} ">About</a></li>
                            <li class="nav-item  {{ request()->is('service') ? 'active' : '' }}"><a class="nav-link" href=" {{ url('../service') }} ">Services</a></li>
                            <li class="nav-item  {{ request()->is('portfolio') ? 'active' : '' }} "><a class="nav-link" href=" {{ url('../portfolio') }} ">Portfolio</a></li>
                            <li class="nav-item  {{ request()->is('portfolio') ? 'active' : '' }} "><a class="nav-link" href=" {{ url('../portfolio') }} ">Pakages</a></li>
                            <li class="nav-item  {{ request()->is('blog') ? 'active' : '' }}"><a class="nav-link" href=" {{ url('../blog') }} ">Blog</a></li>
                            <li class="nav-item  {{ request()->is('templates') ? 'active' : '' }}"><a class="nav-link" href=" {{ url('../templates') }} ">Templates</a></li>
                            <li class="nav-item {{ request()->is('contact') ? 'active' : '' }} "><a class="nav-link" href=" {{ url('../contact') }} ">Contact</a></li>

                            @guest

                            <li class="nav-item {{ request()->is('sites/*/edit') ? 'active' : '' }} "><a class="nav-link" href=" {{ route('login') }} "><button class="nav-click btn">Login</button></a></li>

                            @if (Route::has('register'))

                            <li class="nav-item "><a class="nav-link" href=" {{ route('register') }} "><button class="nav-clicki-r btn">Sign Up</button></a></li>

                            @endif

                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        


                            @endguest

                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </header>

<br>
<br>
<br>
<br>
<br>
<br>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
