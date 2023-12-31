<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="./index.html">
                        <img src="{{ asset('assets/landingPage/img/logo.png') }}" alt="" width="100px">
                    </a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="{{ Request::is('/') ? 'active' : '' }}">
                                <a href="{{ route('dashboard') }}">Beranda</a>
                            </li>

                            <li class="{{ Request::is('profile') ? 'active' : '' }}">
                                <a href="{{ route('profile') }}">Profile</a>
                            </li>

                            <li>
                                <a href="#">Keanggotaan <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="{{ route('member') }}">Member</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('demisioner') }}">Demisioner</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('struktur.organisasi') }}">Struktur Organisasi</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="{{ Request::is('ceoStore') ? 'active' : '' }}">
                                <a href="{{ route('ceoStore') }}">CeoStore</a>
                            </li>

                            {{-- <li class="{{ Request::is('gallery') ? 'active' : '' }}">
                                <a href="{{ route('gallery') }}">Galeri</a>
                            </li> --}}

                            <li class="{{ Request::is('pendaftaran') ? 'active' : '' }}">
                                <a href="{{ route('pendaftaran') }}">Pendaftaran</a>
                            </li>

                            <li class="{{ Request::is('login') ? 'active' : '' }} text-right">
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                            {{-- <li class="">
                                <a class="" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li> --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
