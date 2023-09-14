@extends('layout.app')
@section('title', 'Profil')
@section('content')
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="{{ asset('assets/img/3.JPG') }}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2>Welcome to Maroon Squad</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="{{ asset('assets/img/4.JPG') }}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2>Here Is The Source Of Information</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="{{ asset('assets/img/2.JPG') }}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2>About The Activities Of Ceotech_</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
