@extends('layout.landingPage.app')
@section('title', 'News')
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
    <!-- Hero Section Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i>Ceo Store</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->
@endsection
