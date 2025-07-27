<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('page.hero') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('aset/image/icon-brand.png') }}" alt="">
            <h1 class="sitename">Diary Project</h1>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li>
                    <a href="{{ route('page.hero') }}" class="{{ request()->routeIs('page.hero') ? 'active' : '' }}">Beranda</a>
                </li>

                <li>
                    <a href="{{ route('page.about') }}" class="{{ request()->routeIs('page.about') ? 'active' : '' }}">Tentang Kami</a>
                </li>

                <li class="dropdown">
                    <a href="#"><span>Kategori Paket</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                    <li><a href="{{ route('page.paket.wedding') }}">Wedding</a></li>
                    <li><a href="{{ route('page.paket.prewed') }}">Prewedding</a></li>
                    <li><a href="{{ route('page.paket.mua') }}">Mua & Buasana</a></li>
                    <li><a href="{{ route('page.paket.dekor') }}">Dekorasi</a></li>
                    <li><a href="{{ route('page.paket.dokumentasi') }}">Dokumentasi</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('page.contact') }}" class="{{ request()->routeIs('page.contact') ? 'active' : '' }}">Kontak</a>
                </li>

                <li>
                    <a href="{{ route('auth.show.login') }}" class="btn-cta">
                    <span>Sign In</span>
                    <i class="bi bi-box-arrow-in-right"></i>
                    </a>
                </li>
                </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
