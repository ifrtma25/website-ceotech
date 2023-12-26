@extends('layout.landingPage.app')
@section('title', 'Profile')
@section('content')
    @if (session('status'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('status') }}"
            });
        </script>
    @endif
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i>Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
