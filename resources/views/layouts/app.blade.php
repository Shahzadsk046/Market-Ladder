<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'The Market Ladder') }} > @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch"
          href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito"
          rel="stylesheet">
    <link rel="preconnect"
          href="https://fonts.googleapis.com">
    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    {{-- Icons --}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css"
          integrity="sha512-KulI0psuJQK8UMpOeiMLDXJtGOZEBm8RZNTyBBHIWqoXoPMFcw+L5AEo0YMpsW8BfiuWrdD1rH6GWGgQBF59Lg=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer" />

    {{-- Style CSS --}}
    <link rel="stylesheet"
          href={{ asset('css/app.css') }}>

    {{-- Jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app"
         class="overflow-hidden">
        <div id="navbar-head"
             class="mb-5">
            <nav id="navbar_top"
                 class="navbar navbar-expand-sm navbar-light mb-5 bg-white"
                 style="transition: all 1s; margin-bottom:320px">
                <div class="container-fluid">
                    <a class="navbar-brand"
                       href="{{ url('/') }}"
                       style="transition: all 1s">
                        <img class="brand-logo"
                             src="{{ url('/images/logo.png') }}"
                             alt="The Market Ladder"
                             style="width: 250px; height: 96px; margin-left: 30px;">
                        {{-- {{ config('app.name', 'The Market Ladder') }} --}}
                    </a>
                    <button class="navbar-toggler"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse"
                         id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link @if (Route::currentRouteName() == 'home') active @endif"
                                   href="{{ route('home') }}">{{ __('HOME') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"
                                   class="nav-link {{ request()->is('swing-trading/*') ? 'active' : '' }}"
                                   href="#"
                                   role="button"
                                   data-bs-toggle="dropdown"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                   v-pre>
                                    {{ __('SWING TRADING FOR SUCCESS') }}
                                </a>

                                <div class="dropdown-menu bg-dark dropdown-menu-end"
                                     aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-white"
                                       href="{{ route('compounding-magic') }}">
                                        {{ __('THE COMPOUNDING MAGIC') }}
                                    </a>
                                    <a class="dropdown-item text-white"
                                       href="{{ route('what-are-etf') }}">
                                        {{ __("WHAT ARE ETF'S'") }}
                                    </a>
                                    <a class="dropdown-item text-white"
                                       href="{{ route('swing-trading-with-etf') }}">
                                        {{ __("SWING TRADING WITH ETF'S") }}
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"
                                   class="nav-link {{ request()->is('about/*') ? 'active' : '' }}"
                                   href="#"
                                   role="button"
                                   data-bs-toggle="dropdown"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                   v-pre>
                                    {{ __('ABOUT THE MARKET LADDER') }}
                                </a>

                                <div class="dropdown-menu bg-dark dropdown-menu-end"
                                     aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-white"
                                       href="{{ route('about') }}">
                                        {{ __('ABOUT THE MARKET LADDER') }}
                                    </a>
                                    <a class="dropdown-item text-white"
                                       href="{{ route('performance') }}">
                                        {{ __('PERFORMANCE') }}
                                    </a>
                                    <a class="dropdown-item text-white"
                                       href="{{ route('about-founder') }}">
                                        {{ __('ABOUT THE FOUNDER') }}
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"
                                   class="nav-link {{ request()->is('fyi/*') ? 'active' : '' }}"
                                   href="#"
                                   role="button"
                                   data-bs-toggle="dropdown"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                   v-pre>
                                    {{ __('FYI') }}
                                </a>

                                <div class="dropdown-menu bg-dark dropdown-menu-end"
                                     aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-white"
                                       href="{{ route('faq') }}">
                                        {{ __('FAQ') }}
                                    </a>
                                    <a class="dropdown-item text-white"
                                       href="{{ route('terms') }}">
                                        {{ __('TERMS OF SERVICE') }}
                                    </a>
                                    <a class="dropdown-item text-white"
                                       href="{{ route('privacy-policy') }}">
                                        {{ __('PRIVACY POLICY') }}
                                    </a>
                                    <a class="dropdown-item text-white"
                                       href="{{ route('contact') }}">
                                        {{ __('CONTACT') }}
                                    </a>
                                    <a class="dropdown-item text-white"
                                       href="{{ route('disclaimers') }}">
                                        {{ __('DISCLOSURES AND DISCLAIMERS') }}
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"
                                   class="nav-link {{ request()->is('member/*') ? 'active' : '' }}"
                                   href="#"
                                   role="button"
                                   data-bs-toggle="dropdown"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                   v-pre>
                                    {{ __('MEMBERS ONLY') }}
                                </a>

                                <div class="dropdown-menu bg-dark dropdown-menu-end"
                                     aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-white"
                                       href="{{ route('post') }}">
                                        {{ __("THE LADDER'S POST") }}
                                    </a>
                                    <a class="dropdown-item text-white"
                                       href="{{ route('taking-trades') }}">
                                        {{ __('TAKING THE TRADES') }}
                                    </a>
                                    <a class="dropdown-item text-white"
                                       href="{{ route('current-stock') }}">
                                        {{ __('CURRENT STOCK TRADES') }}
                                    </a>
                                    <a class="dropdown-item text-white"
                                       href="{{ route('current-etf') }}">
                                        {{ __('CURRENT ETF TRADES (FOR PLUS MEMBERS)') }}
                                    </a>
                                </div>
                            </li>
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link @if (Route::currentRouteName() == 'login') active @endif"
                                           href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('join-now'))
                                    <li class="nav-item">
                                        <a class="nav-link @if (Route::currentRouteName() == 'join-now') active @endif"
                                           href="{{ route('join-now') }}">{{ __('JOIN NOW') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="{{ route('profile') }}">| &nbsp;{{ __('MY ACCOUNT') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('LOGOUT') }}
                                    </a>
                                    <form id="logout-form"
                                          action="{{ route('logout') }}"
                                          method="POST"
                                          class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <main>
            @yield('content')
        </main>

        <footer>
            <section>
                <div class="footer m-0">
                    <div class="m-0 pt-1">
                        <div class="text-sm pt-2 pb-2">
                            <div class="row m-0 p-3">
                                <div class="col-md-3 col-sm-3 mb-3 p-0 pl-0 float-end">
                                    <img class="img-fluid"
                                         src="{{ url('/images/white_logo.png') }}"
                                         alt="The Market Ladder">
                                </div>
                                <hr class="clearfix d-sm-none pb-3">
                                <div class="col-sm mb-sm-0 mb-1">
                                    <p>IT'S NEVER TOO LATE</p>
                                    <ul class="list-unstyled">
                                        <p>Sign up to the market ladder today, and start your journey to stock market
                                            success!
                                        </p>
                                    </ul>
                                </div>
                                <div class="col-sm mb-sm-0 mb-1">
                                    <p>CONTACT</p>
                                    <ul class="list-unstyled">
                                        <p>Send your questions or comments to info@themarketladder.com</p>
                                    </ul>
                                </div>
                                <div class="col-sm mb-sm-0 mb-1">
                                    <p>NOTICE</p>
                                    <ul class="list-unstyled">
                                        <p>Stock Market Trades and Commentary shown by The Market Ladder, LLC, are for
                                            informational purposes only, and should not be considered Investment advice.
                                        </p>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="copyright pt-2"
                         style="background-color: rgb(48, 44, 44);">
                        <div class="row m-0 p-2">
                            <div class="col-sm-6 ps-4">
                                <div>
                                    <a href="/"
                                       target="_self">Home</a>
                                    |
                                    <a href="/fyi/terms"
                                       target="_self">Terms</a>
                                    |
                                    <a href="/fyi/disclaimers"
                                       target="_self">Disclosures</a>
                                    |
                                    <a href="/fyi/privacy-policy"
                                       target="_self">Privacy Policy</a>
                                </div>
                            </div>
                            <div class="col-sm-6 pe-4">
                                <div>
                                    <a>Website Design By Shehzad Khan</a>
                                    |
                                    <a style="cursor: text">&copy; 2023 All Right Reserved</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
    </div>
</body>

</html>
