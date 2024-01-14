<ul class="navbar-nav bg-white sidebar sidebar-light accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
            <img class="ulogo" src="{{ asset('img/u.png') }}" alt="Udinus" width="30%" >
            <style>
                .ulogo:hover{width:32%;}
                .ulogo{transition: 0.1s;}
            </style>
            {{-- <div class="sidebar-brand-text mx-3">E-Voku</div> --}}
        </div>
        {{-- <div class="sidebar-brand-text mx-3">E-Voku <sup>Dinus</sup></div> --}}
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    @auth
        @if (auth()->user()->role === 'admin')
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link text-dark" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <li class="nav-item active">
                <a class="nav-link text-dark" href="/mahasiswa">
                    <i class="fas fa-user text-dark"></i>
                    <span>Mahasiswa</span>
                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link text-dark" href="/kandidat">
                    <i class="fas fa-users text-dark"></i>
                    <span>Kandidat</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        @elseif (auth()->user()->role === 'student')
            <li class="nav-item active">
                <a class="nav-link text-dark" href="/home">
                    <i class="fas fa-fw fa-home text-dark"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link text-dark" href="/cek-integrasi">
                    <i class="bi bi-patch-check-fill text-dark"></i>
                    <span>Cek Integrasi</span>
                </a>
            </li>

            {{-- <li class="nav-item active">
                <a class="nav-link" href="/pengaduan">
                    <i class="fas fa-envelope-open-text"></i>
                    <span>Pengaduan</span>
                </a>
            </li> --}}
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        @endif
    @endauth
</ul>

