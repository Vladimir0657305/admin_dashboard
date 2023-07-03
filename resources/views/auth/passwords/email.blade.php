@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/admin/dist/assets/css/login-style.css">
    <div class="container-login">
        <div class="card_login">
            <h2 class="h2_login">{{ __('Reset Password') }}</h2>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{-- <form method="POST" action="{{ route('password.email') }}" class="form_login"> --}}
            <form method="POST" action="#" class="form_login">
                @csrf
                <label for="email" class="label_login">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="input_login @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <button type="submit" class="button_login">
                    {{ __('Send Password Reset Link') }}
                </button>
            </form>
        </div>
    </div>
@endsection
