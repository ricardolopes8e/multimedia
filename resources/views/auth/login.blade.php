@extends('layouts.app')

@section('content')

    <section class="section">
        <div class="container">

            <div class="column is-6 is-offset-3">


                    <p class="subtitle has-text-grey">Please login to proceed.</p>
                    <div class="box" style="background-color: #e6ac00;">
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
                            <button class="button is-block is-dark  is-3 is-fullwidth">   {{ __('Login') }}  </button>
                        </form>
                    </div>

            </div>
        </div>
    </section>





@endsection
