@extends('layout.landingPage.app')
@section('title', 'Login')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 pt-5 mb-5">
                <div class="card bg-dark">
                    <div class="card-header text-light">{{ __('Login') }}</div>
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/landingPage/img/logo.png') }}" alt="" width="150px"
                            class="pt-2 mb-5">
                        <form method="POST" action="{{ route('login') }}" class="text-light">
                            @csrf
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-danger">
                                        {{ __('Login') }}
                                    </button>

                                </div>
                                <div class="col-md-12">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link text-danger" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
