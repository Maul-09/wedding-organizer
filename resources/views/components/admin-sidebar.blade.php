<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('aset/image/logo.png') }}" alt="">
        <span class="d-none d-lg-block">Dashboard</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li>

            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="dashboard/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ $admin->username }}</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ $admin->username }}</h6>
                        <span>{{ $admin->role }}</span>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-person"></i>
                            <span>Profile Saya</span>
                        </a>
                    </li>
                    <li>
                    <hr class="dropdown-divider">
                    </li>

                    <li>
                        <form method="POST" action="{{ route('auth.logout') }}">
                        @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<aside id="sidebar" class="sidebar">
<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard-admin') }}">
            <i class="bi bi-speedometer2"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journals"></i><span>Halaman Client</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
            <a href="{{ route('admin.page.client') }}">
                <i class="bi bi-circle"></i><span>Beranda</span>
            </a>
            </li>
            <li>
            <a href="{{ route('admin.page.about.client') }}">
                <i class="bi bi-circle"></i><span>Tentang Kami</span>
            </a>
            </li>
            <li>
            <a href="{{ route('admin.page.contact.client') }}">
                <i class="bi bi-circle"></i><span>Kontak kami</span>
            </a>
            </li>
        </ul>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-archive"></i><span>Paket Layanan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('admin.package.wedding') }}">
                    <i class="bi bi-circle"></i><span>Wedding</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.package.prewed') }}">
                    <i class="bi bi-circle"></i><span>Prewed</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.package.dekorasi') }}">
                    <i class="bi bi-circle"></i><span>Dekorasi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.package.dokumentasi') }}">
                    <i class="bi bi-circle"></i><span>Dokumentasi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('page.paket.mua') }}">
                    <i class="bi bi-circle"></i><span>Mua & Busana</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.show.booking') }}">
            <i class="bi bi-bookmark"></i>
            <span>Booking Masuk</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.testimoni') }}">
            <i class="bi bi-star"></i>
            <span>Testimoni</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.data-pengguna') }}">
            <i class="bi bi-person"></i>
            <span>Data Pengguna</span>
        </a>
    </li>
</ul>

</aside>
