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
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">

            </div>
        </div>
    </section>
    <!-- Hero Section End -->
@endsection
