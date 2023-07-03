@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/admin/dist/assets/css/login-style.css">
    <div class="container-login">

        <div class="card_login">
            <h2 class="h2_login">{{ __('Register') }}</h2>
            <form class="form_login" method="POST" action="{{ route('register') }}">
                @csrf
                <label for="username" class="label_login">{{ __('Username') }}</label>
                {{-- <input type="text" id="name" placeholder="Enter your full name"> --}}
                <input id="username" type="text" class="input_login @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="email" class="label_login">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="input_login @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">
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

                <label for="password-confirm" class="label_login">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="input_login" name="password_confirmation" required
                    autocomplete="new-password">

                <button type="submit" class="button_login">
                    {{ __('Register') }}
                </button>
            </form>
            <div class="switch">Already have an account? <a href="{{ route('login') }}">{{ __('Login here') }}</a></div>
        </div>

    </div>
@endsection
