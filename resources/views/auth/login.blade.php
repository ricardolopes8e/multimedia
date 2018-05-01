@extends('layouts.app')

@section('content')
    <section class="hero is-light is-fullheight">
        <div class="hero-body" style="  flex-grow: 0;">
        </div>>
    </section>
<div class="container">
    <div class="columns">
        <div class="column is-4 is-offset-4">
            <h1 class="title">Login</h1>

            <div class="box">
                <form action="{{ url('/login') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="control">
                        <div class="label">
                            <label class="label" for="email">E-Mail Address</label>
                        </div>
                        <div class="control{{ $errors->has('email') ? ' has-icon has-icon-right' : '' }}">
                            <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" id="email" type="text" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="icon is-small">
                                    <i class="fa fa-warning"></i>
                                  </span>
                                  <span class="help is-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="control">
                        <div class="label" for="password">
                            <label for="password" class="label">Password</label>
                        </div>
                        <div class="control{{ $errors->has('password') ? ' has-icon has-icon-right' : '' }}">
                            <input type="password" name="password" id="password" class="input{{ $errors->has('password') ? ' is-danger' : '' }}" required>
                            @if ($errors->has('password'))
                                <span class="icon is-small">
                                    <i class="fa fa-warning"></i>
                                  </span>
                                  <span class="help is-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="control">
                        <label class="checkbox" for="remember">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>

                    <div class="control is-grouped">
                        <div class="control">
                            <button type="submit" class="button is-primary">Login</button>
                        </div>
                        <div class="control">
                            <a href="{{ url('/password/reset') }}" class="button is-link">Forgot Your Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
