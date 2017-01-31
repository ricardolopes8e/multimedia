@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column is-4 is-offset-4">
            <h1 class="title">Reset Password</h1>

            <div class="box">

                @if (session('status'))
                    <div class="message is-success">
                        <div class="message-body">
                            {{ session('status') }}
                        </div>
                    </div>
                @endif

                <form action="{{ url('/password/reset') }}" method="POST">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

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
                        <button type="submit" name="submit" class="button is-primary">Reset Password</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
