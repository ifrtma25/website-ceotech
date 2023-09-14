<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="./index.html">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="" width="100px">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                                <a href="{{ route('dashboard') }}">Homepage</a>
                            </li>

                            <li>
                                <a href="">Keanggotaan <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="{{ route('struktur_organisasi') }}">Struktur Organisasi</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('demisioner') }}">Demisioner</a>
                                    </li>
                                    <li>
                                        <a href="{{-- route('member') --}}">Member</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="{{ Request::is('profil') ? 'active' : '' }}">
                                <a href="{{ route('profil') }}">Profil</a>
                            </li>
                            <li class="">
                                <a class="" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
