<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('LTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('LTE/dist/css/adminlte.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tiny.cloud/1/rwy4a06oagig7ftr5exn66h4njzdfi07sa6nyvo1nkazrdw8/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>


</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/dashboard" class="brand-link">
                <img src="{{ asset('LTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Side</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('LTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="/dashboard" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="/" target="_blank" class="nav-link">
                                <i class="fas fa-external-link-alt"></i>
                                <p>
                                    Lihat Website
                                </p>
                            </a>
                        </li>

                        <!-- Homepage Dropdown -->
                        <li
                            class="nav-item has-treeview {{ Request::is('sliders*', 'postscms*', 'kscms*', 'desc*', 'kegcms*', 'contactus*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Homepage
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/sliders" class="nav-link  {{ Request::is('sliders') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sliders</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/postscms" class="nav-link  {{ Request::is('postscms') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>News</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/kscms" class="nav-link  {{ Request::is('kscms') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kerjasama</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/desc" class="nav-link  {{ Request::is('desc') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Deskripsi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/kegcms" class="nav-link  {{ Request::is('kegcms') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kegiatan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/contactcms"
                                        class="nav-link  {{ Request::is('contactcms') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Contact US</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Profile Dropdown -->
                        <li
                            class="nav-item has-treeview {{ Request::is('sejcms', 'logocms', 'vmcms') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Profile
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/sejcms" class="nav-link {{ Request::is('sejcms') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sejarah</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/vmcms" class="nav-link  {{ Request::is('vmcms') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Visi-Misi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/logocms" class="nav-link  {{ Request::is('logocms') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Logo</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Jurusan Dropdown -->
                        <li
                            class="nav-item has-treeview {{ Request::is('tipcms', 'tmcms', 'tsmcms', 'tpcms') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>
                                    Jurusan
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/tipcms" class="nav-link {{ Request::is('tipcms') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>TIP</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/tmcms" class="nav-link {{ Request::is('tmcms') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>TM</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/tsmcms" class="nav-link {{ Request::is('tsmcms') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>TSM</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/tpcms" class="nav-link {{ Request::is('tpcms') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>TP</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="nav-item has-treeview {{-- {{ request()->routeIs('gallery.cmsIndex', ['type' => ['tip', 'tm', 'tsm', 'tp']]) ? 'menu-open' : '' }} --}} ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-images"></i>
                                <p>
                                    Gallery
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('gallery.cmsIndex', ['type' => 'tip']) }}"
                                        class="nav-link {{-- {{ request()->routeIs('gallery.cmsIndex', ['type' => 'tip']) ? 'active' : '' }} --}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>TIP</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('gallery.cmsIndex', ['type' => 'tm']) }}"
                                        class="nav-link {{-- {{ request()->routeIs('gallery.cmsIndex', ['type' => 'tm']) ? 'active' : '' }} --}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>TM</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('gallery.cmsIndex', ['type' => 'tsm']) }}"
                                        class="nav-link {{-- {{ request()->routeIs('gallery.cmsIndex', ['type' => 'tsm']) ? 'active' : '' }} --}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>TSM</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('gallery.cmsIndex', ['type' => 'tp']) }}"
                                        class="nav-link {{--{{ request()->routeIs('gallery.cmsIndex', ['type' => 'tp']) ? 'active' : '' }} --}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>TP</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="nav-item has-treeview {{ (Request::is('fascms', 'sarpracms') || Request::is('fas/edit/*', 'sarpra/edit/*')) ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Route::is('fas.edit', 'sarpra.edit') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-warehouse"></i>
                                <p>
                                    Fasilitas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/fascms" class="nav-link {{ Request::is('fascms') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fasilitas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/sarpracms" class="nav-link {{ Request::is('sarcms') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sarana Prasarana</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Eskul Dropdown -->
                        <li
                            class="nav-item has-treeview {{ Request::is('futsalcms', 'mmcms', 'paskibcms', 'pramukacms', 'eksulcms') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-snowboarding"></i>
                                <p>
                                    Ekstrakurikuler
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/eskulcms" class="nav-link {{ Request::is('eskulcms') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Eskul mainpage</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/futsalcms"
                                        class="nav-link {{ Request::is('futsalcms') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Futsal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/mmcms" class="nav-link {{ Request::is('mmcms') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Multimedia</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/paskibcms"
                                        class="nav-link {{ Request::is('paskibcms') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Paskibraka</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/pramukacms"
                                        class="nav-link {{ Request::is('pramukacms') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pramuka</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        @if (Gate::allows('read ppdb') || Gate::allows('create role'))
                        <li class="nav-item has-treeview {{ Request::is('datappdb') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    PPDB
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/datappdb" class="nav-link {{ Request::is('datappdb') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        {{-- NOTES --}}

                        {{-- Use if statement for 2 or more roles that can access the certain part --}}
                        {{-- Use can statement for only ONE roles --}}

                        @can('create role')
                        <li
                            class="nav-item has-treeview {{ Request::is('role-show', 'permission-show') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Settings
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/role-show"
                                        class="nav-link {{ Request::is('role-show') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Roles</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/permission-show"
                                        class="nav-link {{ Request::is('permission-show') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Permissions</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endcan

                        <!-- Log Out -->
                        <li class="nav-item">
                            <a href="/logout" class="nav-link">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>
                                    Log Out
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>

                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Content Management System</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="m-0">@yield('title')</h5>
                                </div>
                                <div class="card-body">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Zian
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; {{ date('Y')}} <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('LTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('LTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('LTE/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('js/tinymce.js') }}"></script>
</body>

</html>