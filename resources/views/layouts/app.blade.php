<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        <div class="hero is-light is-bold">
            <div class="hero-head">
                <header class="nav">
                    <div class="container">
                        <div class="nav-left">
                            <a href="{{ url('/') }}" class="nav-item">Laravel</a>
                        </div>
                        <div class="nav-right nav-menu">
                            @if (Auth::guest())
                                <a href="{{ url('/login') }}" class="nav-item is-tab">Login</a>
                                <a href="{{ url('/register') }}" class="nav-item is-tab">Register</a>
                            @else
                                <a href="{{ url('/home') }}" class="nav-item is-tab">{{ Auth::user()->name }}</a>
                                <span class="nav-item">
                                    <a href="{{ url('/logout') }}" class="button is-primary is-inverted is-oulined" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            Logout
                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                    </a>
                                </span>
                            @endif
                        </div>
                    </div>
                </header>
            </div>
        </div>
        
        <div class="section">
            @yield('content')
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bulma.js') }}"></script>
    </body>
    </html>
