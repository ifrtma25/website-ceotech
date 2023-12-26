@extends('layout.landingPage.app')
@section('title', 'Pendaftaran')
@section('content')
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none
        }
    </style>
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i>Pendaftaran</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pt-5 mb-5">
                <div class="card bg-dark">
                    <div class="card-header text-light">{{ __('Open Recruitment') }}</div>
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/landingPage/img/logo.png') }}" alt="" width="150px"
                            class="pt-2 mb-5">
                        <form method="POST" action="{{ route('create.pendaftaran') }}" class="text-light text-left"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="nama"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Lengkap') }}</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text"
                                        class="form-control @error('nama') is-invalid @enderror" name="nama"
                                        value="{{ old('nama') }}" required autocomplete="nama" autofocus>
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="npm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('NPM') }}</label>
                                <div class="col-md-6">
                                    <input id="npm" type="text"
                                        class="form-control @error('npm') is-invalid @enderror" name="npm"
                                        value="{{ old('npm') }}" required autocomplete="npm">
                                    @error('npm')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jurusan"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Jurusan') }}</label>
                                <div class="col-md-6">
                                    <input id="jurusan" type="text"
                                        class="form-control @error('jurusan') is-invalid @enderror" name="jurusan"
                                        value="{{ old('jurusan') }}" required autocomplete="jurusan">
                                    @error('jurusan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="angkatan"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Angkatan') }}</label>
                                <div class="col-md-6">
                                    <input id="angkatan" type="text"
                                        class="form-control @error('angkatan') is-invalid @enderror" name="angkatan"
                                        value="{{ old('angkatan') }}" required autocomplete="angkatan">
                                    @error('angkatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="minat_bakat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Minat Bakat') }}</label>
                                <div class="col-md-6">
                                    <textarea class="form-control @error('minat_bakat') is-invalid @enderror" type="text" name="minat_bakat"
                                        id="minat_bakat" value="{{ old('minat_bakat') }}" required autocomplete="minat_bakat"></textarea>
                                    @error('minat_bakat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="no_hp"
                                    class="col-md-4 col-form-label text-md-end">{{ __('No. Whatsapp') }}</label>
                                <div class="col-md-6">
                                    <input id="no_hp" type="number"
                                        class="form-control @error('no_hp') is-invalid @enderror" name="no_hp"
                                        value="{{ old('no_hp') }}" required autocomplete="no_hp">
                                    @error('no_hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="gambar"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Gambar') }}</label>
                                <div class="col-md-6">
                                    <input id="gambar" type="file"
                                        class="form-control @error('gambar') is-invalid @enderror" name="gambar"
                                        required>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12">
                                    <button type="text" class="btn btn-danger">
                                        {{ __('Daftar') }}
                                    </button>
                                    <a href="{{ route('dashboard') }}" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
