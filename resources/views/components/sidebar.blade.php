@use(App\Models\User)

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('admin/index3.html')}}" class="brand-link">
        <img src="{{ asset('admin/dist/img/logo2.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Cuti<span style="color: #18D26E;">Now</span></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name}}</a>
                <span class= "text-primary"> Role: {{Auth::user()->role}}</span>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @auth
                            @if (Auth::user()->role == User:: ROLE_ADMIN)
                            <li class="nav-item">
                                <a href="{{ asset('dashboard/divisi')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Divisi</p>
                                </a>
                            </li>
                            @endif
                        @endauth
                        <li class="nav-item">
                            <a href="{{ asset('dashboard/pegawai')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pegawai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('dashboard/pengajuan_cuti')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pengajuan Cuti</p>
                            </a>
                        </li>
                        @Auth
                        @if (Auth::user()->role == User:: ROLE_ADMIN)
                        <li class="nav-item">
                            <a href="{{ asset('dashboard/jatah_cuti')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Jatah Cuti</p>
                            </a>
                        </li>
                        @endif
                        @endauth
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

