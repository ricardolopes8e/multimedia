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
    <link rel="stylesheet" href="{{ asset('bulma2.css') }}">
    <link href="{{ asset('css/bulmacustom.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">


<body>


<!-- page header (title, etc) -->
<div class="main-header">
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <div class="has-text-centered">
                    <!-- header && subheader -->
                    <h1 class="title is-1 is-spaced">E-Stuff</h1>
                    <h4 class="subtitle is-4">Follow us on facebook</h4>
                    <!-- end of header && subheader -->

                    <!-- header nav content -->
                    <div class="nav-center">
                        <a class="nav-item" href="">
		  <span class="icon">
		    <i class="fa fa-facebook"></i>
		  </span>
                        </a>
                        <a class="nav-item" href="">

                        </a>
                    </div>
                    <!-- end of header nav content -->
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end page header -->

<div class="section is-light is-bold">

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
                                    <a href="{{ url('/logout') }}" class="button is-primary is-inverted is-oulined"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            Logout
                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                                  style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                    </a>
                                </span>
                @endif
            </div>
        </div>
    </header>

</div>

<div class="section">
    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bulma.js') }}"></script>
</body>
</html>
