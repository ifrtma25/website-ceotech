@extends('layout.adminPage.app')
@section('title', 'Profil')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30"> <img src="{{ asset('assets/landingPage/img/struktur/akbar.JPG') }}"
                                class="rounded-circle" width="150" />
                            <h4 class="card-title m-t-10">Hanna Gover</h4>
                            <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-4"><a href="" class="link"><i class="fa fa-user"></i>
                                        <font class="font-medium">254</font>
                                    </a></div>
                                <div class="col-4"><a href="" class="link"><i class="fa fa-image"></i>
                                        <font class="font-medium">54</font>
                                    </a></div>
                            </div>
                        </center>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="card-body">
                        <small class="text-muted">Email address </small>
                        <h6>ceotech_uhm@gmail.com</h6>
                        <small class="text-muted p-t-30 db">Phone</small>
                        <h6>+91 654 784 547</h6>
                        <small class="text-muted p-t-30 db">Address</small>
                        <h6>Jl. Adhyaksa Baru No.1</h6>
                        <div class="map-box">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.1198266225992!2d119.44729384980623!3d-5.1526834870752545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2c5b009c7b9%3A0xdd68d36bc04fc8c0!2sUHM-Universitas%20Handayani%20Makassar!5e1!3m2!1sid!2sid!4v1697610361526!5m2!1sid!2sid"
                                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div> <small class="text-muted p-t-30 db">Social Profile</small>
                        <br />
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                        <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
