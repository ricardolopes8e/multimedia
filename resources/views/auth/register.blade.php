@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column is-4 is-offset-4">
            <h1 class="title">Register</h1>

            <div class="box">
                <form role="form" action="{{ url('/register') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="control">
                        <div class="control">
                            <label for="name" class="label">Name</label>
                        </div>
                        <div class="control{{ $errors->has('name') ? ' has-icon has-icon-right' : '' }}">
                            <input class="input{{ $errors->has('name') ? ' is-danger' : '' }}" name="name" id="name" type="text" required>
                            @if ($errors->has('name'))
                                <span class="icon is-small">
                                    <i class="fa fa-warning"></i>
                                  </span>
                                  <span class="help is-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="control">
                        <div class="control">
                            <label for="email" class="label">E-Mail Address</label>
                        </div>
                        <div class="control{{ $errors->has('email') ? ' has-icon has-icon-right' : '' }}">
                            <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" id="email" type="text" required>
                            @if ($errors->has('email'))
                                <span class="icon is-small">
                                    <i class="fa fa-warning"></i>
                                  </span>
                                  <span class="help is-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="control">
                        <div for="password" class="control">
                            <label for="password" class="label">Password</label>
                        </div>
                        <div class="control{{ $errors->has('password') ? ' has-icon has-icon-right' : '' }}">
                            <input class="input{{ $errors->has('password') ? ' is-danger' : '' }}" type="password" name="password" id="password" required>
                            @if ($errors->has('password'))
                                <span class="icon is-small">
                                    <i class="fa fa-warning"></i>
                                  </span>
                                  <span class="help is-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="control">
                        <div for="password-confirm" class="control">
                            <label for="password_confirmation" class="label">Confirm Password</label>
                        </div>
                        <div class="control">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="input" required>
                        </div>
                    </div>

                    <div class="control ">
                        <button type="submit" name="submit" class="button is-primary">Register</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
