<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">

    </head>
    <body>

        <div class="hero is-light is-bold is-fullheight">
            <div class="hero-head">
                <header class="nav">
                    @if (Route::has('login'))
                        <div class="nav-right">
                            @if (Auth::check())
                                <a href="{{ url('/home') }}" class="nav-item is-tab">Home</a>
                            @else
                                <a href="{{ url('/login') }}" class="nav-item is-tab">Login</a>
                                <a href="{{ url('/register') }}" class="nav-item is-tab">Register</a>
                            @endif
                        </div>
                    @endif
                </header>
            </div>
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title is-1">Laravel</h1>
                    <div class="columns">
                        <div class="column is-half is-offset-one-quarter">
                            <div class="level subtitle is-5">
                                <a href="https://laravel.com/docs" class="level-item">Documentation</a>
                                <a href="https://laracasts.com" class="level-item">Laracasts</a>
                                <a href="https://laravel-news.com" class="level-item">News</a>
                                <a href="https://forge.laravel.com" class="level-item">Forge</a>
                                <a href="https://github.com/laravel/laravel" class="level-item">GitHub</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </body>
    </html>
