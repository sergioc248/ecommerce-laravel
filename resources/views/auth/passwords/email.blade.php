@extends('layouts.app')

@section('content')
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <h1 class="auth-title">Reset Password</h1>
                <p class="auth-subtitle">Enter your email to receive a reset link</p>
            </div>

            <div class="auth-body">
                @if (session('status'))
                    <div
                        style="background: #d4edda; color: #155724; padding: 12px 16px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #c3e6cb; text-align: center;">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
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

                    <button type="submit" class="auth-btn">
                        {{ __('Send Password Reset Link') }}
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
