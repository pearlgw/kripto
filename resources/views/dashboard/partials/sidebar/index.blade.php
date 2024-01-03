<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">E-Vote <sup>Dinus</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    @auth
        @if (auth()->user()->role === 'admin')
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin">
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
                <a class="nav-link" href="/mahasiswa">
                    <i class="fas fa-user"></i>
                    <span>Mahasiswa</span>
                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/kandidat">
                    <i class="fas fa-users"></i>
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
                <a class="nav-link" href="/home">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/cek-integrasi">
                    <i class="fas fa-money-check"></i>
                    <span>Cek Integrasi</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        @endif
    @endauth
</ul>

