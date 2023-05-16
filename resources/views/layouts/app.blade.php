<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
     <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/homepage') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <div class="col-6" style="; width: 556px;">
                                <div class="input-group mb-3">
                                    <a href="categories">
                                        <button class="btn btn-outline-secondary" style="background-color: black";
                                            type="button" id="button-addon1" ><i class="fa fa-search"
                                                style="color:white;margin: 7px;"></i></button></a>
                                    <input type="text" class="form-control" placeholder=" search..."
                                        aria-label="Example text with button addon" aria-describedby="button-addon1">
                                </div>
                            </div>
                            <div class="nav-icons">
                            
                                <a href="cart"><i class="fa-solid fa-cart-shopping fa-xl"></i></a>
                                <a href="wishlist"><i class="fa-solid fa-heart fa-xl"></i></a>
                                <a href="account"><i class="fa-solid fa-user fa-xl"></i></a>
                                @if (Auth::user()->is_admin )
                                <a href="product"><i class="fa-solid fa-plus fa-2xl" style="color: #ff0000;"></i></a>
                              @endif 
                            </div>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="pt-4">
            @yield('content')
        </main>
    </div>
</body>

</html>

<style>
    i {
        color: #868081;
        margin-left: 15px;
        margin-top: 20px;

    }

    i:hover {

        color: #9494e5;
    }

    .navbar {
        background-color: black;
        height: 72px;
    }

    .nav-link {
        color: azure;

    }

    .nav-link:hover {
        color: #9494e5;
    }

    .navbar-brand {
        color: azure;
    }

    .navbar-brand:hover {
        color: #9494e5;
    }

    .navbar-nav {
        margin-left: 200px;
        justify-content: space-between;
        align-content: center;
        align-items: baseline;
        margin-top: 20px;
    }

    .nav-icons {
        margin-left: 200px;
        width: 304px;
        text-align: right;
    }
</style>
