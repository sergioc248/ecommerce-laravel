@extends('layouts.app')

@section('content')
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <h1 class="auth-title">Reset Password</h1>
                <p class="auth-subtitle">Create your new password</p>
            </div>

            <div class="auth-body">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="auth-form-group">
                        <label for="email" class="auth-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="auth-input @error('email') is-invalid @enderror"
                            name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
                            placeholder="Your email address">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="auth-form-group">
                        <label for="password" class="auth-label">{{ __('New Password') }}</label>
                        <input id="password" type="password" class="auth-input @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password" placeholder="Create a new password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="auth-form-group">
                        <label for="password-confirm" class="auth-label">{{ __('Confirm New Password') }}</label>
                        <input id="password-confirm" type="password" class="auth-input" name="password_confirmation"
                            required autocomplete="new-password" placeholder="Confirm your new password">
                    </div>

                    <button type="submit" class="auth-btn">
                        {{ __('Reset Password') }}
                    </button>

                    <div class="auth-divider">
                        <span>or</span>
                    </div>

                    <div class="auth-footer">
                        <p>Remember your password? <a href="{{ route('login') }}" class="auth-link">Sign in here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
