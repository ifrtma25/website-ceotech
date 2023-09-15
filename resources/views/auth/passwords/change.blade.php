@extends('layout.adminPage.app')
@section('title', 'Ubah Password')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Ganti Kata Sandi') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <div class="form-group">
                                <label for="current_password">{{ __('Kata Sandi Saat Ini') }}</label>
                                <input type="password" name="current_password" id="current_password" class="form-control"
                                    required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Kata Sandi Baru') }}</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">{{ __('Konfirmasi Kata Sandi Baru') }}</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control" required>
                            </div>

                            @if ($errors->has('current_password'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('current_password') }}</strong>
                                </span>
                            @endif

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan Perubahan') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
