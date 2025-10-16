@extends('layouts.app')

@section('content')
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <h1 class="auth-title">Join E-Shop</h1>
                <p class="auth-subtitle">Create your account to get started</p>
            </div>

            <div class="auth-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="auth-form-group">
                        <label for="name" class="auth-label">{{ __('Full Name') }}</label>
                        <input id="name" type="text" class="auth-input @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                            placeholder="Enter your full name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="auth-form-group">
                        <label for="email" class="auth-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="auth-input @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email"
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
                            name="password" required autocomplete="new-password" placeholder="Create a strong password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="auth-form-group">
                        <label for="password-confirm" class="auth-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="auth-input" name="password_confirmation"
                            required autocomplete="new-password" placeholder="Confirm your password">
                    </div>

                    <button type="submit" class="auth-btn">
                        {{ __('Create Account') }}
                    </button>

                    <div class="auth-divider">
                        <span>or</span>
                    </div>

                    <div class="auth-footer">
                        <p>Already have an account? <a href="{{ route('login') }}" class="auth-link">Sign in here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
