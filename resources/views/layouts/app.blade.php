<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'The Market Ladder') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" integrity="sha512-KulI0psuJQK8UMpOeiMLDXJtGOZEBm8RZNTyBBHIWqoXoPMFcw+L5AEo0YMpsW8BfiuWrdD1rH6GWGgQBF59Lg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .navbar-nav {
            align-items: flex-end;
            padding-left: 10% !important;
        }

        .navbar .container {
            /*overwrite bootstrap style*/
            width: 100% !important;
            margin: 0;
        }

        .active {
            color: green !important;
            border-bottom: 2px solid green !important;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('/images/logo.png') }}" alt="The Market Ladder">
                    {{-- {{ config('app.name', 'The Market Ladder') }} --}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        {{-- @guest
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
                        @else --}}
                        <li class="nav-item">
                            <a class="nav-link @if (Route::currentRouteName() == 'home') active @endif"
                                href="{{ route('home') }}">{{ __('HOME') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('SWING TRADING FOR SUCCESS') }}
                            </a>

                            <div class="dropdown-menu bg-dark dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-white" href="{{ route('compounding-magic') }}">
                                    {{ __('THE COMPOUNDING MAGIC') }}
                                </a>
                                <a class="dropdown-item text-white" href="{{ route('swing-trading-with-stocks') }}">
                                    {{ __('SWING TRADING WITH STOCKS') }}
                                </a>
                                <a class="dropdown-item text-white" href="{{ route('swing-trading-with-etf') }}">
                                    {{ __("SWING TRADING WITH ETF'S") }}
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('ABOUT THE MARKET LADDER') }}
                            </a>

                            <div class="dropdown-menu bg-dark dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-white" href="{{ route('about') }}">
                                    {{ __('ABOUT THE MARKET LADDER') }}
                                </a>
                                <a class="dropdown-item text-white" href="{{ route('performance') }}">
                                    {{ __('PERFORMANCE') }}
                                </a>
                                <a class="dropdown-item text-white" href="{{ route('about-founder') }}">
                                    {{ __('ABOUT THE FOUNDER') }}
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('FYI') }}
                            </a>

                            <div class="dropdown-menu bg-dark dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-white" href="{{ route('faq') }}">
                                    {{ __('FAQ') }}
                                </a>
                                <a class="dropdown-item text-white" href="{{ route('terms') }}">
                                    {{ __('TERMS OF SERVICE') }}
                                </a>
                                <a class="dropdown-item text-white" href="{{ route('privacy-policy') }}">
                                    {{ __('PRIVACY POLICY') }}
                                </a>
                                <a class="dropdown-item text-white" href="{{ route('contact') }}">
                                    {{ __('CONTACT') }}
                                </a>
                                <a class="dropdown-item text-white" href="{{ route('disclaimers') }}">
                                    {{ __('DISCLOSURES AND DISCLAIMERS') }}
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('MEMBERS ONLY') }}
                            </a>

                            <div class="dropdown-menu bg-dark dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-white" href="{{ route('post') }}">
                                    {{ __("THE LADDER'S POST") }}
                                </a>
                                <a class="dropdown-item text-white" href="{{ route('taking-trades') }}">
                                    {{ __('TAKING THE TRADES') }}
                                </a>
                                <a class="dropdown-item text-white" href="{{ route('current-stock') }}">
                                    {{ __('CURRENT STOCK TRADES') }}
                                </a>
                                <a class="dropdown-item text-white" href="{{ route('current-etf') }}">
                                    {{ __('CURRENT ETF TRADES (FOR PLUS MEMBERS)') }}
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('join-now') }}">{{ __('JOIN NOW') }}</a>
                        </li>
                        {{-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu bg-dark dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-white" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest --}}
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer class="py-4">
            <div class="container-fluid">
                <div class="row pt-5 bg-dark text-white">
                    <div class="col-md-3 col-sm-6">
                        <img src="{{ url('/images/logo.png') }}" alt="The Market Ladder">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h5>IT'S NEVER TOO LATE</h5>
                        <p>Sign up to the market ladder today, and start your journey to stock market success!</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h5>CONTACT</h5>
                        <p>Send your questions or comments to info@themarketladder.com</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h5>NOTICE</h5>
                        <p>Stock Market Trades and Commentary shown by The Market Ladder, LLC, are for informational
                            purposes only, and should not be considered Investment advice.</p>
                    </div>
                </div>
                <div class="row pt-5 text-white justify-content-between bg-black opacity-75">
                    <ul class="col-6 d-flex list-inline">
                        <li><a href="/" class="navbar-brand"> Home </a></li> &nbsp;|&nbsp;
                        <li><a href="/terms" class="navbar-brand"> Terms </a></li> &nbsp;|&nbsp;
                        <li><a href="/disclosures" class="navbar-brand"> Disclosures </a></li> &nbsp;|&nbsp;
                        <li><a href="/privacy-policy" class="navbar-brand"> Privacy Policy </a></li>
                    </ul>
                    <ul class="col-6 d-flex justify-content-end list-inline">
                        <li>Website Design By Shehzad Khan</li> &nbsp;|&nbsp;
                        <li>&copy; 2023 All Right Reserved</li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
