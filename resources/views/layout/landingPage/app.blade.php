<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ceotech_ | @yield('title')</title>

    @include('includes.landingPage.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

</head>

<body>
    <!-- Header Section Begin -->
    @include('includes.landingPage.navbar')
    <!-- Header End -->

    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3 class="text-light">About</h3>
                    <p>
                        Ceotech_ adalah unit kegiatan kemahsiswaan yang di naungi oleh kampus STMIK Handayani
                        Makakassar
                        dan dirikan pada tahun 2014. tepatnya tanggal 17 Desember 2014 di Digital Inovation Lounge
                        (DILO)
                    </p>
                </div>
                <div class="col-lg-4">
                    <h3 class="text-light">Contact US</h3>
                    <p>
                        Jl. Adhyaksa Baru No. 1 Makassar, Sulawesi - Selatan <br>
                        ceotech_@gmail.com <br>
                        082191725827
                    </p>
                </div>
                <div class="col-lg-4">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart"
                            aria-hidden="true"></i> by <a href="" target="_blank">__ifrtma</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{ asset('assets/landingPage/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/landingPage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/landingPage/js/player.js') }}"></script>
    <script src="{{ asset('assets/landingPage/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/landingPage/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/landingPage/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/landingPage/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/landingPage/js/main.js') }}"></script>


</body>

</html>
