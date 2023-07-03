@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/admin/dist/assets/css/login-style.css">
    <div class="container-login">

        <div class="card_login">
            <h2 class="h2_login">{{ __('Login') }}</h2>
            <form class="form_login" method="POST" action="{{ route('login') }}">
                @csrf
                <label for="username" class="label_login">Username</label>
                <input type="text" id="username" class="input_login @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="password" class="label_login">{{ __('Password') }}</label>
                <input id="password" type="password" class="input_login @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <button type="submit" class="button_login">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link forgot-login" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </form>

            <div class="switch">Don't have an account? <a href="{{ route('register') }}">Register here</a></div>
        </div>
    </div>
@endsection
