@extends('layouts.app')

@section('content')
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <h1 class="auth-title">Welcome Back</h1>
                <p class="auth-subtitle">Sign in to your E-Shop account</p>
            </div>

            <div class="auth-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="auth-form-group">
                        <label for="email" class="auth-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="auth-input @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Enter your email address">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="auth-form-group">
                        <label for="password" class="auth-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="auth-input @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password" placeholder="Enter your password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="auth-checkbox-group">
                        <input class="auth-checkbox" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="auth-checkbox-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <button type="submit" class="auth-btn">
                        {{ __('Sign In') }}
                    </button>

                    <div class="auth-divider">
                        <span>or</span>
                    </div>

                    <div class="text-center">
                        @if (Route::has('password.request'))
                            <a class="auth-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="auth-footer">
                        <p>Don't have an account? <a href="{{ route('register') }}" class="auth-link">Sign up here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
