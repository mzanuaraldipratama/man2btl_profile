<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('img/logo.png') }}" alt="">
            <span>MAN 2 Batola</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link scrollto {{ request()->routeIs('galeri') ? 'active' : '' }}"
                        href="{{ route('galeri') }}">Galeri</a></li>
                <li><a class="nav-link scrollto {{ request()->routeIs('mapel') ? 'active' : '' }}"
                        href="{{ route('mapel') }}">Mata Pelajaran</a></li>
                <li><a class="nav-link scrollto {{ request()->routeIs('ekskul') ? 'active' : '' }}"
                        href="{{ route('ekskul') }}">Ekskul</a></li>
                <li><a class="nav-link scrollto {{ request()->routeIs('guru') ? 'active' : '' }}"
                        href="{{ route('guru') }}">Guru & Staf</a></li>
                <li><a class="getstarted scrollto {{ request()->routeIs('psb') ? 'active' : '' }}"
                        href="{{ route('psb') }}">PSB</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
