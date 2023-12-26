@extends('layout.landingPage.app')
@section('title', 'CeoStore')
@section('content')
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
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4>Ceo Store</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- @foreach ($angkatan6 as $item) --}}
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg"
                                        data-setbg="{{ asset('assets/landingPage/img/struktur/TO/irsyandi.jpg') }}{{-- asset('storage/' . $item->gambar) --}}">
                                        <div class="view">21 Desember 2023{{-- $item->jurusan --}}</div>
                                        <h3 class="comment">By : Ngebacot{{-- $item->npm --}}</h3>
                                    </div>
                                    {{-- <div class="product__item__text">
                                    <h5><a href="">{{ $item->nama }}</a></h5>
                                </div> --}}
                                </div>
                            </div>
                            {{-- @endforeach --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
