<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md" style="background-color: #1B488B;">
            <div class="container-fluid">
                <a class="navbar-brand ml-auto" href="{{ url('/') }}">
                    <img src="assets/logo.png" alt="CleanWash" height="64px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @auth
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a href="/requestform" class="nav-link text-uppercase gap-10 fw-bold fs-4 text-white">Appointment Request</a></li>
                        <div class="vr"></div>
                        <li class="nav-item"><a href="/admindb" class="nav-link text-uppercase gap-10 fw-bold fs-4 text-white">My Appointment</a></li>
                    </ul>
                    @endauth

                    <!-- Right Side Of Navbar -->
                    
                    <ul class="navbar-nav ms-auto">
                        <div class="d-flex align-items-center gap-10">
                            <img src="assets/icon.png" alt="">
                        </div>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase gap-10 fw-bold fs-4 text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                                <div class="vr"></div>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase gap-10 fw-bold fs-4 text-white" href="{{ route('register') }}">{{ __('signup') }}</a>
                                </li>
                            @endif
                        @else
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-uppercase gap-10 fw-bold fs-4 text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Welcome, {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
