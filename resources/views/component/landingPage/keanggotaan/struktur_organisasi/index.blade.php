@extends('layout.landingPage.app')
@section('title', 'Struktur Organisasi')
@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href=""><i class="fa fa-home"></i>Keanggotaan</a>
                        <span>Struktur Organisasi</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Section Begin -->
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4>Struktur Organisasi</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($inti as $item)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg"
                                            data-setbg="{{ asset('storage/' . $item->gambar) }}">
                                            <div class="view">{{ $item->macaddress }}</div>
                                            <h3 class="comment">{{ $item->jabatan }}</h3>
                                        </div>
                                        <div class="product__item__text">
                                            <h5><a href="">{{ $item->nama }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4>Information Officer</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($io as $item)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg"
                                            data-setbg="{{ asset('storage/' . $item->gambar) }}">
                                            <div class="view">{{ $item->macaddress }}</div>
                                            <h3 class="comment">{{ $item->jabatan }}</h3>
                                        </div>
                                        <div class="product__item__text">
                                            <h5><a href="">{{ $item->nama }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4>Technical Officer</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($to as $item)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg"
                                            data-setbg="{{ asset('storage/' . $item->gambar) }}">
                                            <div class="view">{{ $item->macaddress }}</div>
                                            <h3 class="comment">{{ $item->jabatan }}</h3>
                                        </div>
                                        <div class="product__item__text">
                                            <h5><a href="">{{ $item->nama }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4>Financial Officer</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($fo as $item)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg"
                                            data-setbg="{{ asset('storage/' . $item->gambar) }}">
                                            <div class="view">{{ $item->macaddress }}</div>
                                            <h3 class="comment">{{ $item->jabatan }}</h3>
                                        </div>
                                        <div class="product__item__text">
                                            <h5><a href="">{{ $item->nama }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Product Section End -->
@endsection
