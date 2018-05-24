@extends('layouts.app')

@section('content')


        <div class="container" style="padding-top: 140px;">

            <div class="column is-4 is-offset-4">



                    <div class="box" >
                        <form method="POST" action="{{ route('login') }}">
                              {{ csrf_field() }}
                            <div class="field">
                                <div class="control">
                                    <input id="email" type="email" placeholder="Your Email"  class="input is-large form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="tag is-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input id="password" type="password" placeholder="Your Password" class="input is-large form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="tag is-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="field">
                                <label class="checkbox">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                </label>
                            </div>
                            <button type="submit" name="submit" class="button is-primary">Register</button>
                        </form>
                    </div>

            </div>
        </div>





@endsection
