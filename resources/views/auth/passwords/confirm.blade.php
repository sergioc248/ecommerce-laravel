@extends('layouts.app')

@section('content')
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <h1 class="auth-title">Confirm Password</h1>
                <p class="auth-subtitle">Please confirm your password to continue</p>
            </div>

            <div class="auth-body">
                <p style="color: #718096; margin-bottom: 24px; text-align: center;">
                    {{ __('Please confirm your password before continuing.') }}
                </p>

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <div class="auth-form-group">
                        <label for="password" class="auth-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="auth-input @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password"
                            placeholder="Enter your current password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="auth-btn">
                        {{ __('Confirm Password') }}
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
                </form>
            </div>
        </div>
    </div>
@endsection
